import * as vscode from 'vscode';
import * as cp from 'child_process';
import * as path from 'path';
import * as os from 'os';
import * as fs from 'fs';

export function activate(context: vscode.ExtensionContext) {
    let disposable = vscode.commands.registerCommand('validador-db.analizarEsquema', async () => {
        const editor = vscode.window.activeTextEditor;
        if (!editor) {
            vscode.window.showErrorMessage('No hay un editor activo.');
            return;
        }

        const document = editor.document;
        // Si hay una selección, usarla; si no, usar todo el documento
        const selection = editor.selection;
        const text = selection.isEmpty ? document.getText() : document.getText(selection);

        if (!text.trim()) {
            vscode.window.showErrorMessage('El documento o selección está vacío.');
            return;
        }

        vscode.window.withProgress({
            location: vscode.ProgressLocation.Notification,
            title: "Analizando esquema...",
            cancellable: false
        }, async (progress) => {
            return new Promise<void>((resolve) => {
                // Escribir el texto a un archivo temporal para que CLI.py lo lea
                const tempFilePath = path.join(os.tmpdir(), `esquema_${Date.now()}.sql`);
                fs.writeFileSync(tempFilePath, text, 'utf-8');

                // Encontrar la ruta de core/cli.py
                // Asumiendo que vscode-extension está en la raíz del proyecto
                const workspaceFolders = vscode.workspace.workspaceFolders;
                if (!workspaceFolders) {
                    vscode.window.showErrorMessage('No estás en un workspace de VS Code.');
                    resolve();
                    return;
                }
                const workspaceRoot = workspaceFolders[0].uri.fsPath;
                const cliPath = path.join(workspaceRoot, 'core', 'cli.py');

                if (!fs.existsSync(cliPath)) {
                    vscode.window.showErrorMessage(`No se encontró el CLI en: ${cliPath}`);
                    resolve();
                    return;
                }

                const command = `python "${cliPath}" "${tempFilePath}"`;

                cp.exec(command, (error, stdout, stderr) => {
                    // Limpiar el archivo temporal
                    if (fs.existsSync(tempFilePath)) {
                        fs.unlinkSync(tempFilePath);
                    }

                    if (error) {
                        vscode.window.showErrorMessage(`Error ejecutando análisis: ${error.message}`);
                        console.error(stderr);
                        resolve();
                        return;
                    }

                    try {
                        const reporte = JSON.parse(stdout);
                        if (reporte.error) {
                            vscode.window.showErrorMessage(`Error en análisis: ${reporte.error}`);
                            resolve();
                            return;
                        }

                        // Formatear el reporte como comentario SQL
                        let reporteTexto = `\n\n/*\n=== REPORTE DE NORMALIZACIÓN ===\n`;
                        reporteTexto += `Nivel Alcanzado: ${reporte.nivel_actual.toUpperCase()}\n\n`;

                        if (reporte.violaciones_1fn && reporte.violaciones_1fn.length > 0) {
                            reporteTexto += `[VIOLACIONES 1FN]\n`;
                            reporte.violaciones_1fn.forEach((v: any) => {
                                reporteTexto += `- Tabla '${v.tabla}': ${v.mensaje}\n`;
                                if (v.sugerencia_columnas) {
                                    reporteTexto += `  Sugerencia: Dividir en [${v.sugerencia_columnas.join(', ')}]\n`;
                                }
                            });
                            reporteTexto += `\n`;
                        }

                        if (reporte.violaciones_2fn && reporte.violaciones_2fn.length > 0) {
                            reporteTexto += `[VIOLACIONES 2FN]\n`;
                            reporte.violaciones_2fn.forEach((v: any) => {
                                reporteTexto += `- Tabla '${v.tabla}', Columna '${v.columna}': ${v.mensaje}\n`;
                                if (v.depende_de) {
                                    reporteTexto += `  Depende solo de: [${v.depende_de.join(', ')}]\n`;
                                }
                            });
                            reporteTexto += `\n`;
                        }

                        if (reporte.violaciones_3fn && reporte.violaciones_3fn.length > 0) {
                            reporteTexto += `[VIOLACIONES 3FN]\n`;
                            reporte.violaciones_3fn.forEach((v: any) => {
                                reporteTexto += `- Tabla '${v.tabla}', Columna '${v.columna}': ${v.mensaje}\n`;
                                if (v.depende_de) {
                                    reporteTexto += `  Depende de otra(s) columna(s) no-clave: [${v.depende_de.join(', ')}]\n`;
                                }
                            });
                            reporteTexto += `\n`;
                        }

                        if (reporte.mejoras_opcionales && reporte.mejoras_opcionales.length > 0) {
                            reporteTexto += `[MEJORAS OPCIONALES]\n`;
                            reporte.mejoras_opcionales.forEach((v: any) => {
                                reporteTexto += `- Tabla '${v.tabla}': ${v.mensaje}\n`;
                            });
                            reporteTexto += `\n`;
                        }

                        reporteTexto += `=================================\n*/\n`;

                        // Inyectar al final del documento
                        editor.edit(editBuilder => {
                            const lastLine = document.lineAt(document.lineCount - 1);
                            editBuilder.insert(lastLine.range.end, reporteTexto);
                        }).then(success => {
                            if (success) {
                                vscode.window.showInformationMessage('Reporte inyectado en el documento.');
                            } else {
                                vscode.window.showErrorMessage('No se pudo inyectar el reporte.');
                            }
                        });

                    } catch (parseError) {
                        vscode.window.showErrorMessage('El CLI no devolvió un JSON válido.');
                        console.error("Salida original del CLI:", stdout);
                    }

                    resolve();
                });
            });
        });
    });

    context.subscriptions.push(disposable);
}

export function deactivate() {}
