# FD01 - Informe de Factibilidad

## DataQuest: Sistema de Validación de Normalización de Base de Datos Relacionales

**Curso:** Base de Datos II  
**Docente:** Mag. Patrick Cuadros Quiroga  
**Integrantes:**  
- Manuel Andree Dongo Plaza (2023076842)  
- Fabrizio Salvador Elias Perez Peralta (2023077476)  

**Tacna – Perú**  
**2026**

---

## Control de Versiones

| Versión | Hecha por | Revisada por | Aprobada por | Fecha | Motivo |
|---------|-----------|--------------|--------------|-------|--------|
| 1.0 | FSEPP, MADP | — | — | 01/05/2026 | Versión Original |

---

## Índice General

1. [Descripción del Proyecto](#1-descripción-del-proyecto)  
2. [Riesgos](#2-riesgos)  
3. [Análisis de la Situación Actual](#3-análisis-de-la-situación-actual)  
4. [Estudio de Factibilidad](#4-estudio-de-factibilidad)  
5. [Análisis Financiero](#5-análisis-financiero)  
6. [Conclusiones](#6-conclusiones)  

---

## 1. Descripción del Proyecto

### 1.1 Nombre del proyecto
DataQuest: Sistema de Validación de Normalización de Base de Datos Relacionales.

### 1.2 Duración del proyecto
- Fecha de Inicio: 21 de marzo de 2026  
- Fecha de Fin: 30 de junio de 2026  
- Duración Total: 3 meses.

### 1.3 Descripción
El proyecto DataQuest es una plataforma web educativa interactiva enfocada en la enseñanza y validación de la normalización de bases de datos relacionales. La solución integrará un validador automático de dependencias funcionales y formas normales (1FN, 2FN, 3FN, BCNF) con un visualizador de esquemas interactivo usando React Flow, además de módulos de puzzles de aprendizaje y retos semanales. El sistema permitirá al usuario ingresar tablas y dependencias funcionales, y visualizar en tiempo real el nivel de normalización alcanzado, detectando violaciones (dependencias parciales, transitivas o determinantes no llave) mediante una interfaz clara. Esto permitirá a estudiantes y profesionales optimizar su proceso de aprendizaje, identificar errores comunes y aplicar buenas prácticas en el diseño de bases de datos, abordando desafíos como la falta de retroalimentación inmediata y la dificultad para visualizar relaciones complejas entre atributos.

### 1.4 Objetivos

#### 1.4.1 Objetivo general
Validar y corregir esquemas relacionales mediante un entorno interactivo que garantiza la correcta normalización de las bases de datos, eliminando la redundancia de datos y optimizando la relación de datos a través de una experiencia de usuario orientada al autoaprendizaje.

#### 1.4.2 Objetivos Específicos
- **OE1:** Validar automáticamente dependencias funcionales y formas normales. Implementar un motor de validación que calcule el cierre de atributos, identifique claves candidatas y determine el nivel de normalización (1FN, 2FN, 3FN, BCNF), señalando violaciones específicas.
- **OE2:** Visualizar esquemas de base de datos de forma gráfica mediante diagramas entidad-relación interactivos.
- **OE3:** Crear puzzles de aprendizaje secuenciales con retroalimentación inmediata, pistas progresivas y puntuación.
- **OE4:** Implementar retos semanales con ranking y gamificación (medallas, puntos).
- **OE5:** Proveer retroalimentación detallada y personalizada ante errores comunes.
- **OE6:** Facilitar el seguimiento del progreso a instructores o administradores (panel de control).

---

## 2. Riesgos

| Riesgo | Probabilidad | Impacto | Estrategia de Mitigación |
|--------|--------------|---------|---------------------------|
| Complejidad algorítmica para validar correctamente formas normales y dependencias funcionales | Media | Alto | Investigar algoritmos probados (cierre de atributos, Bernstein). Pruebas exhaustivas con casos conocidos. |
| Baja adopción por parte de usuarios por interfaz poco intuitiva o falta de motivación | Media | Medio | Incorporar gamificación (medallas, niveles, rankings). Diseñar tutoriales interactivos. Pruebas piloto. |
| Dependencia de librerías externas no mantenidas (ej. react-flow) | Baja | Medio | Evaluar estado (commits, issues). Plan de contingencia con librería alternativa (dagre-d3, vis-network). |
| Rendimiento del algoritmo con esquemas grandes (>20 atributos) | Media | Medio | Optimizar con estructuras eficientes (conjuntos, caché). Procesamiento asíncrono con indicadores de carga. |

---

## 3. Análisis de la Situación Actual

### 3.1 Planteamiento del problema
En el ámbito académico y de capacitación profesional, los estudiantes y profesionales de TI presentan dificultades recurrentes para identificar dependencias funcionales, aplicar formas normales y diseñar esquemas sin redundancias. Actualmente, la práctica se realiza con ejercicios en papel o documentos sin validación automática. La retroalimentación es manual, tardía y genérica. Esto alarga la curva de aprendizaje, consolida errores y desmotiva a los alumnos. DataQuest surge como solución integral que automatiza la validación, ofrece retroalimentación inmediata, visualiza esquemas y gamifica el aprendizaje.

### 3.2 Consideraciones de hardware y software
- **Hardware existente:** Computadoras de escritorio y laptops de los desarrolladores (para codificación, pruebas, documentación).
- **Hardware/Software propuesto:**  
  - VPS (Servidor Virtual Privado) para alojar la base de datos MySQL.  
  - Vercel como plataforma para alojar la aplicación web (frontend React y backend PHP).

---

## 4. Estudio de Factibilidad

A continuación se detalla el estudio de factibilidad para determinar la viabilidad de DataQuest.

### 4.1 Factibilidad Técnica
La factibilidad técnica es **ALTA**. El equipo de desarrollo cuenta con conocimientos en PHP (Laravel), React, algoritmos de normalización y conectividad a bases de datos. Las tecnologías son de código abierto y la infraestructura (VPS, Vercel) es accesible y escalable.

**Tecnologías seleccionadas:**
- Backend: PHP con framework Laravel.
- Base de Datos: MySQL.
- Frontend y visualizador: React con librería react-flow.
- Servidor para BD: VPS con Debian, 4 Cores, 8 GB RAM, 160 GB NVMe.
- Alojamiento web: Vercel.

### 4.2 Factibilidad Económica
El análisis económico se centra en los costos que el equipo debe cubrir con el pago único por el desarrollo. Es **VIABLE** si se ajusta al presupuesto de costos fijos.

#### 4.2.1 Costos Generales
| Concepto | Descripción | Costo mensual (S/) | Tiempo | Costo total (S/) |
|----------|-------------|--------------------|--------|------------------|
| Materiales de oficina | Insumos para elaboración de documentos | 35.00 | 3 meses | 105.00 |
| **Total costos generales** | | **35.00** | **3 meses** | **105.00** |

#### 4.2.2 Costos Operativos durante el desarrollo
| Recurso | Tipo | Uso | Costo mensual (S/) | Tiempo | Costo total (S/) |
|---------|------|-----|--------------------|--------|------------------|
| Internet de banda ancha | Servicio | Comunicación, pruebas, entregables | 110.00 | 3 meses | 330.00 |
| Energía eléctrica | Servicio | Funcionamiento de equipos | 100.00 | 3 meses | 300.00 |
| **Total** | | | **210.00** | | **630.00** |

#### 4.2.3 Costos del Ambiente
| Recurso | Tipo | Uso | Costo mensual (S/) | Tiempo | Costo total (S/) |
|---------|------|-----|--------------------|--------|------------------|
| VPS (4 Cores, 8 GB RAM, 160 GB NVMe) | Servicio cloud | Servidor virtual | 65.00 | 3 meses | 195.00 |
| **Total** | | | **65.00** | | **195.00** |

#### 4.2.4 Costos de Personal
| Rol | Responsable | Función principal | Tiempo | Costo mensual (S/) | Costo total (S/) |
|-----|-------------|-------------------|--------|--------------------|------------------|
| Gestor de proyecto / Desarrollador | Fabrizio Perez | Planificación, análisis, backend, algoritmos | 3 meses | 1,800.00 | 5,400.00 |
| Desarrollador / Documentador | Manuel Dongo | Frontend, visualizador, pruebas, documentación | 3 meses | 1,800.00 | 5,400.00 |
| **Total** | | | | | **10,800.00** |

#### 4.2.5 Costos Totales del Desarrollo
| Concepto | Monto (S/) |
|----------|------------|
| Costos generales | 105.00 |
| Costos operativos | 630.00 |
| Costos del ambiente | 195.00 |
| Costos de personal | 10,800.00 |
| **COSTO TOTAL** | **11,730.00** |

### 4.3 Factibilidad Operativa
DataQuest es operativamente viable. Cualquier persona con conocimientos básicos de navegación web puede usarlo sin instalación previa. El sistema incluye **mensajes referenciales** (tooltips, ayudas contextuales) que guían a los usuarios, especialmente a los nuevos. La plataforma reduce drásticamente los tiempos de retroalimentación, elimina el consumo de papel y está disponible 24/7.

**Interesados:**
- Usuarios finales (estudiantes, profesionales, autodidactas): beneficiarios directos.
- Equipo de desarrollo: mantenimiento y mejoras.
- Comunidad de desarrolladores: contribuciones.

### 4.4 Factibilidad Legal
El proyecto es legalmente factible y se adhiere a las normativas peruanas vigentes.

- **Protección de Datos Personales:** Solo recopila nombre, correo y progreso. Cumple con Ley N.º 29733.
- **Software y Licencias:** Todo es código abierto (PHP, Laravel, React, MySQL, react-flow) con licencias MIT, GPL, BSD.
- **Propiedad Intelectual:** El equipo es titular de los derechos. Se optará por licencia MIT o GPL para distribución libre.
- **Conducta de Negocio:** No hay violación de libre competencia; costos transparentes y documentados.

### 4.5 Factibilidad Social
DataQuest tiene impacto social positivo. Democratiza el aprendizaje de la normalización, ofreciendo una herramienta gratuita y accesible. La gamificación y los mensajes referenciales motivan a los usuarios. No se generan conflictos éticos y se fomenta la superación personal.

### 4.6 Factibilidad Ambiental
Impacto ambiental positivo: reduce drásticamente el consumo de papel, tinta y tóner (más de 6,000 hojas al año en una base de 200 usuarios). La infraestructura en la nube centraliza el consumo energético eficientemente, eliminando transporte de materiales impresos. No genera residuos electrónicos adicionales.

---

## 5. Análisis Financiero

El análisis se realiza desde la perspectiva de una institución educativa o centro de capacitación que invierte en DataQuest. El costo total de desarrollo es S/ 11,730.00.

### 5.1 Justificación de la Inversión

Para construir el flujo de caja proyectado, se cuantifican beneficios tangibles y ahorros. Los beneficios se materializan a partir del Año 1 (2027).

#### 5.1.1 Beneficios del Proyecto

**Beneficios tangibles anuales:**

| Concepto | Cálculo | Ahorro anual (S/) |
|----------|---------|------------------|
| Ahorro en material de impresión | 12,000 hojas/año × S/0.15 × 90% = S/1,620 | 1,620 |
| Ahorro por mejora en productividad de estudiantes | 200 estudiantes × S/45 = S/9,000 | 9,000 |
| **Beneficio tangible total anual** | | **10,620** |

**Beneficios intangibles:**
- Mejora en calidad del aprendizaje.
- Mayor motivación con gamificación.
- Reducción de carga administrativa de docentes.
- Posicionamiento institucional innovador.
- Cumplimiento de políticas de "cero papel".

#### 5.1.2 Criterios de Inversión
- **COK:** 10% anual.
- **Horizonte:** 3 años.
- **Inversión inicial (Año 0):** S/ 11,730.00

**Flujo de caja neto:**  
| Año | 0 | 1 | 2 | 3 |
|-----|---|---|---|---|
| Flujo | -11,730 | 10,620 | 10,620 | 10,620 |

**Relación Beneficio/Costo (B/C)**  
- VP beneficios = 10,620/(1.10) + 10,620/(1.10)^2 + 10,620/(1.10)^3 = 26,410.37  
- B/C = 26,410.37 / 11,730 = **2.25** (>1, aceptable).

**Valor Actual Neto (VAN)**  
VAN = -11,730 + 26,410.37 = **S/ 14,680.37** (positivo).

**Tasa Interna de Retorno (TIR)**  
TIR ≈ **34%** (superior al 10% de COK).

**Conclusión del análisis financiero:** La inversión es altamente rentable.

---

## 6. Conclusiones

- **Factibilidad técnica:** Alta – tecnologías adecuadas y equipo capacitado.
- **Factibilidad económica:** Viable – costo total S/ 11,730.00, con margen razonable.
- **Factibilidad operativa:** Viable – interfaz con mensajes referenciales, disponible 24/7.
- **Factibilidad legal:** Cumple normativas, software libre y protección de datos.
- **Factibilidad social:** Positiva – herramienta gratuita y accesible.
- **Factibilidad ambiental:** Positiva – reducción de papel y eficiencia energética.

**Recomendación final:** Aprobar el desarrollo de DataQuest con inicio el 21 de marzo de 2026 y finalización el 30 de junio de 2026.

---

**Elaborado por:**  
- Manuel Andree Dongo Plaza  
- Fabrizio Salvador Elias Perez Peralta  

**Fecha:** 01 de mayo de 2026
