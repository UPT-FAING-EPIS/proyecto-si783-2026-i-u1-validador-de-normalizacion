# Documento de Visión – DataQuest

**![C:\\Users\\EPIS\\Documents\\upt.png][image1]**

**UNIVERSIDAD PRIVADA DE TACNA**  
**FACULTAD DE INGENIERÍA**  
**Escuela Profesional de Ingeniería de Sistemas**

## DataQuest: Sistema de Validación de Normalización de Base de Datos Relacionales

**Curso:** BASE DE DATOS II  
**Docente:** Mag. Patrick Cuadros Quiroga

**Integrantes:**  
- Dongo Plaza, Manuel Andree (2023076842)  
- Perez Peralta, Fabrizio Salvador Elias (2023077476)

**Tacna – Perú**  
**2026**

---

## Control de Versiones

| Versión | Hecha por       | Revisada por | Aprobada por | Fecha       | Motivo          |
|---------|----------------|--------------|--------------|-------------|-----------------|
| 1.0     | FSEPP, MADP     | —            | —            | 01/05/2026  | Versión Original |

---

## Índice General

1. [Introducción](#1-introducción)  
   1.1 [Propósito](#11-propósito)  
   1.2 [Alcance](#12-alcance)  
   1.3 [Definiciones, Siglas y Abreviaturas](#13-definiciones-siglas-y-abreviaturas)  
   1.4 [Referencias](#14-referencias)  
   1.5 [Visión General](#15-visión-general)  
2. [Posicionamiento](#2-posicionamiento)  
   2.1 [Oportunidad de negocio](#21-oportunidad-de-negocio)  
   2.2 [Definición del problema](#22-definición-del-problema)  
3. [Descripción de los interesados y usuarios](#3-descripción-de-los-interesados-y-usuarios)  
   3.1 [Resumen de los interesados](#31-resumen-de-los-interesados)  
   3.2 [Resumen de los usuarios](#32-resumen-de-los-usuarios)  
   3.3 [Entorno de usuario](#33-entorno-de-usuario)  
   3.4 [Perfiles de los interesados](#34-perfiles-de-los-interesados)  
   3.5 [Perfiles de los usuarios](#35-perfiles-de-los-usuarios)  
   3.6 [Necesidades de los interesados y usuarios](#36-necesidades-de-los-interesados-y-usuarios)  
4. [Vista General del Producto](#4-vista-general-del-producto)  
   4.1 [Perspectiva del producto](#41-perspectiva-del-producto)  
   4.2 [Resumen de capacidades](#42-resumen-de-capacidades)  
   4.3 [Suposiciones y dependencias](#43-suposiciones-y-dependencias)  
   4.4 [Costos y precios](#44-costos-y-precios)  
   4.5 [Licenciamiento e instalación](#45-licenciamiento-e-instalación)  
5. [Características del producto](#5-características-del-producto)  
6. [Restricciones](#6-restricciones)  
7. [Rangos de calidad](#7-rangos-de-calidad)  
8. [Precedencia y prioridad](#8-precedencia-y-prioridad)  
9. [Otros requerimientos del producto](#9-otros-requerimientos-del-producto)  
10. [Conclusiones](#10-conclusiones)  
11. [Recomendaciones](#11-recomendaciones)  
12. [Bibliografía](#12-bibliografía)  
13. [Webgrafía](#13-webgrafía)

---

## 1. Introducción

### 1.1 Propósito

El presente documento tiene como propósito definir la visión general del proyecto **DataQuest**, un sistema web libre y autónomo diseñado para la validación y el autoaprendizaje de la normalización de bases de datos relacionales. El sistema está orientado a estudiantes, profesionales de TI y cualquier persona interesada en dominar el diseño de esquemas libres de redundancias, sin necesidad de supervisión externa. Este documento guiará al equipo de desarrollo y a futuros colaboradores.

### 1.2 Alcance

DataQuest es una plataforma web educativa interactiva que permite a los usuarios practicar y validar automáticamente el proceso de normalización de bases de datos relacionales. **No incluye funcionalidades de supervisión docente, seguimiento de grupos o paneles de administración para terceros.** Todo el progreso es personal y opcional (el usuario puede registrar una cuenta para guardar su historial, pero no es obligatorio). El sistema incluye:

- Un validador automático de dependencias funcionales y formas normales (1FN, 2FN, 3FN, BCNF).
- Un visualizador de esquemas que genera diagramas entidad-relación.
- Puzzles de aprendizaje secuenciales con retroalimentación paso a paso.
- Retos semanales con puntuación, ranking anónimo (por apodo) y elementos de gamificación (medallas).
- Registro opcional de usuarios para guardar progreso y logros.

El sistema se alojará en **Vercel** (frontend React y backend PHP) y utilizará un **VPS** para la base de datos MySQL. Es completamente gratuito y de código abierto.

### 1.3 Definiciones, Siglas y Abreviaturas

| Término | Significado |
|---------|-------------|
| 1FN, 2FN, 3FN, BCNF | Formas normales (Primera, Segunda, Tercera, Boyce-Codd) |
| Dependencia funcional | Relación entre atributos donde un atributo determina a otro |
| React Flow | Librería de visualización de diagramas para React |
| VPS | Servidor Virtual Privado (Virtual Private Server) |
| Vercel | Plataforma de despliegue web serverless |
| MVP | Producto Mínimo Viable (Minimum Viable Product) |

### 1.4 Referencias

- Informe de Factibilidad DataQuest (FD01), Versión 1.0, 01/05/2026.

### 1.5 Visión General

DataQuest nace como una herramienta de autoaprendizaje gratuita y sin restricciones. No existe un rol de "instructor" dentro del sistema; cada usuario es dueño de su propio progreso. El sistema fomenta la práctica autónoma mediante validación inmediata, visualizaciones claras y gamificación no competitiva (el ranking es por apodo y se puede optar por no aparecer). El código es abierto, permitiendo que cualquier persona o institución lo despliegue por su cuenta. El desarrollo se realizará en **3 meses** (marzo a junio de 2026) con un costo total de S/ 11,730.00.

---

## 2. Posicionamiento

### 2.1 Oportunidad de negocio

Dado que el proyecto es de código abierto y sin fines de lucro, la “oportunidad” es de **impacto social**: proveer una herramienta efectiva, gratuita y accesible que resuelve la falta de retroalimentación inmediata en el aprendizaje de la normalización. A diferencia de alternativas comerciales o limitadas, DataQuest:

- No requiere suscripción.
- No recopila datos sensibles.
- Puede ser desplegado localmente por cualquier institución.

### 2.2 Definición del problema

| Problema | Factores que lo causan | Efectos |
|----------|------------------------|---------|
| Dificultad en el aprendizaje autónomo de la normalización de bases de datos. | - Falta de herramientas interactivas gratuitas con retroalimentación inmediata.<br>- Ejercicios resueltos en papel o documentos sin validación.<br>- Corrección manual tardía o inexistente para el autoaprendizaje. | - Curva de aprendizaje prolongada.<br>- Errores recurrentes (dependencias mal identificadas, redundancias).<br>- Desmotivación para practicar.<br>- Esquemas de bases de datos deficientes. |

---

## 3. Descripción de los interesados y usuarios

### 3.1 Resumen de los interesados

| Interesado | Rol en el proyecto | Influencia |
|------------|--------------------|------------|
| Equipo de desarrollo | Creación, pruebas, despliegue y mantenimiento del sistema. | Alta |
| Usuarios finales (estudiantes, profesionales, autodidactas) | Beneficiarios directos; su retroalimentación guía la evolución del sistema. | Media |
| Comunidad de desarrollo open source | Posibles contribuyentes (código, traducciones, reporte de errores). | Baja (inicial) |

### 3.2 Resumen de los usuarios

| Tipo de usuario | Descripción |
|----------------|-------------|
| Usuario anónimo | Utiliza la plataforma sin registrarse. Puede usar validador, visualizador y puzzles básicos, pero no guarda progreso ni participa en retos semanales. |
| Usuario registrado | Crea una cuenta (correo y apodo). Guarda su progreso, acumula medallas y puntos, participa en retos semanales y aparece en rankings anónimos (solo con su apodo). |
| Usuario desarrollador | Contribuye al código fuente o reporta errores. No tiene privilegios especiales en la plataforma. |

### 3.3 Entorno de usuario

Acceso mediante navegador web (Chrome, Firefox, Edge) en cualquier dispositivo con conexión a internet. No requiere instalación. Interfaz responsive y con mensajes referenciales. El idioma principal es español.

### 3.4 Perfiles de los interesados

| Interesado | Nombre / Cargo | Responsabilidades |
|------------|----------------|-------------------|
| Jefe de proyecto / Desarrollador | Fabrizio Perez Peralta | Planificación, desarrollo backend, algoritmos, coordinación. |
| Desarrollador / Documentador | Manuel A. Dongo Plaza | Desarrollo frontend, visualizador, pruebas, documentación. |

### 3.5 Perfiles de los usuarios

#### Usuario anónimo

| Atributo | Valor |
|----------|-------|
| Representa | Persona que prueba el sistema sin compromiso. |
| Estudios mínimos | Nociones básicas de bases de datos. |
| Capacidad técnica | Navegación web básica. |
| Frecuencia de uso | Esporádica. |
| Objetivo | Evaluar la herramienta, resolver ejercicios puntuales. |

#### Usuario registrado

| Atributo | Valor |
|----------|-------|
| Representa | Estudiante, profesional o autodidacta comprometido con su aprendizaje. |
| Estudios mínimos | Nociones de bases de datos. |
| Capacidad técnica | Navegación web, manejo de formularios. |
| Frecuencia de uso | Regular (diaria, semanal). |
| Objetivo | Practicar sistemáticamente, guardar progreso, participar en retos, obtener medallas. |

### 3.6 Necesidades de los interesados y usuarios

| Necesidad | Prioridad | Solución propuesta |
|-----------|-----------|--------------------|
| Validación automática de ejercicios | Alta | Motor de validación de DF y formas normales, retroalimentación inmediata. |
| Visualización gráfica de esquemas | Alta | Diagramas ER con React Flow. |
| Práctica guiada y motivante | Media | Puzzles secuenciales, retos semanales, medallas, ranking por apodo. |
| Conservar el progreso | Media | Registro opcional de usuario con guardado de puntuaciones y logros. |
| Ausencia de supervisión externa | Alta | Sin paneles de control para instructores; el usuario es dueño de sus datos. |
| Bajo costo (gratuito para el usuario final) | Alta | Tecnologías open source, Vercel gratuito, VPS económico. |

---

## 4. Vista General del Producto

### 4.1 Perspectiva del producto

DataQuest es un sistema independiente, sin integración con sistemas externos obligatoria. Se compone de:

- **Backend:** API REST en PHP con Laravel, alojada en Vercel (funciones serverless). Contiene la lógica de validación y la interfaz con la base de datos.
- **Frontend:** Aplicación React, alojada también en Vercel, que consume la API y presenta el visualizador.
- **Base de datos:** MySQL alojada en un VPS (Debian, 4 Cores, 8 GB RAM, 160 GB NVMe). Almacena usuarios, progreso, puzzles y resultados de retos.
- **Código:** Abierto (licencia MIT), desplegable por terceros.

### 4.2 Resumen de capacidades

| Capacidad | Beneficio |
|-----------|-----------|
| Validación automática de 1FN, 2FN, 3FN, BCNF | Retroalimentación inmediata. |
| Visualizador de esquemas ER | Comprensión visual. |
| Puzzles de aprendizaje paso a paso | Aprendizaje guiado. |
| Retos semanales y gamificación (medallas, ranking por apodo) | Motivación y práctica continua sin presión social. |
| Registro opcional | Guardado de progreso. |
| Mensajes referenciales | Usabilidad sin tutorial. |

### 4.3 Suposiciones y dependencias

- **Suposiciones:** Usuarios con navegador actualizado e internet. Vercel mantiene su capa gratuita. Estabilidad del VPS.
- **Dependencias:** Librería react-flow activa. Servicios de Vercel y del proveedor de VPS.

### 4.4 Costos y precios

El uso del sistema es **gratuito** para los usuarios finales. Los costos de desarrollo (S/ 11,730.00) son asumidos por el equipo o por patrocinio. Los costos operativos anuales (VPS + dominio) son aproximadamente S/ 1,815.00, que pueden cubrirse con donaciones.

### 4.5 Licenciamiento e instalación

Licencia **MIT**. Código fuente público en GitHub. Instalación mediante instrucciones en README: configurar base de datos MySQL, desplegar backend en Vercel (o cualquier servidor PHP), y frontend en Vercel/Netlify.

---

## 5. Características del producto

| Característica | Descripción | Prioridad |
|----------------|-------------|-----------|
| Validador de DF y formas normales | Ingresar tablas y DF, obtener nivel de normalización y violaciones. | Alta |
| Visualizador de esquemas | Diagrama ER interactivo. | Alta |
| Puzzles de aprendizaje | Secuencias de ejercicios con retroalimentación paso a paso. | Alta (MVP) |
| Retos semanales | Problemas con tiempo límite, puntuación, ranking por apodo, medallas. | Media |
| Registro de usuario (opcional) | Guarda progreso y logros. No requiere verificación de correo. | Media |
| Mensajes referenciales | Tooltips y textos emergentes que guían al usuario. | Alta |

---

## 6. Restricciones

- **Tecnológicas:** Navegadores modernos (Chrome 90+, Firefox 88+, Edge 90+). PHP 7.4+, MySQL 5.7+.
- **Tiempo:** Desarrollo de 3 meses (21/03/2026 – 30/06/2026).
- **Presupuesto:** Máximo S/ 11,730.00.
- **Recursos humanos:** Dos desarrolladores, medio tiempo.
- **Legales:** Cumplir con Ley de Protección de Datos Personales (Perú) para los datos de usuarios registrados.
- **Idioma:** Español.

---

## 7. Rangos de calidad

| Atributo | Métrica |
|----------|---------|
| Funcionalidad | 95% de acierto en esquemas de prueba. |
| Usabilidad | Un nuevo usuario realiza una validación básica en <5 minutos. |
| Rendimiento | Validación de hasta 20 atributos en <2 segundos. |
| Disponibilidad | 99% (excepto mantenimiento). |
| Portabilidad | Funciona en Chrome, Firefox, Edge. |

---

## 8. Precedencia y Prioridad

1. Motor de validación.
2. Visualizador de esquemas.
3. Mensajes referenciales.
4. Puzzles básicos.
5. Registro y perfil (guardado de progreso).
6. Retos semanales y gamificación.

---

## 9. Otros requerimientos del producto

### a) Estándares legales
- Ley de Protección de Datos Personales (Perú) – consentimiento informado para registro.
- Licencia MIT para el código.
- Términos de servicio de Vercel y proveedor VPS.

### b) Estándares de comunicación
- Mensajes de error constructivos, lenguaje claro.
- Documentación en español e inglés (básico).

### c) Estándares de cumplimiento de la plataforma
- WCAG 2.1 nivel A básico.
- HTML/CSS/JS válido.

### d) Estándares de calidad y seguridad
- Contraseñas con hash (bcrypt).
- HTTPS obligatorio.
- Sesiones seguras.
- Dependencias actualizadas.

---

## 10. Conclusiones

- DataQuest es un sistema web **libre, autónomo y sin supervisión docente**, ideal para el autoaprendizaje de la normalización.
- Cubre una necesidad real de estudiantes y profesionales de TI.
- Es técnica, económica, operativa, legal, social y ambientalmente viable.
- La visión presentada elimina cualquier funcionalidad de administración o seguimiento por terceros, empoderando al usuario individual.

## 11. Recomendaciones

- Desarrollar bajo metodología ágil con entregas tempranas del validador y visualizador.
- Publicar el código desde el inicio en GitHub.
- No implementar paneles de administración; enfocarse en la experiencia de usuario individual.
- Realizar pruebas de usabilidad con usuarios anónimos.

## 12. Bibliografía

- Codd, E. F. (1970). "A Relational Model of Data for Large Shared Data Banks". Communications of the ACM.
- IEEE Std 830-1998, "Recommended Practice for Software Requirements Specifications".
- Informe de Factibilidad DataQuest (FD01), 2026.

## 13. Webgrafía

- Laravel: https://laravel.com
- React: https://react.dev
- React Flow: https://reactflow.dev
- Vercel: https://vercel.com
- Ley N.º 29733 (Perú): https://www.gob.pe/29733

---

**Elaborado por:**  
- Fabrizio Salvador Elias Perez Peralta  
- Manuel Andree Dongo Plaza  

**Fecha:** 01 de mayo de 2026
