[FD01-EPIS-Informe de Factibilidad_Perez Fabrizio - Manuel Dongo.docx.md](https://github.com/user-attachments/files/27297999/FD01-EPIS-Informe.de.Factibilidad_Perez.Fabrizio.-.Manuel.Dongo.docx.md)
![C:\\Users\\EPIS\\Documents\\upt.png][image1]

**UNIVERSIDAD PRIVADA DE TACNA**

**FACULTAD DE INGENIERÍA**

**Escuela Profesional de Ingeniería de Sistemas**

 **DataQuest: Sistema de Validación de Normalización de Base de Datos Relacionales** 

Curso: **BASE DE DATOS II**

Docente: *Mag. Patrick Cuadros Quiroga*

Integrantes:  
***Dongo Plaza,Manuel Andree 				2023076842***  
***Perez Peralta, Fabrizio Salvador Elias 		2023077476***

**Tacna – Perú**  
**2026**

# **DataQuest: Sistema de Validación de Normalización de base de datos relacionales**

# **Informe de Factibilidad**

# 

# **Versión 1.5**

| CONTROL DE VERSIONES |  |  |  |  |  |
| :---: | :---: | :---: | :---: | :---: | ----- |
| Versión | Hecha por | Revisada por | Aprobada por | Fecha | Motivo |
| 1.0 | FSEPP MADP |  |  | 01/05/2026 | Versión Original |
| 1.5 | FSEPP MADP |  |  | 01/05/2026 | Corrección de la estructura y propuesta del Proyecto |

**ÍNDICE GENERAL**

[1\. Descripción del Proyecto	5](#1.-descripción-del-proyecto)

[1.1 Nombre del proyecto	5](#1.1-nombre-del-proyecto)

[1.2 Duración del proyecto	5](#1.2-duración-del-proyecto)

[1.3 Descripción	5](#1.3-descripción)

[1.4 Objetivos	6](#1.4-objetivos)

[1.4.1 Objetivo general	6](#1.4.1-objetivo-general)

[1.4.2 Objetivos Específicos	6](#1.4.2-objetivos-específicos)

[2\. Riesgos	7](#2.-riesgos)

[3\. Análisis de la Situación actual	9](#3.-análisis-de-la-situación-actual)

[3.1 Planteamiento del problema	9](#3.1-planteamiento-del-problema)

[3.2 Consideraciones de hardware y software	10](#3.2-consideraciones-de-hardware-y-software)

[4\. Estudio de Factibilidad	10](#4.-estudio-de-factibilidad)

[4.1 Factibilidad Técnica	11](#4.1-factibilidad-técnica)

[4.2 Factibilidad Económica	11](#4.2-factibilidad-económica)

[4.2.1 Costos Generales	11](#4.2.1-costos-generales)

[4.2.2 Costos operativos durante el desarrollo	13](#4.2.2-costos-operativos-durante-el-desarrollo)

[4.2.3 Costos del ambiente	14](#4.2.3-costos-del-ambiente)

[4.2.4 Costos de personal	14](#4.2.4-costos-de-personal)

[4.2.5 Costos totales del desarrollo del sistema	16](#4.2.5-costos-totales-del-desarrollo-del-sistema)

[4.3 Factibilidad Operativa	17](#4.3-factibilidad-operativa)

[4.4 Factibilidad Legal	18](#4.4-factibilidad-legal)

[4.5 Factibilidad Social	20](#4.5-factibilidad-social)

[4.6 Factibilidad Ambiental	21](#4.6-factibilidad-ambiental)

[5\. Análisis Financiero	22](#5.-análisis-financiero)

[5.1 Justificación de la Inversión	23](#5.1-justificación-de-la-inversión)

[5.1.1 Beneficios del Proyecto	23](#5.1.1-beneficios-del-proyecto)

[5.1.2 Criterios de Inversión	24](#5.1.2-criterios-de-inversión)

[5.1.2.1 Relación Beneficio/Costo (B/C)	25](#5.1.2.1-relación-beneficio/costo-\(b/c\))

[5.1.2.2 Valor Actual Neto (VAN)	25](#5.1.2.2-valor-actual-neto-\(van\))

[5.1.2.3 Tasa Interna de Retorno (TIR)	26](#5.1.2.3-tasa-interna-de-retorno-\(tir\))

[5.1.3. Conclusión del Análisis Financiero	26](#5.1.3.-conclusión-del-análisis-financiero)

[6\. Conclusiones	27](#6.-conclusiones)

**Informe de Factibilidad**

# **1\. Descripción del Proyecto** {#1.-descripción-del-proyecto}

## **1.1 Nombre del proyecto** {#1.1-nombre-del-proyecto}

DataQuest: Sistema de validación de normalización de base de datos relacionales. 

## **1.2 Duración del proyecto** {#1.2-duración-del-proyecto}

Fecha de Inicio: 21 de marzo de 2026 

Fecha de Fin: 30 de junio de 2026 

Duración Total: 3 meses. 

## **1.3 Descripción** {#1.3-descripción}

El proyecto DataQuest es una plataforma web educativa interactiva enfocada en la enseñanza y validación de la normalización de bases de datos relacionales, diseñada específicamente para estudiantes y profesionales de TI que requieren dominar el diseño de esquemas libres de redundancias. La solución integrará un validador automático de dependencias funcionales y formas normales (1FN, 2FN, 3FN, BCNF) con un visualizador de esquemas interactivo usando React Flow, además de módulos de puzzles de aprendizaje y retos semanales. El sistema permitirá al usuario ingresar tablas y dependencias funcionales, y visualizar en tiempo real el nivel de normalización alcanzado, detectando violaciones (dependencias parciales, transitivas o determinantes no llave) mediante una interfaz clara que señala los atributos problemáticos. Esto permitirá a estudiantes y profesionales optimizar su proceso de aprendizaje, identificar errores comunes y aplicar buenas prácticas en el diseño de bases de datos, abordando desafíos como la falta de retroalimentación inmediata y la dificultad para visualizar relaciones complejas entre atributos.

## **1.4 Objetivos** {#1.4-objetivos}

### **1.4.1 Objetivo general** {#1.4.1-objetivo-general}

Validar y corregir esquemas relacionales mediante un entorno interactivo que garantiza la correcta normalización de las bases de datos, eliminando la redundancia de datos y optimizando la relación de datos a través de una experiencia de usuario orientada al autoaprendizaje.

### **1.4.2 Objetivos Específicos** {#1.4.2-objetivos-específicos}

* OE1: Validar automáticamente dependencias funcionales y formas normales. Implementar un motor de validación que analice esquemas ingresados por el usuario, calcule el cierre de atributos, identifique claves candidatas y determine si el esquema cumple con 1FN, 2FN, 3FN y BCNF, señalando las violaciones específicas.  
* OE2: Visualizar esquemas de base de datos de forma gráfica. Diseñar un visualizador interactivo que genere diagramas entidad-relación a partir de las tablas y dependencias funcionales ingresadas, mostrando atributos, claves primarias, claves foráneas y dependencias funcionales con colores diferenciados.  
* OE3: Crear puzzles de aprendizaje secuenciales. Desarrollar un módulo de puzzles que guíe al usuario paso a paso en la normalización de ejemplos prácticos, ofreciendo retroalimentación inmediata, pistas progresivas y una puntuación que refleje su nivel de aciertos.  
* OE4: Implementar retos semanales con ranking y gamificación. Establecer un sistema de retos semanales donde los usuarios resuelvan problemas de normalización en un tiempo límite, acumulen puntos, compitan en un ranking (anónimo o por apodo) y desbloqueen medallas virtuales.  
* OE5: Proveer retroalimentación detallada y personalizada. Desarrollar un subsistema que, ante un error (redundancia, dependencia funcional mal identificada, pérdida de dependencias en descomposición), explique la causa del error, muestre un ejemplo corregido y sugiera pasos para mejorar el diseño.  
* OE6: Facilitar el seguimiento del progreso a instructores o administradores. Diseñar un panel de control que permita a los docentes o responsables de capacitación visualizar el avance de los estudiantes (número de puzzles resueltos, puntuación en retos, áreas de mejora) y exportar reportes agregados.

# **2\. Riesgos** {#2.-riesgos}

| Riesgo | Probabilidad | Impacto | Estrategia de Mitigación |
| :---- | :---- | :---- | :---- |
| Complejidad algorítmica para validar correctamente formas normales (especialmente BCNF) y dependencias funcionales.  | Media  | Alto  | Investigar y adaptar algoritmos probados (cierre de atributos, cobertura minimal, descomposición de Bernstein). Realizar pruebas exhaustivas con casos de prueba conocidos y validar incrementalmente cada componente del algoritmo.  |
| Baja adopción por parte de estudiantes o profesionales por interfaz poco intuitiva o falta de motivación.  | Media  | Medio  | Incorporar elementos de gamificación (medallas, niveles, rankings) y diseñar tutoriales interactivos. Realizar pruebas piloto con usuarios reales y ajustar la interfaz según la retroalimentación recibida.  |
| Dependencia de librerías externas no mantenidas (por ejemplo, react-flow o alguna otra para diagramas).  | Bajo | Medio | Evaluar previamente el estado de las librerías (frecuencia de commits, número de issues abiertas, actividad de la comunidad). Tener un plan de contingencia con una librería alternativa (como dagre-d3 o vis-network) y mantener la lógica de visualización desacoplada.  |
| Rendimiento del algoritmo de normalización con esquemas grandes (más de 20 atributos), provocando lentitud o tiempos de respuesta elevados.  | Media | Medio | Optimizar el algoritmo con estructuras de datos eficientes (conjuntos, caché de cierres, poda de estados). Implementar procesamiento asíncrono con indicadores de carga y diseñar el sistema para escalar horizontalmente, garantizando el manejo de grandes volúmenes de atributos sin degradación significativa.  |

# **3\. Análisis de la Situación actual** {#3.-análisis-de-la-situación-actual}

## **3.1 Planteamiento del problema** {#3.1-planteamiento-del-problema}

En el ámbito académico y de capacitación profesional, los estudiantes y profesionales de TI presentan dificultades recurrentes para identificar correctamente las dependencias funcionales, aplicar las formas normales (especialmente 2FN, 3FN y BCNF) y diseñar esquemas de bases de datos sin redundancias. Actualmente, la práctica se realiza mediante ejercicios en papel, documentos electrónicos sin validación automática, o con herramientas genéricas que no están especializadas en normalización. La retroalimentación sobre los errores suele ser manual, tardía y no personalizada. Como resultado, la curva de aprendizaje se alarga, los errores se consolidan y la calidad de los diseños de bases de datos producidos por estudiantes y profesionales noveles es deficiente. DataQuest surge como una solución integral que automatiza la validación, ofrece retroalimentación inmediata, visualiza los esquemas y gamifica el aprendizaje mediante puzzles y retos semanales, todo ello accesible desde un navegador web. 

## **3.2 Consideraciones de hardware y software** {#3.2-consideraciones-de-hardware-y-software}

Se analiza la infraestructura existente y la requerida. No se dispone de un servidor institucional dedicado para este fin, por lo que se propone una solución basada en servicios en la nube.

* Hardware Existente (Útil):  
  * Computadoras de escritorio y laptops de los usuarios desarrolladores (equipos personales utilizados para la codificación, pruebas y documentación del proyecto).

* Hardware/Software Propuesto (Para la nueva solución):

  * VPS (Servidor Virtual Privado): Contratado específicamente para alojar la base de datos MySQL del sistema.  
  * Vercel: Plataforma en la nube utilizada para alojar la aplicación web (frontend React y backend PHP).

# **4\. Estudio de Factibilidad** {#4.-estudio-de-factibilidad}

A continuación, se detalla el estudio de factibilidad realizado para determinar la viabilidad del proyecto DataQuest, considerando las limitaciones de un contrato de pago único por desarrollo. 

## **4.1 Factibilidad Técnica** {#4.1-factibilidad-técnica}

Se evalúa la capacidad tecnológica disponible y la del equipo de desarrollo. La factibilidad técnica del proyecto es ALTA.

Tecnologías a utilizar en el desarrollo (propuesta por el equipo):

Se han seleccionado las siguientes tecnologías, que serán detalladas en el costeo, por ser técnicamente las más adecuadas:

* Backend y Lógica de Negocio: PHP con framework Laravel.  
* Base de Datos: MySQL.  
* Frontend y Visualizador de Esquemas: React con la librería react-flow.  
* Servidor para Base de Datos: Un VPS con sistema operativo Debian, con 4 Cores, 8 GB de RAM y 160 GB NVMe, destinado exclusivamente a alojar la base de datos MySQL.  
* Plataforma de Alojamiento Web: Vercel, utilizada para desplegar la aplicación web (frontend React y backend PHP).

## **4.2 Factibilidad Económica** {#4.2-factibilidad-económica}

El análisis económico se centra únicamente en los costos que el equipo de desarrollo debe cubrir con el pago único recibido por el desarrollo del sistema. La factibilidad económica para el equipo de desarrollo es VIABLE si se ajusta al presupuesto de costos fijos.

### **4.2.1 Costos Generales** {#4.2.1-costos-generales}

Incluyen los gastos de oficina y consumibles durante los 4 meses de desarrollo. No se adquieren nuevos equipos de cómputo, se utiliza el equipo de los integrantes.

Costo de materiales de oficina

| Concepto | Descripción del uso | Tipo de costo | Unidad de estimación | Tiempo | Costo mensual (S/) | Costo total (S/) |
| ----- | ----- | ----- | ----- | ----- | ----: | ----: |
| Papel bond | Utilizado para imprimir borradores, avances, fichas de revisión, actas internas y documentos de trabajo del proyecto. | Consumible | Paquete mensual estimado | 3 meses | 25.00 | 75.00 |
| Material de escritura y revisión | Incluye lapiceros, resaltadores, notas adhesivas y marcadores usados para revisión de avances, correcciones y organización de observaciones. | Consumible | Conjunto mensual estimado | 3 meses | 10.00 | 30.00 |
| **Total materiales de oficina** |  |  |  |  | **35.00** | **105.00** |

Resumen de costos generales

| Concepto | Descripción | Costo mensual (S/) | Tiempo | Costo total (S/) |
| :---: | :---: | :---: | :---: | :---: |
| Materiales de oficina | Insumos utilizados para la elaboración, revisión, organización y presentación de documentos del proyecto. | 35.00 | 3 meses | 105.00 |
| **Total costos generales** |  | **35.00** | **3 meses** | **105.00** |

Los costos generales del proyecto comprenden los materiales de oficina Estos costos son de tipo consumible, por lo que se estiman de manera mensual. El monto total asciende a S/ 1050.00, compuesto por S/ 105.00 en materiales de oficina.

### **4.2.2 Costos operativos durante el desarrollo** {#4.2.2-costos-operativos-durante-el-desarrollo}

Costos de servicios necesarios para la operatividad del equipo durante el proyecto.

| Recurso operativo | Tipo | Uso dentro del proyecto | Tiempo | Costo mensual (S/) | Costo total (S/) |
| ----- | ----- | ----- | ----- | ----- | ----- |
| Internet de banda ancha | Servicio | Comunicación del equipo, reuniones virtuales, acceso a repositorios, consulta técnica, pruebas en la nube y envío de entregables. | 3 meses | 110.00 | 330.00 |
| Energía eléctrica | Servicio | Funcionamiento de computadoras, router, equipos de red y dispositivos usados para programación, documentación, pruebas y validación. | 3 meses | 100.00 | 300.00 |
| **Total costos operativos** |  |  |  | **210.00** | **630.00** |

Los costos operativos durante el desarrollo del proyecto comprenden los servicios básicos necesarios para garantizar la continuidad del trabajo del equipo durante los cuatro meses de ejecución. Estos costos incluyen el servicio de internet de banda ancha y el consumo de energía eléctrica, los cuales permiten realizar actividades de comunicación, coordinación, acceso a repositorios, programación, documentación, pruebas del sistema y entrega de avances. Estos costos son de tipo servicio, por lo que se estiman de manera mensual. El monto total asciende a S/ 630.00, compuesto por S/ 330.00 en internet de banda ancha y S/ 300.00 en energía eléctrica 

### **4.2.3 Costos del ambiente** {#4.2.3-costos-del-ambiente}

Costos de infraestructura en la nube necesaria para el desarrollo, pruebas y despliegue final. 

| Recurso del ambiente | Tipo | Uso dentro del proyecto | Tiempo | Costo mensual (S/) | Costo total (S/) |
| :---- | :---- | :---- | :---- | :---- | :---- |
| VPS 4 Cores, 8 GB RAM, 160 GB NVME | Servicio cloud | Servidor virtual destinado al alojamiento de la aplicación web, base de datos de trabajo. | 3 meses | 65.00 | 195.00 |
| **Total costos del ambiente** |  |  |  | **65.00** | **195.00** |

Los costos del ambiente tecnológico corresponden a los recursos necesarios para implementar, probar y desplegar el sistema durante los cuatro meses de ejecución del proyecto. El VPS permitirá alojar la aplicación y sus servicios principales.

### **4.2.4 Costos de personal** {#4.2.4-costos-de-personal}

Gastos por el recurso humano del equipo de desarrollo. Roles y horario de trabajo (medio tiempo, 20 horas/semana).

**Costos de personal del proyecto**

| Rol | Responsable | Función principal | Tiempo | Costo mensual (S/) | Costo total (S/) |
| :---- | :---- | :---- | :---- | :---- | :---- |
| Gestor de proyecto / Desarrollador | Fabrizio Perez Peralta | Planificación, análisis de requerimientos, coordinación del equipo, seguimiento de entregables, desarrollo de la lógica del sistema, integración con la base de datos y procesos de extracción, transformación y carga de datos.  | 3 meses | 1,800.00 | 5,400.00 |
| Desarrollador / Documentador | Manuel A. Dongo Palza | Desarrollo de la interfaz web, visualización de datos, integración con mapas y experiencia de usuario, así como la elaboración de documentación técnica, pruebas funcionales, control de calidad y validación de entregables.  | 3 meses | 1,800.00 | 5,400.00 |
| **Total costos de personal** |  |  |  |  | **10,800.00** |

 Los costos de personal representan el mayor componente del presupuesto del proyecto, debido a que el desarrollo del sistema requiere actividades de análisis, programación, integración de datos, pruebas, documentación y gestión. Se considera un costo mensual de S/ 1,800.00 por integrante durante tres meses, bajo una modalidad de trabajo a medio tiempo. El monto total asciende a **S/ 10,800.00**, distribuido entre los dos roles principales del equipo de desarrollo.

### **4.2.5 Costos totales del desarrollo del sistema** {#4.2.5-costos-totales-del-desarrollo-del-sistema}

Resumen de la inversión total que el equipo debe costear para la ejecución del proyecto.

| Concepto de Costo | Monto Total (S/) |
| :---- | :---- |
| Costos Generales | 105.00 |
| Costos Operativos durante el desarrollo | 630.00 |
| Costos del Ambiente | 195.00 |
| Costos de Personal | 10,800.00 |
| COSTO TOTAL DEL PROYECTO | 11,730.00 |

El costo final del proyecto es de S/ 11,730.00. 

## **4.3 Factibilidad Operativa** {#4.3-factibilidad-operativa}

El sistema DataQuest ha sido diseñado para integrarse de manera natural en los hábitos de estudio y trabajo de los usuarios interesados en la normalización de bases de datos, proporcionando una herramienta autónoma de práctica y validación sin necesidad de supervisión externa. La factibilidad operativa se sustenta en los siguientes puntos:

* Capacidad de los Usuarios para Operar el Sistema:  
  Cualquier persona con conocimientos básicos de navegación web puede utilizar DataQuest sin necesidad de instalación ni configuración previa. El sistema incluye mensajes referenciales (tooltips, textos de ayuda contextual, ejemplos emergentes) que guían a los usuarios, especialmente a los nuevos, sobre cómo ingresar tablas y dependencias funcionales, interpretar los resultados de validación y utilizar los puzzles y retos. No se requiere un tutorial extenso; la orientación es progresiva y aparece cuando el usuario realiza cada acción. Se entregará un manual de usuario digital accesible desde el propio sitio para consultas más detalladas.

* Impacto en los Usuarios y sus Procesos de Aprendizaje:  
  Los usuarios sustituirán los ejercicios en papel o en documentos sin retroalimentación por una experiencia interactiva que ofrece validación inmediata, visualización de esquemas y elementos de gamificación (puntuaciones, medallas, rankings semanales). Los mensajes referenciales guían sin abrumar, permitiendo un aprendizaje a su propio ritmo y adaptándose a diferentes niveles de conocimiento.

* Lista de Interesados (Stakeholders) y su Impacto:  
1. Usuarios finales (estudiantes, profesionales de TI, autodidactas): Son los principales beneficiarios directos. Obtendrán una herramienta que les permite practicar la normalización de forma ilimitada, recibir explicaciones detalladas de sus errores y medir su progreso mediante retos semanales y rankings. Los mensajes referenciales facilitan el inicio y la exploración avanzada.  
2. Equipo de desarrollo (soporte y mantenimiento): Responsable de mantener la plataforma operativa, actualizar las librerías, corregir errores y agregar nuevas funcionalidades según la evolución de la demanda. Se planifica un sistema de retroalimentación de usuarios para priorizar mejoras.  
3. Comunidad de desarrolladores y educadores: Podrán contribuir con nuevos puzzles, retos o traducciones, así como utilizar la plataforma para complementar cursos o talleres abiertos.

Beneficios operativos tangibles:

* Reducción del tiempo de retroalimentación: de días a segundos.  
* Eliminación del consumo de papel y tinta.  
* Disponibilidad 24/7 desde cualquier dispositivo con navegador web.

## **4.4 Factibilidad Legal** {#4.4-factibilidad-legal}

El proyecto es legalmente factible, ya que su diseño e implementación se adhieren estrictamente a las normativas peruanas vigentes, sin generar ningún conflicto regulatorio.

* Protección de Datos Personales: El sistema DataQuest únicamente recopilará datos básicos de los usuarios (nombre, correo electrónico y progreso académico). No se almacena información sensible ni datos biométricos. La plataforma cumple con la Ley de Protección de Datos Personales (Ley N.º 29733\) y su reglamento, garantizando que los datos personales sean tratados de manera confidencial y solo para fines estadísticos y de funcionamiento del sistema. Los usuarios deberán aceptar una política de privacidad antes de registrarse. Los datos agregados (rendimiento en retos, tasas de acierto) se podrán publicar de forma anónima con fines de mejora del sistema. El acceso a datos individualizados estará restringido mediante roles (usuario normal y administrador) y protegido con credenciales seguras.  
* Software y Licencias: Todas las tecnologías utilizadas en DataQuest son de código abierto o de uso gratuito: PHP, Laravel, React, MySQL, react-flow, entre otras, con licencias permisivas (MIT, GPL, BSD). Esto elimina riesgos legales por uso de software no licenciado. La plataforma de alojamiento Vercel ofrece un plan gratuito suficiente para el proyecto, y el VPS se contratará bajo términos estándar de proveedores de servicios cloud.  
* Propiedad Intelectual y Cesión de Derechos: El equipo de desarrollo es el legítimo titular de los derechos de autor sobre el código fuente, el diseño, la documentación y los contenidos generados para DataQuest. Al tratarse de un proyecto de distribución libre, se optará por una licencia de código abierto (por ejemplo, MIT o GPL) que permita a cualquier persona o institución utilizar, estudiar, modificar y redistribuir el software sin restricciones, siempre respetando los términos de la licencia. Esta decisión protege a los desarrolladores originales, fomenta la colaboración de la comunidad y evita conflictos futuros por derechos de explotación comercial.  
* Conducta de Negocio y Adquisiciones: El proyecto no implica ninguna práctica que viole la libre competencia o las leyes de empleo. El equipo de desarrollo actúa como un grupo independiente, y todos los costos (en caso de haberlos) son transparentes y están documentados. Al ser un proyecto de código abierto, no existen contratos de cesión onerosa; el código se publica bajo la licencia elegida desde el repositorio público.

## **4.5 Factibilidad Social** {#4.5-factibilidad-social}

La implementación de DataQuest tendrá un impacto social positivo, especialmente en la comunidad de estudiantes y profesionales de TI, aunque requerirá una gestión cuidadosa de la adopción y la motivación de los usuarios.

* Clima Político y Organizacional (entorno de usuarios): Inicialmente, algunos usuarios podrían mostrar resistencia o desconfianza hacia una herramienta de validación automática, especialmente aquellos acostumbrados a métodos de estudio tradicionales (ejercicios en papel, corrección manual). Para mitigar esto, la factibilidad social se sustenta en una estrategia de comunicación clara desde el inicio del proyecto, donde se presentará DataQuest como un apoyo al aprendizaje autónomo, diseñado para reducir la frustración por errores no detectados y acelerar la comprensión de la normalización, no para evaluar de manera punitiva. Se incorporarán mensajes referenciales y ejemplos positivos que refuercen la utilidad de la herramienta. Además, se abrirán canales de retroalimentación (foros, encuestas) para que los usuarios puedan sugerir mejoras y sentirse parte del desarrollo.  
* Códigos de Conducta y Ética: El equipo de desarrollo se adhiere a un código de ética que garantiza que el sistema no será utilizado para estigmatizar o calificar negativamente a los usuarios por su ritmo de aprendizaje. Los rankings y puntuaciones se diseñarán para fomentar la superación personal y la colaboración, no la competencia dañina. Se ofrecerán opciones de anonimato en las tablas de posiciones. La retroalimentación del sistema será constructiva, enfocada en explicar los errores (por ejemplo, dependencias mal identificadas) sin emplear un lenguaje descalificador. La transparencia en los criterios de validación (qué formas normales se evalúan, cómo se calculan las puntuaciones) se explicará en una sección de ayuda, empoderando a los usuarios para que comprendan y confíen en el sistema.  
* Influencia Cultural: Culturalmente, la adopción de herramientas digitales interactivas puede ser más rápida en generaciones jóvenes, pero algunos profesionales con experiencia podrían preferir métodos tradicionales. Para abordar esta influencia, se implementarán mensajes referenciales dentro de la propia interfaz, ejemplos de uso guiados y videos cortos opcionales. Se realizarán pruebas piloto con un grupo reducido de usuarios voluntarios para recoger sus impresiones y ajustar la experiencia de usuario, asegurando que la tecnología se adapte a las distintas formas de aprender y no al revés. La gamificación (medallas, retos semanales) se ha mostrado efectiva para motivar a usuarios de diversas edades.  
* Beneficio social esperado: DataQuest democratiza el aprendizaje de la normalización, ofreciendo una herramienta gratuita y accesible que reduce la brecha entre la teoría y la práctica, y fomenta el autoaprendizaje. Los usuarios mejorarán sus competencias en diseño de bases de datos, lo que a largo plazo impacta positivamente en la calidad del desarrollo de software y la gestión de información en sus respectivos ámbitos.

## **4.6 Factibilidad Ambiental** {#4.6-factibilidad-ambiental}

El impacto ambiental del proyecto es positivo, aunque indirecto y de escala local. Se alinea con las políticas de reducción de consumo de papel y digitalización del aprendizaje.

* Reducción de la Huella de Carbono y Residuos Sólidos: El beneficio ambiental más directo es la drástica reducción del consumo de papel, cartuchos de tinta y tóner, al eliminar la necesidad de imprimir ejercicios de normalización, listados de dependencias funcionales y esquemas relacionales de manera semanal. Se estima que, en un entorno educativo o de capacitación, cada usuario dejaba de imprimir entre 20 y 30 hojas por ciclo (ejercicios, soluciones, guías). Para una base de 200 usuarios activos, se calcula un ahorro superior a las 6,000 hojas de papel al año, además de los insumos de impresión asociados. Esto no solo reduce la generación de residuos sólidos, sino que también evita la contaminación química por la disposición de cartuchos y tóner.  
* Eficiencia Energética: La migración de prácticas basadas en papel y corrección manual a una plataforma digital también contribuye a una menor huella de carbono. Al utilizar un servidor en la nube (VPS) y una plataforma de alojamiento web (Vercel) optimizada, se centraliza el consumo energético en centros de datos que, en general, tienen una eficiencia muy superior a la suma de múltiples impresoras, fotocopiadoras y el procesamiento local de documentos. Además, la eliminación del transporte físico de materiales impresos (desde imprentas o fotocopiadoras hasta los usuarios) reduce las emisiones de CO₂ asociadas al reparto.  
* Infraestructura Digital vs. Física: La sustitución de materiales físicos (papel, folders, archivadores) por una solución basada completamente en servicios en la nube representa un cambio positivo para el medio ambiente. Aunque los centros de datos consumen electricidad, la eficiencia de un VPS moderno (con sistemas de refrigeración avanzada y fuentes de energía renovable en muchos proveedores) es inmensamente superior al gasto agregado de recursos físicos que reemplaza, especialmente en términos de materias primas (celulosa), agua, químicos para tintas, y el espacio de almacenamiento físico. DataQuest, al ser 100% digital, no genera residuos electrónicos adicionales ni requiere hardware especializado más allá de los dispositivos que los usuarios ya poseen.

# **5\. Análisis Financiero** {#5.-análisis-financiero}

El plan financiero se ocupa del análisis de ingresos y gastos asociados al proyecto, desde el punto de vista del instante temporal en que se producen. Su misión fundamental es detectar situaciones financieramente inadecuadas. A continuación, se estima financieramente el resultado del proyecto DataQuest, tomando como referencia el costo total de desarrollo (S/ 11,730) y los beneficios que una institución educativa o centro de capacitación podría obtener al implementar la plataforma.

## **5.1 Justificación de la Inversión** {#5.1-justificación-de-la-inversión}

### **5.1.1 Beneficios del Proyecto** {#5.1.1-beneficios-del-proyecto}

Los beneficios se calculan como el margen económico neto después de considerar los costos de oportunidad. En este caso, la inversión en DataQuest genera ahorros operativos y mejora la eficiencia académica, lo que se traduce en beneficios tangibles e intangibles.

Beneficios tangibles (cuantificables anualmente):

Son aquellos que pueden medirse directamente en términos monetarios y se derivan de la reducción de recursos y la optimización de procesos.

| Concepto de beneficio  | Cálculo detallado  | Ahorro anual (S/)  |
| :---- | :---- | :---- |
| Ahorro en material de impresión (papel, tinta, tóner)  | 12,000 hojas/año × S/ 0.15 × 90% de reducción \= S/ 1,620  | 1,620  |
| Ahorro por mejora en la productividad de los estudiantes (reducción de tiempo de estudio)  | Estimación conservadora: 200 estudiantes × S/ 45 (equivalente a 3 horas de tutoría evitadas) \= S/ 9,000  | 9,000  |
| **Beneficio tangible total anual**  |  | 10,620 |

Beneficios intangibles (no cuantificables directamente):

* Mejora en la calidad del aprendizaje gracias a la retroalimentación inmediata y personalizada.  
* Mayor motivación de los usuarios mediante elementos de gamificación (medallas, rankings semanales, retos).  
* Reducción de la carga administrativa de los docentes, permitiéndoles enfocarse en actividades de mayor valor pedagógico.  
* Posicionamiento institucional como entidad innovadora en el uso de tecnología educativa.  
* Generación de datos agregados sobre dificultades comunes, útiles para la mejora continua de los contenidos.  
* Cumplimiento de objetivos de modernización y reducción de uso de papel (políticas de “cero papel”).

### **5.1.2 Criterios de Inversión** {#5.1.2-criterios-de-inversión}

Para evaluar la conveniencia de invertir en DataQuest, se utilizan los criterios clásicos de evaluación de proyectos: Relación Beneficio/Costo (B/C), Valor Actual Neto (VAN) y Tasa Interna de Retorno (TIR). Se considera un horizonte de 3 años a partir de la puesta en operación (Año 1 \= 2027). El costo de oportunidad del capital (COK) se fija en 10% anual, representativo de la tasa de interés que la institución podría obtener en inversiones alternativas de bajo riesgo.

Inversión inicial (Año 0 – 2026):

El costo total del desarrollo asciende a S/ 11,730.00, que corresponde al pago único al equipo desarrollador.

Flujo de caja neto proyectado (soles):

| Concepto  | Año 0 (2026)  | Año 1 (2027)  | Año 2 (2028)  | Año 3 (2029)  |
| :---- | ----- | ----- | ----- | ----- |
| Beneficios tangibles anuales  | \- | 10,620 | 10,620 | 10,620 |
| Inversión (pago único)  | (11,730) | \- | \- | \- |
| Flujo de caja neto  | (11,730) | 10,620 | 10,620 | 10,620 |

#### **5.1.2.1 Relación Beneficio/Costo (B/C)** {#5.1.2.1-relación-beneficio/costo-(b/c)}

Este indicador compara el valor actual de los beneficios totales con el valor actual de los costos totales. La fórmula es B/C \= (VP beneficios) / (VP costos). Se acepta el proyecto si B/C \> 1\.

Costo actual (C): Inversión inicial \= S/ 11,730.00

Beneficio actual (B): Suma de los flujos de beneficio descontados al COK (10%).

B \= 10,620/(1.10)^1 \+ 10,620/(1.10)^2 \+ 10,620/(1.10)^3

B \= 9,654.55 \+ 8,776.86 \+ 7,978.96 \= S/ 26,410.37

Relación B/C \= 26,410.37 / 11,730.00 \= 2.25 (mayor a 1).

Interpretación: Por cada sol invertido en DataQuest, la institución obtiene S/ 2.25 en beneficios actualizados. El proyecto es financieramente viable y se acepta.

#### **5.1.2.2 Valor Actual Neto (VAN)** {#5.1.2.2-valor-actual-neto-(van)}

El VAN calcula la ganancia neta del proyecto en valor actual. Se acepta si VAN \> 0\.

VAN \= \-Inversión \+ Σ (Flujo neto descontado)

VAN \= \-11,730 \+ 26,410.37 \= S/ 14,680.37 (positivo).

Interpretación: El VAN positivo indica que el proyecto genera un valor adicional de S/ 14,680.37 por encima del costo de oportunidad del 10%. Se acepta el proyecto.

#### **5.1.2.3 Tasa Interna de Retorno (TIR)** {#5.1.2.3-tasa-interna-de-retorno-(tir)}

La TIR es la tasa de descuento que hace que el VAN sea igual a cero. Representa la rentabilidad porcentual anual del proyecto. Se acepta si TIR \> COK (10%).

Planteamos la ecuación:

0 \= \-11,730 \+ 10,620/(1+TIR) \+ 10,620/(1+TIR)^2 \+ 10,620/(1+TIR)^3

Resolviendo (por métodos numéricos o herramienta financiera):

TIR ≈ 34% (aproximadamente).

Interpretación: La TIR del 34% es muy superior al COK del 10%, lo que demuestra una rentabilidad excepcional del proyecto. Se acepta la inversión.

### **5.1.3. Conclusión del Análisis Financiero** {#5.1.3.-conclusión-del-análisis-financiero}

La inversión de S/ 11,730.00 en DataQuest es altamente rentable desde la perspectiva de una institución educativa o centro de capacitación. Los indicadores B/C \= 2.25, VAN \= S/ 14,680.37 y TIR ≈ 34% son positivos, incluso con estimaciones conservadoras de beneficios. Además, los beneficios intangibles refuerzan la conveniencia de adoptar la plataforma.

# **6\. Conclusiones** {#6.-conclusiones}

* Conclusión de factibilidad técnica: El proyecto es técnicamente viable. Se cuenta con tecnologías adecuadas (PHP con Laravel, MySQL, React y react‑flow) y con la infraestructura en la nube necesaria (VPS para la base de datos y Vercel para el alojamiento web). El equipo de desarrollo posee las competencias requeridas y la solución puede implementarse sin impedimentos técnicos significativos.  
* Conclusión de factibilidad económica: El proyecto es económicamente viable para el equipo de desarrollo. El costo total estimado asciende a S/ 11,730.00, distribuido en costos generales (S/ 105.00), operativos (S/ 630.00), de ambiente (S/ 195.00) y de personal (S/ 10,800.00). El presupuesto es realista y alcanzable con la modalidad de pago único acordada.  
* Conclusión de factibilidad operativa: El sistema es operativamente viable. Los usuarios con conocimientos básicos de navegación web pueden utilizarlo sin instalación previa, gracias a los mensajes referenciales y a la interfaz intuitiva. La plataforma reduce drásticamente los tiempos de retroalimentación, elimina el consumo de papel y está disponible 24/7, facilitando su adopción y uso continuo.  
* Conclusión de factibilidad legal: El proyecto es legalmente factible. Cumple con la Ley de Protección de Datos Personales (Ley N.º 29733\) al recopilar únicamente datos básicos con consentimiento del usuario. Todas las tecnologías empleadas son de código abierto o de uso gratuito, y se ha optado por una licencia libre (MIT o GPL) que permite la distribución y modificación del software sin restricciones, protegiendo los derechos del equipo desarrollador.  
* Conclusión de factibilidad social: El proyecto es socialmente viable. Está orientado a estudiantes, profesionales y autodidactas, ofreciendo una herramienta gratuita y accesible que fomenta el autoaprendizaje de la normalización. La gamificación y los mensajes referenciales motivan a los usuarios, y no se generan conflictos éticos ni estigmatización. Se espera una adopción positiva en la comunidad de TI.  
* Conclusión de factibilidad ambiental: El proyecto tiene un impacto ambiental positivo. Al digitalizar los ejercicios de normalización, se reduce significativamente el consumo de papel, tinta y tóner (más de 6,000 hojas al año en una base de 200 usuarios). La infraestructura en la nube centraliza el consumo energético de manera eficiente y se elimina el transporte de materiales impresos. No se generan residuos electrónicos adicionales.

[image1]: <data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGgAAACMCAYAAACQyew1AAAlQ0lEQVR4Xu1dB3xT1f4vMtxPhaYFlMdToUmLjNybpC0tpOyC7FLa5qaAgKIoIKLiroooPicCbdKiiFvecz/X8684GU3asmQpQxEQypBVoOv8f7+Te29Ozk3StA0t8Pr9fH6f3Jx9zvfsGRHRhCaEA4m9EvOV74QEayflWxTFlijKfwWtLrvoYfiJbNa8mTPioos6wHczkOYtL70oizPahPoiZdSg2xOTEmfgd3/7sH8q6tYRgyanpKUu8Jr0wWW9po+uEKW+B7qOTC4bNf/2qpYXXvh45sv3kBYtWiTxhptQD2Qsmlme2K/Xjb0H9+s68tFJJ6wjrFcOf2DCPvjewJvl0LLXtFFl9jceIHFDE8jIF6YS/E59bHwV6EXyhptQB5jN5jaYqAk9E6alvzSj3Dpy4BfSa/dXp96WXgTazZL7JV+XIJjH8/ZkXBXRMkJIun1EZebLd5Me6VaCJQjdE2z9qlq1aqXnLTShlgCC2mKCDrhpZJntldlk0OTRZMDEUb+PeGTSscFTx+5KSkr6O2+HxYWXXphiuSn1MLqRtnA6sc4cQwka/dIdpMfYlJO8+SbUARl5M6uyIOePeuIWmrjD7h9Peib3vLdnz556i8l0D2+eA3YO0q7qoHtdqerwd6zzLvob0bJlD95CE2pAenp6cyg5PZJET+nokz740YyFd5KxC+4kGbkzacLSEvH01OPYHvH2/eHiNpcPHzrvZgJtEuk2uhcZs2gGdUOU+le3uLjFFN58E4IgZeSgu5JNpuuS+vb6nP5PS12X2KvnZyMemVg2as7NZUPulFYnWpPH8PZqQpvr2v1LIbf//Tb6i0QZM/uW82abEAQjHpu0z9K7Z5+ROZPKc3JyLoAe23ZUHzB+5M+82dqg1aWtZpqyB5Ded6bRqm5MLpSi1++nAtoX8eabEABZ+bOqrUP6FtqWzK5OnTJmxZAZWSuHzLR90Wf0oHl90gZO5M3XBs0vuSQVS44EpBhSLWp12TEh9hhvtgkBIL16Hxl+/wSS6ZhFEw96bfuz8u8mw3Mm7UlfMKNePa8LWrS4R2fosB/d7Tc7k7rfZVgisS29D0vRxbz5JvjBqCdvrRw2exwZ/dStQNR4MvzBCZ724tnbq0VRvIQ3X0tcpYvp8I11RhrpB+1QxuK7ydh8uUcXEdGNN9wEP0ga2Kf7qLlTylOnpGNPjYyFHlx/29CXI3IiLuDN1gHNQSLTFk2npHRK6aFWcxEtWvTkDTeBQWJiogF+mvUamPIW/u9vH7YFf4fdN/5Iz9Q+1/fNuPElHwt1R1v9IHO1DapSwdaXktP33kySMiu9qTcXDEl9krr0HtF/SJ/01H/jDPWYF6aVW63Wf6Q9M/Xk2JemV1pHDZrM26kj2iZMHvLXkLmTSPd0qzp47Tam12HeYBMYxMfHRwMZFdbBfd4f/eSUo1mL7yEDJ6ftGQrtESZgXFxcK95OHfFg+67X/ohuIklKFXfF1ZELeYNNYACl5SIJelMDJ42uwF8cnyBJ0mv3k76jBz3Dm68rmjdvPvBqofMRJKXryCRKzuA5N1Vf2UH3KW+2CRyGP3TTsZGPTCKjHptM0l+YRvAb2qCdvLl6IgVJ6Z7Wmwz75xSSMnMMyXzlHuhu9zz7qziy3NqCV6sP3E4xEsTpdghHixeKpORFkax5XiTF80XidojVLofoducKgwihk5oRFovl2izn3ZXDH7iJDJwwErvZpf369WuDemazuXdSfHyyrw+1x1Udo7bjQBXl+t7dSNaSe2kpanXZxemykWYuhxAP8gNIVfFLnjCXvADhXkjDfRLC/W7RYmN7H4frCUgnzcqwBuvnCAN3LLHWe9qjcJGpg8spHlr/uInss1rIQSHev4jxZPsEM0aaQGLcptjHTsLk7KRXQO2DjGkjt6Ja8uC+/0nq35uurNYHOPfWb9ow8ubiG8m9+RM93W1rd9pjLHSYhkG4q3+dYiIHRD/hlaU0MZ5sfMhEwOzp4rwe3Xk/6oLip4WpvJoG+/vEDyl+XlzJq4cKAmMVyF1fbHxYJAcs2ogFk98yzUjSJmu/pMfEoeIlu4ZZyJ5UC829oP5N2lO3nOqbMWTpgG7dLuX9DRUtWlzw4OsFNxIsFX+MAPcHWUj30b3I4McnVHw0t+vWbZPNmnAFkwOmeLJllom4nULxhpy6d2KKF4lLSnuY1QwaEH91Tb5qf7IFPBTv4/VqwoqChNZFuUJFac8gJaYGOWCOJyvni9VPzLnFR/33dDNZnW8m0otTT1uSk+N4v0PBsmURzb99sUf19km+JLw8006+eclcvb9e4baQogViddFCo7qhJVS4Fgk3YkY8IFgSeD2/OGC0VP6WYcHiq27QqAkrHELXdXPEaqyy+MAfHjCYHHvgEXLqP5+R8uISUl7oIsfuf4gcShmgMUsFcmXpxv8jhwfd6KO+r3c8ceeJBNqpa3j/QwGUwnJMCJ+w9Uslh9xfkwMJCdpwgBxKTiHHZswip1esIuUla8jpL78ixx+fSw4PHqYxi7LpPqj2FgsDeb8DwZUnTtk2xZNheL2AOHr79M/Rwu6hWJKEI4W5pht4MyzAzKeb7zVpAnv8n8+S6qoqUl1dHVCqjhwlh4eO9LF35JapPmbKlrzm1QfyoL36Cv3FcRMflkCAandRaYKXnBPPPu/jx4n5C33CcMjan1Tu2asJLy9li5do4v3rrVhVi24ssXw4FKzNt1xT5BB+w2od7Rwek7mZN0PhzhPu5tWqysv3KJ5hlbP1TpOn9+IUtoG8BZ7PLnQIOS6nsGPNsyL5M8U3gEcmTSFVZWWayASTk2+8rdovcxZo9KsrKsjRm2/1JMBtkABO4ePUm9P8R4oDhHneptmeDPRXWiapOnlS4/7p775X/T8+7xmNflApLyfH7n3AJw32J8WTdU+ZkKjd4P8c6MXeA80Gdnq2FOWKBMNTmuA1X3n8RCUf7kKHcVjEL7eZyK6fni3TeAqROJTcx8dTFOyR/TESZJif+lpMIBUbftZGIEQ59dXX1J1daWZsA6n88vkMUlVZrpo5/X/fUDNb7jKRgvzhBJfHN0NXHqrjKZBpbkeBBJkKCSFgJL9/0Thzw+MecsqWLPX6ByV7x7ePqv78eqtspuAVTbhClcrdu8mh+GRNumBNtAvS7M++2jQ7ZEkiVQcOaNwq3fRh2ab7TSTioGA5uQO6uVs+ucVvdXTyg4/IQT+e8oL1Mm+/quIU2ePOJ2uW9qOJgD0nHAdhl3rDu2PIsb0lGv/Klr5Ou97oJpZe7IIXOUxk7xpv4h6deQ/V3wgR+O4l8c+ND0JXfmAvUn5oL5Ujuc+TbdAR+GmB8eS6J0Vq9og0QbV/8NcvSRF0OH6daiYH4pXMBXF45DFteA78Qja+b6dhxrCX4PgN4lKyJIX8/tMzpOLUUa0dR4EmfTRiSoSaYrEmzVB2fPMI2ToDuvlCfHXEge4JVyuWtk43k/Vvj4Qce1pjiQo6duoUqVi3gZSvdtFvjQdVlUD2rQS6jeSP4doc4yOQKD9D4pYssZLK8hOqG9s/nkWwGigCN35Pl90As+vnmMjmjyaqYdk8x0p2D/HoH0rsrdovy1+s+lG80ESqTnnis/3rB8naZ4Aws6dDgDkbw4n+bHojU7VfVVlB1r81lPqHmUQTbkb2DrBQ0jYsS6cZ0ictUE6fhk6Rm1SsWUuqT0C1X1mpNUMF4vPRZIKZTXFb7dUdNJpnqx72h0DnQv246QM/jgSXfevfgYQ1ATG1G0vs7wUJucBEDu/8nhz5o5DsGuMlFgeE6+YB2f08///sZyFbP5tGq731b41QzQUiCBMfI7/j28fJHpnM/cnxp9fOE6v39fb6gwm9b91b5ETpJlKcZ6b+8OEMJnthPFW8QCS7Vs2n/vFpE0yO/L6CFDktvhnaGL/Up0EqNVrmsx7+Mg2qloJ4cnR3kcZBXjD3l7zah/Ze+IAfNFqOlQqWl470iO/s4yHgsDE+DfTVDskm6AmufSNV6wbIjmwzWflPU/UuS0I1Dg7Xz4Uqc3FPVT8gQVAS1zwnklJPVXZq/RPivl9v0/Y4UUpeTSHrn2D0jPFH9gvxN5OIHJ+FQqx1SsX4J0G/lHdjpx3TLYGUl2nbFV7KDm0jxS8nE2xrWDeg5HzG+qfigDH+JtYgRmrDoyZK1NZP7wCyCkn5iYO0CsQcjB5gbsa2ZX8vH/Y3QwRSiGfTYI34q6vpOmgLD6Hd7TCS/+V2P0RjwKG62fiACUv5H/h/y0zo4IwOXMUhkdhu4DeUlv047cT2nFj5zWamHQ9P+C1lpUK8yIczEP4ymk0wdixS3EI/MFNs+vAmcmL/JppWKOVlh8nxP9eRbf+9B4hJIuueNNHeHhuOUiHhCd59Hxwxm9tgAPkI7B5qpo0y5kil54O5ePeNTHUkxr+/3Fr3yVYgdhm6g9Mta58OnpjQSys9EG+ejuHAKlJDkIjVpkh2jhXn4vQRds15d1CQ9J9zTHS6hqoZLav4cIUKzJBAVK7iNlaTmMGV9MKOxs8PY6bShgU6BJVHevTW1DJ+gR5BYt3ljyh/8kX3FHKdwUaiDPZ6iz42i+R2G0g290qkOQwTGRtrLDmYQbBX9sQd/Ui0bL7DDTayNCeZ/PCChaxa1J/KiheTyMdPJxCh51jV3ZkTUgm0O7QRxioF3cTGHTsNW/snkje79Sc9YjM04amLXGOQyFvd+2nSyZ8AoRVQpT0H44WAg9qg+MNk6oANFjrEO44J2SFMxAST6Fg7iTVlEIOYqdGrrXQ2ZpIu5gzSNlbS6IVb2gJR87pq21TsPkOV/t5Bs7kLn971QlTMuG58IJqk9sKna9jgQ1Cs7VZevwmBodNLbzcRdBajwQnSxdqDLi5Fd7NfqjPYP4o0SK/g/yi99F6kXpqIaihRejvt69P/eumDyFjbU9ScISuR6sdK/XR6+1eM+U/QzdadJHWpoZ049BJQ/w7kvYgIbSOrM0hvqPYNtn9BuD/z/vf472se9aQP8BvDC/4/5vFbei3KIDF2JXrqAtwY4OtCYJwVBEHA74qIS28VZch+JEK8pSVE7IAuxpZN9fTSr/gLAT19TdyY1mB2vseOJ8Cgvo/ag246qNGZ3agY+0hIkA91BtsTUYZxdE8ckHHI4xslYB/8NAPi/S6DQ+Z4GAnEb3Dn2bZxUhz4uwbcGw3/5/LmdbHSf0Gf7h6CMOyWf0mkwSbqumRcD9+bo/W2PuDfk9S8Xqr4G8RFtW+QTkbGSGMhruXR+qxhirpstoEJMkg+6+eRhvEiqFdHGrKt+EvNG6RcDNhVXSZ0gEgO9ahhAL0jc4ag47T0dB7fQ8eQAG78hW7S72szoyHye63WHDrWgkTeD/9/Yd1jAfrLkfQofbZaHQNhx67oaruKNacAMx2490PHjiOuhPDQk3sYvss6jdHJ35BxPH4jaehWpN4+3WM7vTnY+aqdeMslkDaa7Vvg7juNSpAuzt4pqpOU0BpyaWRsphHVoruM6wOR2AIJvjPCM6vQjNrVS06qj9WgXjpBc1xclgXVImOliUDKRsVdNN8uLpuetAN3VrbRZ5vaxEhmqoml1GDfCkSUKeZZYIKCngPcL2bUAiYQlgZM9Ci97csIGl5amlXz8jedHQFze8Ht2aBGa4bWncddjXpKWHk0OkGBgGbbG0bSbVORnbOHwH96CCvakH0fVk3w/wtKrrfUuaD9kassrC7lEmbIHg3k9WrdOSMWiCqKjM026jrb6W4aIDkQQaSNfuLlwGRLtB/R0XoRuF/Bm2OAGag6urM9Hv9E68f/Q/E/6obMaCUjQNznt4nJMmCGZEkLBiC0oQmy3c7r+wMkyE/KN0TMDYm5HksClhiI8FoIOB6nx8TcDDn3VvwFtz+ianppHsiW1l2yY1EdOwjQrrTD7+g4+wS0i+5jqVL8UBAVI9nRLpj9Xodudhp3Pfj7H7TLm2WBbZT32/4ZuhGRk3MB+PUp2r2is+06xQ3o2AxGfXD/Dq8L/tEIBNlDIqgJHgBB7zY0QTXmmiZ4AWnWRNDZjIYnSC9N4/WbEBiNQFB2E0G1AHQ+ljUoQd4B2tkFl0N4yu0QXtuwrO77pM8EYMDcRBACCKp0OcTDQNJqXq8x0USQDJdTxPk5JEodz5wNgDTDydqGIygqwARlY0MhqMhpyiQ5/ufoGgMNT5A6HVM7ROvH9cGlhNoK704gKAStXmhuu9phDmqP9yMUUSZua4tzhiCcklfdCF00G8sDQSFozWvdLnU5jHfx+iz8+FOzMDPttUFUgxNkyL6T1w8FDUUQnrWt6XyTH39qljoTJP1bcYPXCxt8CbLP5PVDQUMRhMcRC/OEebw+Cz/+1CxNBPmV2hO0MO4y6G4HHUz78admOXcIkoLW74HQUARBN7ud2ykGPbLvx5+apa4E6aX3FDd4vbAhTAS9gVPvOr20ShN534R41yvSO7w7gaB2sx3Gm5S7FwKB9QPC84kmDP7CI2+CqS3OGYIU0AU1PhEY4c2HCrUEOYWdnFZQXNUlowMfhnCERwGQ28AE6W2zeP3a4EwR5HaIlXirCVRvy3i9YDgPCco+KwmCEnTMnSeM5dVrwpkmSKe3vx8utwLinCDIIdbpQqTzjiDwUHN8vzYIJ0FQrW135wsSfgNBx8FyM7wpBao6ep9CKDgPCfJs7KsrwkkQAohZgoe68DYRF72NSsD3g0JGE0Ecwk0QAi9x8pxkE3J4vZpw5gmSPgiXWwFxthKU47lhayPIt3iXW5FT2AadhS94c8Fw/hEUY7uX168NwkkQVGe/KjeLQAn6C39X55sHuRzG731NBkYTQRzCSRAL3JPAq4WC848gg302q4fTKrxALg54BjOcBNEtwn7caBubPYQ3GwhngiBoC9UlGZ1B+rA+boWEQAS5ncJ76lFzTlj7LM5Xgsiy9OZQtU6DuB/CLr+iDunV0ARl0xsZsaQgEVC1YNe2jBXIQQFPEtSGoCg8/BREIHdu5O1ToafvtOZZUfyoD0GYBoW5JiOkw89s5jw7CIIeVKHTRE/R8Vj1uuVvvJqCWhHkRz9covhRV4JcBWISZMRKhpjjkDl/KFnS/coip2m4Yq7xCIJRe7HTZOXNIr58JvDlr+cLQUBISyDkNiBpb5HDZF813/K3IofwOOpBqVJfmdR5zsUGdave4Nqg+xX1NblCXwjoWgjot6yAGj3n6Q/nC0EscDyGd2m784Q8vOUR2yFFr8EJitRLD/D6PL5zCO14NQXnI0E8IJMWKN+NShBucWLNKVieE/hipfOFoMJXTPhOeI2AjszHNblVbwQiyO0QD2LDyIqnRyPsYu2zqCVBR4KJTm8/zdtHgUQ5wZvlRfGjrgQVFRg7uZzCzy6nuBLaoX9D3L/034treIIeVNQhMD4nmyGgHymBZNVZ1IagmhDViOOgFc8lXKx8AyH/9vbmBJ+j+I1AULZKkILlC+Pa0pMFmHuc4inIXbG8GQXnC0EI+k6FZ5kdiakochgTeTONTpArzzjTW7RrXig7Xwj6cbH+cqZKU0+0I1x5YpLyze4aYs2EFSxBMEp/CNXoTIJD2KIG0mm8A+tlKk5jwM2N5wtBCDlT/gqlB7vXHnEIDrc8s46AdrJxCEJgb82fQACV93g0OJ8IWrZMe5ETwu0wqVcVNDxBMZK6pFzyQne/D55DSJoF6mqfTwQV5prSoLZQp3VWO4RZbqfpv64CMUVRky/RqNGtesGHIIP0iKLuppOj4mmthGeytCY0JkGFTlMmxH+7ixmUY7W/Ii/haqhB9itqjUBQtkoQkuHtXvoKa5/F+UKQO1dM/2x+pwt5dURRvmdODhHVmAQBEZFYD/Oy4rlrLg70KhUEWOITIZQE8YfGJAjjB6XnFLQ397hzhQToHHXDttflGQuqe/QagSB7Dq/PAx8v4tUURMZmZ/CJEEqC+EM4CFJutgokvHkWEM+5fM0BUrUirzteUUYBYcTLmGp0q14IhaCS/O5dYJD6PlR71cGquGi9fRifCKEmCI9wEESvF/PjRqjhwVlsiPP7dMonT5iH62SsfoMTBAOvRxV1KM5di5zCpwopKBDQalAPeK5HF5OdzCcClyBBj46wCAdB8o2RGjeY8IQMXPYuchiH4etlilqjEYQ9FiBij0qMQ1i32mGmUx04BeLjAAO8kI9PBC5BGpSgqM62/rx9Ljw1Ap+SK3KKbm9aeCdLG40gBRCgS1xOI9bFnwNJNryKZb1DuJ41w0K+ZVGTEIq07iQFXC7nEQ6CImPtk3j7rPDmFWyFHhzOGkCcy9X2h+7PEN8ohMyqmGsEgmyP8fosICfNxLM6vLqC9obsNnwisILXX/J2AiEcBOnwblM/bijCm1ewJtdkxOpcJmaB+1kxUlnyZgG9uM9qcqve8CEo1q4ShEu9rDkFUOSv49UY0AtmAwm/7y4YwkEQmN/E22eE3qcaDFtft/wNenPjoOR8AkQtLX65hw5+f1T0G40g8K0ZlJavIXDvQKO4Gor6Aba7uWFZut9xEMJPQjCivdo4EMJE0F+8fUUgs5Ty5hW48npkQQn63p0vTGDVsYvtZiZLo/D+U9k91lxYER07rosa6Fi7WoxxDYQlhRV8nZh1gwW4U8Enhlekk7z5QAgTQRr7TFiCXsxU5DRN9DfnyE6iRjUEQbpO9PZ16km0QZqjqEMO+lqpzrCDoIwBcGS9PsiavU5v/z9tYniFNx8I9SUIr27m7bKi83NLvYLivPjOq53ifbhIt+Jd7+oqYuUiYzflG0j+vLbxqjXa6Id7I6KXvlXUgaBDhU5TWkle939gQFe91O1aKFWLgawTwdqhKL2tK58YrEBXXLNq6w/1JSjgzlRZdHHj2/J2FOBDwXiyHOJbxtce0B65FXPgxzbFPdZ+2KEGWk/fTaAodpoGr84XRpX42Sy/Kl8I+oA4nxg+CWOwn+LN+0N9COrYcfxFvD1eeDssCp3Cv5Yv91ZvOC78cXHPy4sc5lQg7S1FHdKrXHavxg5HvcAEXB0ls3Ut7qx0eyYLV2H3s5DbPMEDqrk/+QRhRRfCDff1ISiKvmyitev1376ct8MC4vkmDCd2LfezJsbOcqtu6qVjrJmwQw243n5aUYOiPNvl2Wql6SRALlJLmj/gwxd8ovByOYyZeHss6kqQ5xUWrT1WomPs1/L26gLGzYBb0cICHTNeUNSAHIGS4RAqgKwNQMrydbld6QsjUEeryxJ+Yc2hD1gEE7zfB18V4a0qqAtB0dH2S6O81Y5fwX11vL26ANswxs2Pef2wArrXBYpnihrdOJJrps/PQLV2B0gVyOsgnyBxXtv+wd4EFUx019s78XYRtSXoqrjsv8PAsZI3rxUpi7dbF0D7M0aNg0Eaz+uHFW3wSkvZM1Yd2yE61e7pvXwNcszzLQQc5HmR3hwSo1qbQFrR+Xk5K1SCrug4Ht8FUufEgotUpwsx/IE9/hgZmxXaW6l1RadOqRcqnnXsPl5tGIGMVz3VnGdvGM4wlBR494XVBF1n+x3aRAoo1ZAT50d3s0eh3ZoIgsROYM/nhCKeZ22CAwfo2MWu6fJacO+Q4i6vd0YQpc4AeKsAHKAWOY0+7zm4nMLHcikq37As7jJWzx/w2Ro+oUKUkEpfqKKLzfZ7II3FyrwenbE6h/i1dOcLdGIXp7VwbYw3q7qtt4elTasRkBt30IgYpLWKGk6Y0sA6hLchZ00tWWK9Uu7F0e44VHn0TaAa0Ayqg8N8gjWohHCsBoHzj8V5Is2gQMp4OSN2BdK+YxfqEIzbvi/cnylgDlM8ZdUhcPtd+SLd0AiBfZgG2mmkx/VxpM2aDYycCyAD/KxJuAYQ6FKH9CaSci5XEYj3sRUFcXTOkR4izjN+rZilvUXZ/baxto5eV84k6EuPHk/bG7JjFGUYlKqDSqjefsfA4/wUlJ61uF6v6IUCcPtlPgHPpLTtnB1woz+PFc95JoAhTo+xREEm3IVqMFhXnxKFUjPc44eEMwghrxLXG1CfHkSPoUpSX4+ny99O8X1cdsAAFzkE+vyZApyzY//XBHwSDfzYzSdmWEVvfzeilg+d4wxBkcPYe+Uiz+mNlQuFeIjzVk81J6oDeASkz07Zr02s+hkH3rioRJKNYElewtV0ktTpXaz6ySkagJxTcj1NH/CrDeikqt6+S5O4dZdqcO/Ta64Z4zP7HAqwM+RTvTmEI/BLB9E7llgvwkNcitk4pqaJign99vywQfEcz1+y6nTz/HK6eV694AKrOBwr0fX7PNHvADJU4FjCM0UkfQF+b9Phg7r0NmFlLCVVwf9ToH4Q9ZEMHCBigvFu1QYQ7iyIyxXK/yKnKVuJ36p8i2ZKCPwspeHR2/fweg0CmhNlkiKY+rXQITygEgMN6JrcRDpewZyG00GorjpyDkFdUnAIamfC08YK5RDnxazZKzqOuFItPbV4eyKsYGeCdfps+nitAtzZUphnUt93WJUriDi7jRFc7RAmKzcknksAgpYqcYDf3bjvANVx0c7NXWILafODv8zboMA6XM0lUJqUJ5wRhcwtGzCATVNK1Or87j1QDaq8Mzure4aAMyRA1HqmhphbtLhne/Yyj+vEW65Q00Uf+qXsZwTs+X/INQtZveJ8MYuul3jaoNPrCm6IRnU8NojVAmv2XAPUAENd8hUwLm5JBdKh2FuzSI+yeo2BC5hSpNlwCMTgFuBy3OCH/3HeCnt5ypzduYxlyyKaA0F//CAvrSDaX+97SoI132iAXJLPFOmdrF5RgXHYmsUmI37jiTOcYMRct0Ee7MF3ck2Leo0FyFwr/e3WYeFeJI5k/0NaHFfTIkays3qNiiimR9cmJrMvqwf19INKnS3Lerku/69cj7/Bmj9bACX9JIavcJHJzOv5A8Q9hyk9R3n9RkW03qauE+E4hB8EQkRbrszr/g+8pgu/6TRJvogXLhHcx405FRJkF4zQM1h7jQkIz3S8pBbDuCa32w28Pgtca2IzKe495800OnSe1+flxtH+O6+P++WKYZAKJWcORL5ALj0u1FuWE9dKKWHsLERDAU/KwdAAt4r9BhnnVQwrhsnlNE7BM6iesPmOdRg08wyU5bgb7G/yBs4OWK24v0BdSo7WSz5jo59yu0VBROmavEteDnfL18hA5JdTwhzCQNzPAL9fsnbPJAqdPXpCid6J39A7WyCHC0sOLp98BWF52SUfscEOTnGepTtrHzLmCiZj4ppP44x7QkE7g83nIFR0l3F9WP11BfHR8pkivCGeTizifTdy5Ok6yuql5jb4n7UXbihvC+HcIfhVRasx+QJCJEUOz5sg7TDToDr8rlvxnPdYIwK61FPY+EZdm0mHEmc1oIg/ywS6Ovr6TJ8NjRD5SJoAeeIA+t8hbMb/yg2FhQ5hKf7fOj/V5/T0aoex9/Il2v1ntQGu1+CvS94rgZ2VFQXGTjQ8TnErVfM8UFiN7Q/+h/Asx2ECf5o7MkYay5KDm0NY/bMa0FFwsYFvo89sz+pD6XkXV2FxBC7n1hJUpxOqclvEmkeUeE4M4KD3XSBzMKrhW3VKovNQrodGM4VO40TICD+55DcdZHfUi8+hiqXtjLKXHL7fUcKAjxX+uMDoE/52BknwKTl6yWeq55xAlN5m84kEt0tTXiZ3uuWzrCuh+sOBrUyYZlkCEvFu1GNuGn7clS+OwG+8Gwgbc6w6sYF3ydUWNPL0kicore+hG8rtH+DP19Qes+tIWRKRq9y/swQyaAZkbGDjFQlk8YbOGUBkZnA5bSNvBslwOYViTBw54SfzZhCgvkk283f5974ip3gvftO7gRzC8/jteeTW06jL9tQT50W5guhRE9/FCVvZHdqThCo0kf53CD+CnVWaOx7S05vDQPwYG5+2dXyZ+KxClMF2CxupQAeicOqEV2OBnQo6deQU9+EvtgmQkLkMEX8C0VVYTRblC6sUdWzb8Bv3jeMT0qjmzhNdQMQucGuNJ1OI9EQfqJVhG7gs3Tcs0dfZo6CNwRsc1XhEx9l9BuTnNPw0qOpSeaiQE/JtGMyaFDIhMT/05Hq8llNcqZh1yZO0ygk/N90jIRz4WF79hKpxEf5iJwFIlVd7xYcKX9Yel0nHksPWAiCt46Q43tw5D7oSapCqvCTZT7c3ZKibToIBD4N5ElG40UfdIRQqpQN/lWl/SGy8np/g2Av/r6FnljxVoUdfmIUzGLLZ2ewREhZ4mJndJoxhDnZe6JxHdDfchiQd5XLkF7jdijerwI1TQ/SQlDeBGb0/ILFPeEqCWA0l6j+oDp0Ci0yoehUAax9K04dIoqKnBd3U7/Yt9drZkfMVzaAdKvMlSaqKjLVN5w2ywF7f8oXeHapuubOA5OF/IOMQruTiN57sQz188FYxD93l+cp3METps5/mMhBu0qQ37f8vAUnys19aqtLF4utegUsUDyAikj5wsRg6A/nCBCBqIFSJQ5XZgpBAj8FIz2jDQ9vL53nj/zPAvW+QO/fxiSLvzHmjdedxPlMr4Ubrztmx0MZ8GeV/f/emYOeS/qcQbbAN1VZ7stCDVlLuZTFZkbUpWX5htbaAgWW7aL39rQCk4DDgL13n8XTvRBM4YK8Jx0l8ovkkoN6+Uxdjn63TZw/Sdcm4PjBpy5rjNWN49RleGxAwA3iJ2XHGz++cL6DbfvGm3JBOwtVdcINjpF5aegVz1qkJtYTnjKf0SqA3Gmov0lFdrO2FUA5pNaEO0OmzBkHJWgRt0xaolvZ7pmC8A2AqUPJwAwftgOjtG7CHdi5WX/8PWKdOv1UPct4AAAAASUVORK5CYII=>
