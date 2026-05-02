[FD02-EPIS-Informe Vision_Perez Fabrizio - Manuel Dongo.md](https://github.com/user-attachments/files/27297719/FD02-EPIS-Informe.Vision_Perez.Fabrizio.-.Manuel.Dongo.md)
**![C:\\Users\\EPIS\\Documents\\upt.png][image1]**

**UNIVERSIDAD PRIVADA DE TACNA**

**FACULTAD DE INGENIERIA**

**Escuela Profesional de Ingeniería de Sistemas**

 **DataQuest: Sistema de Validación de Normalización de Base de Datos Relacionales** 

Curso: **BASE DE DATOS II**

Docente: Mag. Patrick Cuadros Quiroga

Integrantes:  
***Dongo Plaza,Manuel Andree 				2023076842***  
***Perez Peralta, Fabrizio Salvador Elias 		2023077476***

**Tacna – Perú**  
**2026**

| CONTROL DE VERSIONES |  |  |  |  |  |
| :---: | :---: | :---: | :---: | :---: | ----- |
| Versión | Hecha por | Revisada por | Aprobada por | Fecha | Motivo |
| 1.0 | FSEPP MADP |  |  | 01/05/2026 | Versión Original |

# 

# 

# 

# 

# 

# 

# 

# 

# 

# 

# 

# **DataQuest: Sistema de Validación de Normalización de Base de Datos Relacionales**

# **Documento de Visión**

# 

# **Versión 1.0**

| CONTROL DE VERSIONES |  |  |  |  |  |
| :---: | :---: | :---: | :---: | :---: | ----- |
| Versión | Hecha por | Revisada por | Aprobada por | Fecha | Motivo |
| 1.0 | FSEPP MADP |  |  | 01/05/2026 | Versión Original |

**INDICE GENERAL**

[1\. Introducción	5](#1.-introducción)

[1.1 Propósito	5](#1.1-propósito)

[1.2 Alcance	5](#1.2-alcance)

[1.3 Definiciones, Siglas y Abreviaturas	6](#1.3-definiciones,-siglas-y-abreviaturas)

[1.4 Referencias	6](#1.4-referencias)

[1.5 Visión General	6](#1.5-visión-general)

[2\. Posicionamiento	6](#2.-posicionamiento)

[2.1 Oportunidad de negocio	6](#2.1-oportunidad-de-negocio)

[2.2 Definición del problema	7](#2.2-definición-del-problema)

[3\. Descripción de los interesados y usuarios	7](#3.-descripción-de-los-interesados-y-usuarios)

[3.1 Resumen de los interesados	7](#3.1-resumen-de-los-interesados)

[3.2 Resumen de los usuarios	8](#3.2-resumen-de-los-usuarios)

[3.3 Entorno de usuario	9](#3.3-entorno-de-usuario)

[3.4 Perfiles de los interesados	9](#3.4-perfiles-de-los-interesados)

[3.5 Perfiles de los Usuarios	9](#3.5-perfiles-de-los-usuarios)

[3.6 Necesidades de los interesados y usuarios	10](#3.6-necesidades-de-los-interesados-y-usuarios)

[4\. Vista General del Producto	12](#4.-vista-general-del-producto)

[4.1 Perspectiva del producto	12](#4.1-perspectiva-del-producto)

[4.2 Resumen de capacidades	12](#4.2-resumen-de-capacidades)

[4.3 Suposiciones y dependencias	13](#4.3-suposiciones-y-dependencias)

[4.4 Costos y precios	13](#4.4-costos-y-precios)

[4.5 Licenciamiento e instalación	13](#4.5-licenciamiento-e-instalación)

[5\. Características del producto	13](#5.-características-del-producto)

[6\. Restricciones	14](#6.-restricciones)

[7\. Rangos de calidad	15](#7.-rangos-de-calidad)

[8\. Precedencia y Prioridad	15](#8.-precedencia-y-prioridad)

[9\. Otros requerimientos del producto	16](#9.-otros-requerimientos-del-producto)

[10\. Conclusiones	16](#10.-conclusiones)

[11\. Recomendaciones	17](#11.-recomendaciones)

[12\. Bibliografía	18](#12.-bibliografía)

[13\. Webgrafía	18](#13.-webgrafía)

# **1\. Introducción** {#1.-introducción}

## **1.1 Propósito** {#1.1-propósito}

El presente documento tiene como propósito definir la visión general del proyecto DataQuest, un sistema web libre y autónomo para la validación y autoaprendizaje de la normalización de bases de datos relacionales. El sistema está orientado a estudiantes, profesionales y cualquier persona interesada en dominar el diseño de esquemas sin redundancias, sin necesidad de supervisión externa. Este documento guiará al equipo de desarrollo y a futuros colaboradores.

## **1.2 Alcance** {#1.2-alcance}

DataQuest es una plataforma web educativa interactiva que permite a los usuarios practicar y validar automáticamente el proceso de normalización de bases de datos relacionales. No incluye funcionalidades de supervisión docente, seguimiento de grupos o paneles de administración para terceros. Todo el progreso es personal y opcional (el usuario puede registrar una cuenta para guardar su historial, pero no es obligatorio). El sistema incluye:

* Un validador automático de dependencias funcionales y formas normales (1FN, 2FN, 3FN, BCNF).  
* Un visualizador de esquemas que genera diagramas entidad-relación.  
* Puzzles de aprendizaje secuenciales con retroalimentación paso a paso.  
* Retos semanales con puntuación, ranking anónimo (por apodo) y elementos de gamificación (medallas).  
* Registro opcional de usuarios para guardar progreso y logros.  
* El sistema se alojará en Vercel (frontend React y backend PHP) y utilizará un VPS para la base de datos MySQL. Es completamente gratuito y de código abierto.

## **1.3 Definiciones, Siglas y Abreviaturas** {#1.3-definiciones,-siglas-y-abreviaturas}

* 1FN, 2FN, 3FN, BCNF: Formas normales.  
* Dependencia funcional: Relación entre atributos.  
* React Flow: Librería de visualización de diagramas.  
* VPS: Servidor Virtual Privado.  
* Vercel: Plataforma de despliegue web.  
* MVP: Producto Mínimo Viable.

## **1.4 Referencias** {#1.4-referencias}

Informe de Factibilidad DataQuest (FD01), Versión 1.0, 01/05/2026.

## **1.5 Visión General** {#1.5-visión-general}

DataQuest nace como una herramienta de autoaprendizaje gratuita y sin restricciones. No existe un rol de "instructor" dentro del sistema; cada usuario es dueño de su propio progreso. El sistema fomenta la práctica autónoma mediante validación inmediata, visualizaciones claras y gamificación no competitiva (el ranking es por apodo y se puede optar por no aparecer). El código es abierto, permitiendo que cualquier persona o institución lo despliegue por su cuenta. El desarrollo se realizará en 3 meses (marzo a junio de 2026\) con un costo total de S/ 11,730.00.

# **2\. Posicionamiento** {#2.-posicionamiento}

## **2.1 Oportunidad de negocio** {#2.1-oportunidad-de-negocio}

Dado que el proyecto es de código abierto y no tiene fines de lucro, la “oportunidad” es de impacto social: proveer una herramienta efectiva, gratuita y accesible que resuelve la falta de retroalimentación inmediata en el aprendizaje de la normalización. A diferencia de alternativas comerciales o limitadas, DataQuest no requiere suscripción, no recopila datos sensibles y puede ser desplegado localmente por cualquier institución.

## **2.2 Definición del problema** {#2.2-definición-del-problema}

| Problema  | Factores que lo causan  | Efectos  |
| :---- | :---- | :---- |
| Dificultad en el aprendizaje autónomo de la normalización de bases de datos.  | \- Falta de herramientas interactivas gratuitas con retroalimentación inmediata.  \- Los ejercicios se resuelven en papel o documentos sin validación.  \- La corrección manual es tardía o inexistente para el autoaprendizaje.  | \- Curva de aprendizaje prolongada. \- Errores recurrentes (dependencias mal identificadas, redundancias).  \- Desmotivación para practicar.  \- Esquemas de bases de datos deficientes.  |

# **3\. Descripción de los interesados y usuarios** {#3.-descripción-de-los-interesados-y-usuarios}

## **3.1 Resumen de los interesados** {#3.1-resumen-de-los-interesados}

| Interesado | Rol en el proyecto | Influencia |
| :---- | :---- | :---- |
| Equipo de desarrollo | Creación, pruebas, despliegue y mantenimiento del sistema. | Alta |
| Usuarios finales (estudiantes, profesionales, autodidactas) | Beneficiarios directos; su retroalimentación guía la evolución del sistema. | Media |
| Comunidad de desarrollo open source | Posibles contribuyentes (código, traducciones, reporte de errores). | Baja (inicial) |

## **3.2 Resumen de los usuarios** {#3.2-resumen-de-los-usuarios}

| Tipo de usuario | Descripción |
| :---- | :---- |
| Usuario anónimo | Persona que utiliza la plataforma sin registrarse. Puede usar validador, visualizador y puzzles básicos, pero no guarda progreso ni participa en retos semanales. |
| Usuario registrado | Persona que crea una cuenta (correo y apodo). Guarda su progreso, acumula medallas y puntos, participa en retos semanales y aparece en rankings anónimos (solo con su apodo). |
| Usuario desarrollador | Persona que contribuye al código fuente o reporta errores. No tiene privilegios especiales en la plataforma. |

## **3.3 Entorno de usuario** {#3.3-entorno-de-usuario}

Acceso mediante navegador web (Chrome, Firefox, Edge) en cualquier dispositivo con conexión a internet. No requiere instalación. Interfaz responsive y con mensajes referenciales. El idioma principal es español.

## **3.4 Perfiles de los interesados** {#3.4-perfiles-de-los-interesados}

| Interesado | Nombre / Cargo | Responsabilidades |
| :---- | :---- | :---- |
| Jefe de proyecto / Desarrollador | Fabrizio Perez Peralta | Planificación, desarrollo backend, algoritmos, coordinación. |
| Desarrollador / Documentador | Manuel A. Dongo Plaza | Desarrollo frontend, visualizador, pruebas, documentación. |

## **3.5 Perfiles de los Usuarios** {#3.5-perfiles-de-los-usuarios}

Usuario anónimo

| Atributo | Valor |
| :---- | :---- |
| Representa | Persona que prueba el sistema sin compromiso. |
| Estudios mínimos | Nociones básicas de bases de datos. |
| Capacidad técnica | Navegación web básica. |
| Frecuencia de uso | Esporádica. |
| Objetivo | Evaluar la herramienta, resolver ejercicios puntuales. |

Usuario registrado

| Atributo | Valor |
| :---- | :---- |
| Representa | Estudiante, profesional o autodidacta comprometido con su aprendizaje. |
| Estudios mínimos | Nociones de bases de datos. |
| Capacidad técnica | Navegación web, manejo de formularios. |
| Frecuencia de uso | Regular (diaria, semanal). |
| Objetivo | Practicar sistemáticamente, guardar progreso, participar en retos, obtener medallas. |

## **3.6 Necesidades de los interesados y usuarios** {#3.6-necesidades-de-los-interesados-y-usuarios}

| Necesidad | Prioridad | Solución propuesta |
| :---- | :---- | :---- |
| Validación automática de ejercicios | Alta | Motor de validación de DF y formas normales, retroalimentación inmediata. |
| Visualización gráfica de esquemas | Alta | Diagramas ER con React Flow. |
| Práctica guiada y motivante | Media | Puzzles secuenciales, retos semanales, medallas, ranking por apodo. |
| Conservar el progreso | Media | Registro opcional de usuario con guardado de puntuaciones y logros. |
| Ausencia de supervisión externa | Alta | Sin paneles de control para instructores; el usuario es dueño de sus datos. |
| Bajo costo (gratuito para el usuario final) | Alta | Uso de tecnologías open source, Vercel gratuito, VPS económico. |

# **4\. Vista General del Producto** {#4.-vista-general-del-producto}

## **4.1 Perspectiva del producto** {#4.1-perspectiva-del-producto}

DataQuest es un sistema independiente, sin integración con sistemas externos obligatoria. Se compone de:

* Backend: API REST en PHP con Laravel, alojada en Vercel (funciones serverless). Contiene la lógica de validación y la interfaz con la base de datos.  
* Frontend: Aplicación React, alojada también en Vercel, que consume la API y presenta el visualizador.  
* Base de datos: MySQL alojada en un VPS (Debian, 4 Cores, 8 GB RAM, 160 GB NVMe). Almacena usuarios, progreso, puzzles y resultados de retos.  
* El código es abierto (licencia MIT) y puede ser desplegado por terceros.

## **4.2 Resumen de capacidades** {#4.2-resumen-de-capacidades}

| Capacidad | Beneficio |
| :---- | :---- |
| Validación automática de 1FN, 2FN, 3FN, BCNF | Retroalimentación inmediata. |
| Visualizador de esquemas ER | Comprensión visual. |
| Puzzles de aprendizaje paso a paso | Aprendizaje guiado. |
| Retos semanales y gamificación (medallas, ranking por apodo) | Motivación y práctica continua sin presión social. |
| Registro opcional | Guardado de progreso. |
| Mensajes referenciales | Usabilidad sin tutorial. |

## **4.3 Suposiciones y dependencias** {#4.3-suposiciones-y-dependencias}

* Suposiciones: Usuarios con navegador actualizado e internet. Vercel mantiene su capa gratuita. Estabilidad del VPS.  
* Dependencias: Librería react-flow activa. Servicios de Vercel y del proveedor de VPS.

## **4.4 Costos y precios** {#4.4-costos-y-precios}

El uso del sistema es gratuito para los usuarios finales. Los costos de desarrollo (S/ 11,730.00) son asumidos por el equipo o por patrocinio. Los costos operativos anuales (VPS \+ dominio) son aproximadamente S/ 1,815.00, que pueden cubrirse con donaciones.

## **4.5 Licenciamiento e instalación** {#4.5-licenciamiento-e-instalación}

Licencia MIT. Código fuente público en GitHub. Instalación mediante instrucciones en README: configurar base de datos MySQL, desplegar backend en Vercel (o cualquier servidor PHP), y frontend en Vercel/Netlify.

# **5\. Características del producto** {#5.-características-del-producto}

| Característica | Descripción | Prioridad |
| :---- | :---- | :---- |
| Validador de DF y formas normales | Ingresar tablas y DF, obtener nivel de normalización y violaciones. | Alta |
| Visualizador de esquemas | Diagrama ER interactivo. | Alta |
| Puzzles de aprendizaje | Secuencias de ejercicios con retroalimentación paso a paso. | Alta (MVP) |
| Retos semanales | Problemas con tiempo límite, puntuación, ranking por apodo, medallas. | Media |
| Registro de usuario (opcional) | Guarda progreso y logros. No requiere verificación de correo (opcional). | Media |
| Mensajes referenciales | Tooltips y textos emergentes que guían al usuario. | Alta |

# **6\. Restricciones** {#6.-restricciones}

* Tecnológicas: Navegadores modernos (Chrome 90+, Firefox 88+, Edge 90+). PHP 7.4+ y MySQL 5.7+.  
* Tiempo: Desarrollo de 3 meses (21/03/2026 – 30/06/2026).  
* Presupuesto: S/ 11,730.00 máximo.  
* Recursos humanos: Dos desarrolladores, medio tiempo.  
* Legales: Cumplir con Ley de Protección de Datos Personales (Perú) para los datos de usuarios registrados.  
* Idioma: Español.

# **7\. Rangos de calidad** {#7.-rangos-de-calidad}

| Atributo | Métrica |
| :---- | :---- |
| Funcionalidad | 95% de acierto en esquemas de prueba. |
| Usabilidad | Un nuevo usuario realiza una validación básica en \< 5 minutos. |
| Rendimiento | Validación de hasta 20 atributos en \< 2 segundos. |
| Disponibilidad | 99% (excepto mantenimiento). |
| Portabilidad | Funciona en Chrome, Firefox, Edge. |

# **8\. Precedencia y Prioridad** {#8.-precedencia-y-prioridad}

1. Motor de validación.  
2. Visualizador de esquemas.  
3. Mensajes referenciales.  
4. Puzzles básicos.  
5. Registro y perfil (guardado de progreso).  
6. Retos semanales y gamificación.

# **9\. Otros requerimientos del producto** {#9.-otros-requerimientos-del-producto}

1. Estándares legales  
* Ley de Protección de Datos Personales (Perú) – consentimiento informado para registro.  
* Licencia MIT para el código.  
* Términos de servicio de Vercel y proveedor VPS.  
2. Estándares de comunicación  
* Mensajes de error constructivos, lenguaje claro.  
* Documentación en español e inglés (básico).  
3. Estándares de cumplimiento de la plataforma  
* WCAG 2.1 nivel A básico.  
* HTML/CSS/JS válido.  
4. Estándares de calidad y seguridad  
* Contraseñas con hash (bcrypt).  
* HTTPS obligatorio.  
* Sesiones seguras.  
* Dependencias actualizadas.

# **10\. Conclusiones** {#10.-conclusiones}

* DataQuest es un sistema web libre, autónomo y sin supervisión docente, ideal para el autoaprendizaje de la normalización.  
* Cubre una necesidad real de estudiantes y profesionales.  
* Es técnica, económica, operativa, legal, social y ambientalmente viable.  
* La visión presentada elimina cualquier funcionalidad de administración o seguimiento por terceros, empoderando al usuario individual.

# **11\. Recomendaciones** {#11.-recomendaciones}

* Desarrollar bajo metodología ágil con entregas tempranas del validador y visualizador.  
* Publicar el código desde el inicio en GitHub.  
* No implementar paneles de administración; enfocarse en la experiencia de usuario individual.  
* Realizar pruebas de usabilidad con usuarios anónimos.

# **12\. Bibliografía** {#12.-bibliografía}

* Codd, E. F. (1970). "A Relational Model of Data". Communications of the ACM.  
* IEEE Std 830-1998.  
* Informe de Factibilidad DataQuest (2026).

# **13\. Webgrafía** {#13.-webgrafía}

* Laravel, React, React Flow, Vercel, Ley N.º 29733 (Perú).

[image1]: <data:image/png;base64,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>
