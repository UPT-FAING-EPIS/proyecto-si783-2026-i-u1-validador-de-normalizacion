from core.parser import parse_schema
from visualizacion.diagrama_er import generar_mermaid_er

sql = """
CREATE TABLE cursos ( `id` int(11) NOT NULL AUTO_INCREMENT, `codigo` varchar(20) NOT NULL );
CREATE TABLE docentes ( `id` int(11) NOT NULL AUTO_INCREMENT, `nombre` varchar(50) NOT NULL );
CREATE TABLE estudiantes ( `id` int(11) NOT NULL AUTO_INCREMENT, `nombre` varchar(50) NOT NULL );
CREATE TABLE evaluaciones ( `id` int(11) NOT NULL AUTO_INCREMENT, `unidad_id` int(11) NOT NULL );
CREATE TABLE notas ( `id` int(11) NOT NULL AUTO_INCREMENT, `estudiante_id` int(11) NOT NULL );
CREATE TABLE tokens ( `id` int(11) NOT NULL AUTO_INCREMENT, `docente_id` int(11) NOT NULL );
CREATE TABLE unidades ( `id` int(11) NOT NULL AUTO_INCREMENT, `curso_id` int(11) NOT NULL );
"""

esquema = parse_schema(sql, 'sql')
mermaid = generar_mermaid_er(esquema)
with open('mermaid_test.txt', 'w') as f:
    f.write(mermaid)
print(mermaid)
