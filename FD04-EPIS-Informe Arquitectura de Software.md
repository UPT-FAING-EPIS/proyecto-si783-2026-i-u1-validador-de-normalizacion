**![C:\\Users\\EPIS\\Documents\\upt.png]**

**UNIVERSIDAD PRIVADA DE TACNA**

**FACULTAD DE INGENIERIA**

**Escuela Profesional de Ingeniería de Sistemas**

 **DataQuest: Sistema de Validación de Normalización de Base de Datos Relacionales**

Curso: **BASE DE DATOS II**

Docente: Mag. Patrick Jose Cuadros Quiroga

Integrantes:  
***Dongo Plaza,Manuel Andree 				2023076842***  
***Perez Peralta, Fabrizio Salvador Elias 		2023077476***

**Tacna – Perú**  
**2026**

| CONTROL DE VERSIONES |  |  |  |  |  |
| :---: | :---: | :---: | :---: | :---: | ----- |
| Versión | Hecha por | Revisada por | Aprobada por | Fecha | Motivo |
| 1.0 | FSEPP MADP |  |  | 01/05/2026 | Versión Original |

# **DataQuest: Sistema de Validación de Normalización de Base de Datos Relacionales**

# **Documento de Arquitectura de Software**

# **Versión 1.0**

| CONTROL DE VERSIONES |  |  |  |  |  |
| :---: | :---: | :---: | :---: | :---: | ----- |
| Versión | Hecha por | Revisada por | Aprobada por | Fecha | Motivo |
| 1.0 | FSEPP MADP |  |  | 01/05/2026 | Versión Original |

---

# INDICE GENERAL

