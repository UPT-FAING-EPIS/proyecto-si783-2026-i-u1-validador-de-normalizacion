# UNIVERSIDAD PRIVADA DE TACNA
## FACULTAD DE INGENIERÍA
### Escuela Profesional de Ingeniería de Sistemas

---

# DataQuest: Sistema de Validación de Normalización de Base de Datos Relacionales

**Curso:** BASE DE DATOS II  
**Docente:** Mag. Patrick Jose Cuadros Quiroga  

**Integrantes:**  
- Dongo Plaza, Manuel Andree — 2023076842  
- Perez Peralta, Fabrizio Salvador Elias — 2023077476  

**Tacna – Perú**  
**2026**

---

## CONTROL DE VERSIONES

| Versión | Hecha por | Revisada por | Aprobada por | Fecha | Motivo |
|--------|----------|-------------|-------------|--------|--------|
| 1.0 | FSEPP MADP |  |  | 01/05/2026 | Versión Original |

---

# Documento de Arquitectura de Software
## Versión 1.0

---

# ÍNDICE GENERAL

1. INTRODUCCIÓN  
   1.1 Propósito  
   1.2 Alcance  
   1.3 Definiciones  
   1.4 Organización  

2. OBJETIVOS Y RESTRICCIONES  
   2.1 Requerimientos  
   2.2 Restricciones  

3. REPRESENTACIÓN DE LA ARQUITECTURA  
   3.1 Casos de Uso  
   3.2 Vista Lógica  
   3.3 Desarrollo  
   3.4 Procesos  
   3.5 Despliegue  

4. ATRIBUTOS DE CALIDAD  

---

# 1. INTRODUCCIÓN

## 1.1 Propósito

El propósito de este documento es definir la arquitectura del sistema **DataQuest**, un sistema de validación y aprendizaje de la normalización de bases de datos relacionales.

Se emplea el modelo **4+1 de Kruchten**, adaptado a una arquitectura hexagonal.

![Modelo 4+1](https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/4%2B1_Architectural_View_Model.svg/1200px-4%2B1_Architectural_View_Model.svg.png)

---

## 1.2 Alcance

Este documento cubre:

- Arquitectura hexagonal en backend  
- Uso de Laravel (MVC)  
- Comunicación con frontend React  
- Persistencia en MySQL  
- Conexión a bases de datos externas  

---

## 1.3 Definiciones

- **Arquitectura hexagonal:** Separación entre dominio y tecnología  
- **Puerto:** Interfaz del sistema  
- **Adaptador:** Implementación técnica  
- **MVC:** Modelo Vista Controlador  
- **VPS:** Servidor virtual privado  
- **Vercel:** Plataforma de despliegue  

---

## 1.4 Organización

El documento se divide en:

- Introducción  
- Arquitectura  
- Calidad  

---

# 2. OBJETIVOS Y RESTRICCIONES

## 2.1 Priorización de requerimientos

### Funcionales

| ID | Requerimiento |
|----|--------------|
| RF-01 | Validar dependencias funcionales |
| RF-02 | Determinar nivel de normalización |
| RF-04 | Generar diagrama ER |
| RF-10 | Mensajes referenciales |
| RF-11 | Panel de administración |
| RF-17 | Ingreso por texto |
| RF-18 | Subida de archivos |
| RF-20 | Generación automática |

---

### No funcionales

| ID | Requerimiento |
|----|--------------|
| RNF-01 | Rendimiento |
| RNF-02 | Usabilidad |
| RNF-03 | Disponibilidad |
| RNF-05 | Seguridad |
| RNF-09 | Seguridad BD externa |

---

## 2.2 Restricciones

- Backend: Laravel  
- Frontend: React  
- Base de datos: MySQL  
- Despliegue: Vercel + VPS  
- Tiempo: 3 meses  

---

# 3. REPRESENTACIÓN DE LA ARQUITECTURA

## 3.1 Vista de Casos de Uso

![Use Case](https://www.visual-paradigm.com/servlet/editor-content/uml-diagrams/use-case-diagram-example.png)

---

## 3.2 Vista Lógica

### 3.2.1 Subsistemas

![Arquitectura Hexagonal](https://miro.medium.com/v2/resize:fit:1400/1*Z8F9S2z9n1tFoZT3zh7Tqg.png)

---

### 3.2.2 Secuencia

![Secuencia](https://www.visual-paradigm.com/servlet/editor-content/uml-diagrams/sequence-diagram-example.png)

---

### 3.2.3 Clases

![Clases](https://www.visual-paradigm.com/servlet/editor-content/uml-diagrams/class-diagram-example.png)

---

### 3.2.4 Base de Datos

![Modelo Relacional](https://www.guru99.com/images/1/022218_0604_DatabaseNor2.png)

---

## 3.3 Vista de Desarrollo

### 3.3.1 Componentes

![Componentes](https://miro.medium.com/v2/resize:fit:1400/1*YJvG7n2AFDzy83H8XTur2Q.png)

---

### 3.3.2 Paquetes

![Paquetes](https://www.visual-paradigm.com/servlet/editor-content/uml-diagrams/package-diagram-example.png)

---

## 3.4 Vista de Procesos

![Flujo](https://www.visual-paradigm.com/servlet/editor-content/uml-diagrams/activity-diagram-example.png)

---

## 3.5 Vista de Despliegue

![Deployment](https://www.visual-paradigm.com/servlet/editor-content/uml-diagrams/deployment-diagram-example.png)

---

# 4. ATRIBUTOS DE CALIDAD

## Funcionalidad

- Validación correcta de esquemas  
- Precisión ≥ 95%  

---

## Usabilidad

- Usuario nuevo sin experiencia  
- Tiempo de uso < 5 minutos  

---

## Seguridad

- Autenticación segura  
- Bloqueo tras 5 intentos  

---

## Rendimiento

- 50 usuarios concurrentes  
- Tiempo de respuesta < 2 segundos  

---

## Mantenibilidad

- Nuevas funciones sin afectar el núcleo  
- Tiempo de implementación < 10 horas  

---