[1\. INTRODUCCIÓN	5](#1.-introducción)

[1.1. Propósito (Diagrama 4+1)	5](#1.1.-propósito-\(diagrama-4+1\))

[1.2. Alcance	5](#1.2.-alcance)

[1.3. Definiciones, siglas y abreviaturas	6](#1.3.-definiciones,-siglas-y-abreviaturas)

[1.4. Organización del documento	6](#1.4.-organización-del-documento)

[2\. OBJETIVOS Y RESTRICCIONES ARQUITECTÓNICAS	7](#2.-objetivos-y-restricciones-arquitectónicas)

[2.1. Priorización de requerimientos	7](#2.1.-priorización-de-requerimientos)

[2.2. Restricciones	8](#2.2.-restricciones)

[3\. REPRESENTACIÓN DE LA ARQUITECTURA DEL SISTEMA	9](#3.-representación-de-la-arquitectura-del-sistema)

[3.1. Vista de Casos de Uso (Escenario)	9](#3.1.-vista-de-casos-de-uso-\(escenario\))

[3.2. Vista Lógica	9](#3.2.-vista-lógica)

[3.2.1. Diagrama de Subsistemas (paquetes)	9](#3.2.1.-diagrama-de-subsistemas-\(paquetes\))

[3.2.2. Diagrama de Secuencia – Validación con conexión a BD externa	10](#3.2.2.-diagrama-de-secuencia-–-validación-con-conexión-a-bd-externa)

[3.2.3. Diagrama de Clases	10](#3.2.3.-diagrama-de-clases)

[3.2.4. Diagrama de Base de Datos (relacional)	11](#3.2.4.-diagrama-de-base-de-datos-\(relacional\))

[3.3. Vista de Desarrollo (Implementación)	11](#3.3.-vista-de-desarrollo-\(implementación\))

[3.3.1. Diagrama de componentes	11](#3.3.1.-diagrama-de-componentes)

[3.3.2. Diagrama de paquetes (estructura de directorios)	12](#3.3.2.-diagrama-de-paquetes-\(estructura-de-directorios\))

[3.4. Vista de Procesos	13](#3.4.-vista-de-procesos)

[3.5. Vista de Despliegue (Física)	14](#3.5.-vista-de-despliegue-\(física\))

[4\. ATRIBUTOS DE CALIDAD DEL SOFTWARE	14](#4.-atributos-de-calidad-del-software)

[Escenario de Funcionalidad	14](#escenario-de-funcionalidad)

[Escenario de Usabilidad	14](#escenario-de-usabilidad)

[Escenario de Confiabilidad (Seguridad)	15](#escenario-de-confiabilidad-\(seguridad\))

[Escenario de Rendimiento	15](#escenario-de-rendimiento)

[Escenario de Mantenibilidad	15](#escenario-de-mantenibilidad)

---

# **1\. INTRODUCCIÓN** {#1.-introducción}

## **1.1. Propósito (Diagrama 4+1)** {#1.1.-propósito-(diagrama-4+1)}

El propósito de este documento es definir a alto nivel la arquitectura del proyecto DataQuest, un sistema de validación y autoaprendizaje de la normalización de bases de datos relacionales.

El documento tiene por objetivo documentar la arquitectura de software propuesta para DataQuest, asegurando que cumpla con los requerimientos funcionales y no funcionales establecidos en el documento de especificación (FD03). Se emplea el modelo de vistas 4+1 de Kruchten, adaptado a un enfoque de arquitectura hexagonal (puertos y adaptadores) en el backend.

![]

## **1.2. Alcance** {#1.2.-alcance}

Este documento cubre las decisiones arquitectónicas más relevantes: uso de arquitectura hexagonal dentro del backend (separación entre puertos y adaptadores), integración con el patrón MVC de Laravel para la capa de presentación, comunicación con frontend React, persistencia en MySQL, y conexión a bases de datos externas para importación de esquemas. Se excluyen detalles de implementación de bajo nivel y aspectos puramente de infraestructura no software.

# **1.3. Definiciones, siglas y abreviaturas** {#1.3.-definiciones,-siglas-y-abreviaturas}

* Arquitectura hexagonal: Patrón que sitúa la lógica de negocio en un núcleo (dominio) y la comunica con el exterior mediante puertos (interfaces) y adaptadores (implementaciones).  
* Puerto: Interfaz que define una operación esperada del dominio o necesaria desde el exterior.  
* Adaptador: Implementación concreta de un puerto; maneja detalles técnicos (HTTP, SQL, etc.).  
* MVC: Modelo-Vista-Controlador. Patrón de diseño de la capa de presentación.  
* Laravel: Framework PHP que implementa MVC y herramientas de persistencia.  
* React: Biblioteca JavaScript para interfaces de usuario.  
* VPS: Servidor virtual privado.  
* Vercel: Plataforma serverless para despliegue.

# **1.4. Organización del documento** {#1.4.-organización-del-documento}

El documento se organiza en las siguientes secciones: introducción, objetivos y restricciones, representación de la arquitectura (vistas 4+1), atributos de calidad con escenarios, conclusiones y referencias. 

# **2\. OBJETIVOS Y RESTRICCIONES ARQUITECTÓNICAS** {#2.-objetivos-y-restricciones-arquitectónicas}

## **2.1. Priorización de requerimientos** {#2.1.-priorización-de-requerimientos}

Basado en el FD03, se identifican los siguientes requerimientos prioritarios para la arquitectura.

**Requerimientos funcionales (prioridad alta):** 

| ID | Requerimiento |
| :---- | :---- |
| RF-01 | Validar dependencias funcionales (cierre, claves) |
| RF-02 | Determinar nivel de normalización |
| RF-04 | Generar diagrama ER |
| RF-10 | Mensajes referenciales |
| RF-11 | Panel de administración |
| RF-17 | Ingreso por pegado de texto |
| RF-18 | Subida de archivos |
| RF-20 | Generación automática de diagrama |

**Requerimientos no funcionales (prioridad alta):** 

| ID | Requerimiento |
| :---- | :---- |
| RNF-01 | Rendimiento (respuesta rápida) |
| RNF-02 | Usabilidad |
| RNF-03 | Disponibilidad (99%) |
| RNF-05 | Seguridad (autenticación, hash) |
| RNF-09 | Seguridad en conexiones a BD externas |

## **2.2. Restricciones** {#2.2.-restricciones}

* Tecnológicas: Backend PHP con Laravel; frontend React; base de datos MySQL. Se permite conexión a otros motores externos (PostgreSQL, Oracle) mediante adaptadores.  
* Arquitectónicas: Aplicar arquitectura hexagonal en el núcleo (validación, puzzles, retos); usar MVC en la presentación.  
* De integración: El panel de administración es una ruta especial dentro de la misma aplicación Laravel.  
* De despliegue: Frontend y backend se alojan en Vercel; base de datos principal en VPS.  
* De tiempo: Desarrollo en 3 meses.

# **3\. REPRESENTACIÓN DE LA ARQUITECTURA DEL SISTEMA** {#3.-representación-de-la-arquitectura-del-sistema}

## **3.1. Vista de Casos de Uso (Escenario)** {#3.1.-vista-de-casos-de-uso-(escenario)}

![]

## **3.2. Vista Lógica** {#3.2.-vista-lógica}

### **3.2.1. Diagrama de Subsistemas (paquetes)** {#3.2.1.-diagrama-de-subsistemas-(paquetes)}

![]

### **3.2.2. Diagrama de Secuencia – Validación con conexión a BD externa** {#3.2.2.-diagrama-de-secuencia-–-validación-con-conexión-a-bd-externa}

![]

### **3.2.3. Diagrama de Clases** {#3.2.3.-diagrama-de-clases}

![]

### **3.2.4. Diagrama de Base de Datos (relacional)** {#3.2.4.-diagrama-de-base-de-datos-(relacional)}

![]

## **3.3. Vista de Desarrollo (Implementación)** {#3.3.-vista-de-desarrollo-(implementación)}

### **3.3.1. Diagrama de componentes** {#3.3.1.-diagrama-de-componentes}

![]

### **3.3.2. Diagrama de paquetes (estructura de directorios)** {#3.3.2.-diagrama-de-paquetes-(estructura-de-directorios)}

![]

## **3.4. Vista de Procesos** {#3.4.-vista-de-procesos}

![]

## **3.5. Vista de Despliegue (Física)** {#3.5.-vista-de-despliegue-(física)}

![]

# **4\. ATRIBUTOS DE CALIDAD DEL SOFTWARE** {#4.-atributos-de-calidad-del-software}

## **Escenario de Funcionalidad** {#escenario-de-funcionalidad}

* Fuente: Usuario registrado.  
* Estímulo: Solicita validar un esquema con 15 atributos y 8 dependencias.  
* Artefacto: Servicio de validación.  
* Entorno: Operación normal.  
* Respuesta: Retorna el nivel de normalización y las violaciones.  
* Medida: Precisión ≥ 95% sobre casos de prueba conocidos.

## **Escenario de Usabilidad** {#escenario-de-usabilidad}

* Fuente: Usuario nuevo.  
* Estímulo: Accede por primera vez a la validación.  
* Artefacto: Interfaz React con tooltips.  
* Entorno: Sin tutorial previo.  
* Respuesta: Los mensajes referenciales guían al usuario.  
* Medida: Completa validación básica en <5 minutos sin ayuda.

## **Escenario de Confiabilidad (Seguridad)** {#escenario-de-confiabilidad-(seguridad)}

* Fuente: Administrador.  
* Estímulo: Intento de acceso al panel con credenciales erróneas.  
* Artefacto: Autenticación de Laravel.  
* Entorno: Producción.  
* Respuesta: Rechaza acceso y registra intento.  
* Medida: Logs con timestamp e IP; bloqueo tras 5 fallos.

## **Escenario de Rendimiento** {#escenario-de-rendimiento}

* Fuente: Usuario anónimo.  
* Estímulo: 50 usuarios concurrentes validando esquemas.  
* Artefacto: API de validación.  
* Entorno: Servidor VPS.  
* Respuesta: Todas las solicitudes se procesan sin demoras excesivas.  
* Medida: Tiempo de respuesta promedio <2 segundos; soporte de 500 usuarios concurrentes en pruebas de carga.

## **Escenario de Mantenibilidad** {#escenario-de-mantenibilidad}

* Fuente: Desarrollador.  
* Estímulo: Agregar nuevo tipo de entrada (conexión a MongoDB).  
* Artefacto: Adaptador de importación.  
* Entorno: Desarrollo.  
* Respuesta: Crear nueva implementación del puerto sin modificar dominio.  
* Medida: Tiempo <10 horas; código existente inalterado.
