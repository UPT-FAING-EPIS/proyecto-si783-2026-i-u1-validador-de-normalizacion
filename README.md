# 🗃️ Validador de Normalización de Bases de Datos Relacionales

![Estado](https://img.shields.io/badge/Estado-En%20Planificaci%C3%B3n-lightgrey)
![Python](https://img.shields.io/badge/Python-3.10%2B-blue?logo=python)
![Streamlit](https://img.shields.io/badge/Streamlit-Frontend-FF4B4B?logo=streamlit)
![PostgreSQL](https://img.shields.io/badge/PostgreSQL-16-336791?logo=postgresql)
![Supabase](https://img.shields.io/badge/Supabase-Backend-3ECF8E?logo=supabase)
![Licencia](https://img.shields.io/badge/Licencia-MIT-green)

Aplicación web en Python con Streamlit para analizar esquemas de bases de datos relacionales en **PostgreSQL** (gestionado con **Supabase**), detectar violaciones a las formas normales y sugerir mejoras estructurales de forma automática. Soporta entrada de esquemas mediante archivos (`.txt`, `.csv`, `.xls`, `.sql`) o pegado directo de código SQL. El análisis se realiza **únicamente mediante algoritmos** de normalización, sin inteligencia artificial. Incluye sistema de autenticación de usuarios y panel de comunidad en tiempo real.

---

## 📋 Tabla de Contenidos

- [Descripción](#-descripción)
- [Stack Tecnológico](#-stack-tecnológico)
- [Arquitectura MVC](#-arquitectura-mvc)
- [Características](#-características)
- [Autenticación y Comunidad](#-autenticación-y-comunidad)
- [Entrada de Esquemas](#-entrada-de-esquemas)
- [Motor de Análisis y Normalización](#-motor-de-análisis-y-normalización)
- [Visualización de Diagramas](#-visualización-de-diagramas)
- [Historial de Validaciones](#-historial-de-validaciones)
- [Requisitos](#-requisitos)
- [Uso](#-uso)
- [Estructura del Proyecto](#-estructura-del-proyecto)
- [Formas Normales Soportadas](#-formas-normales-soportadas)
- [Roadmap](#-roadmap)
- [Licencia](#-licencia)

---

## 📖 Descripción

El **Validador de Normalización de Bases de Datos Relacionales** permite a estudiantes, desarrolladores y administradores de bases de datos verificar si un esquema cumple con las reglas de normalización (1FN, 2FN, 3FN), detectar dependencias funcionales problemáticas y obtener sugerencias concretas para corregir la estructura de sus tablas, todo desde una interfaz web interactiva construida con Streamlit.

Los usuarios pueden crear una cuenta, iniciar sesión y acceder a un panel de comunidad donde se visualizan en tiempo real los usuarios conectados al sistema.

---

## 🛠️ Stack Tecnológico

| Capa | Tecnología | Rol |
|---|---|---|
| Lenguaje | Python 3.10+ | Lógica principal del validador |
| Interfaz web | Streamlit | Vista interactiva (formularios, resultados, diagramas) |
| Base de datos | PostgreSQL 16 | Almacenamiento de esquemas, resultados y usuarios |
| Backend as a Service | Supabase | Hosting de la BD, autenticación, Realtime y API REST |
| Cliente BD | `psycopg2` / `supabase-py` | Conexión y consultas a PostgreSQL |
| Autenticación | Supabase Auth | Registro, login y gestión de sesiones de usuario |
| Tiempo real | Supabase Realtime | Presencia de usuarios conectados en vivo |
| Visualización | Graphviz / NetworkX | Generación de diagramas ER |

### ¿Por qué Streamlit?

Streamlit permite construir interfaces web interactivas usando solo Python, sin necesidad de escribir HTML, CSS ni JavaScript. Esto mantiene todo el proyecto en un único lenguaje y acelera el desarrollo significativamente. Cada widget (formularios, tablas, gráficos) se define con una línea de código Python.

### ¿Por qué Supabase Auth + Realtime?

- **Supabase Auth** gestiona el registro y login de usuarios con correo y contraseña de forma segura, sin necesidad de construir un sistema de autenticación propio. Los usuarios quedan almacenados en la tabla `auth.users` de PostgreSQL automáticamente.
- **Supabase Realtime** permite suscribirse a canales en tiempo real usando WebSockets. Se usa para detectar qué usuarios están conectados actualmente y refrescar el panel de comunidad de forma automática sin recargar la página.

### ¿Por qué PostgreSQL + Supabase?

- **PostgreSQL** permite consultar el catálogo del sistema (`information_schema`, `pg_catalog`) para extraer automáticamente tablas, columnas, claves primarias y foráneas del esquema real.
- **Supabase** proporciona un entorno gestionado de PostgreSQL con panel visual, API REST automática y acceso seguro mediante claves de API, sin necesidad de administrar un servidor propio.

---

## 🏗️ Arquitectura MVC

El proyecto sigue el patrón **Modelo-Vista-Controlador (MVC)**, adaptado al ecosistema Python + Streamlit:

```
┌──────────────────────────────────────────────────────────────────────┐
│                              VISTA                                   │
│                   Streamlit (app.py / pages/)                        │
│  Registro · Login · Validador · Resultados · Comunidad · Historial   │
└──────────────────────────┬───────────────────────────────────────────┘
                           │  llama a
                           ▼
┌──────────────────────────────────────────────────────────────────────┐
│                          CONTROLADOR                                 │
│                        controllers/                                  │
│   Orquesta el flujo: recibe entrada → llama modelos                  │
│   Gestiona sesión de usuario · Prepara datos para la vista           │
└──────────┬───────────────────────────────┬───────────────────────────┘
           │ usa                           │ usa
           ▼                               ▼
┌──────────────────────┐   ┌──────────────────────────────────────────┐
│   MODELO (lógica)    │   │            MODELO (datos)                │
│        core/         │   │                 db/                      │
│  Parser · DF         │   │  Supabase Auth   → registro / login      │
│  Validadores 1/2/3FN │   │  Supabase Realtime → comunidad en vivo   │
│  Sugerencias         │   │  PostgreSQL      → esquemas / resultados  │
└──────────────────────┘   └──────────────────────────────────────────┘
```

| Componente | Responsabilidad |
|---|---|
| Vista (`app.py`, `pages/`) | Renderiza la UI con Streamlit; no contiene lógica de negocio |
| Controlador (`controllers/`) | Orquesta el flujo entre la Vista y el Modelo; gestiona sesión |
| Modelo lógico (`core/`) | Parser, validadores, motor de dependencias, sugerencias |
| Modelo de datos (`db/`) | Supabase Auth (usuarios), Realtime (presencia), PostgreSQL (datos) |

---

## ✨ Características

| Funcionalidad | Descripción | Estado |
|---|---|---|
| 👤 Registro de usuarios | Creación de cuenta con correo y contraseña vía Supabase Auth | 📋 Pendiente |
| 🔐 Login de usuarios | Autenticación segura con sesión persistente en Streamlit | 📋 Pendiente |
| 🌐 Panel de comunidad | Muestra usuarios conectados en tiempo real con Supabase Realtime | 📋 Pendiente |
| 📂 Carga de esquemas | Entrada vía archivos `.txt`, `.csv`, `.xls`, `.sql` o pegado directo de SQL | 📋 Pendiente |
| 🔎 Diagnóstico de normalización | Determina automáticamente si el esquema está normalizado y hasta qué nivel | 📋 Pendiente |
| 🎯 Selección de nivel objetivo | El usuario elige hasta qué forma normal desea normalizar (1FN, 2FN o 3FN) | 📋 Pendiente |
| ✅ Validación de 1FN | Detecta atributos multivaluados y grupos repetitivos | 📋 Pendiente |
| ✅ Validación de 2FN | Identifica dependencias parciales respecto a la clave primaria | 📋 Pendiente |
| ✅ Validación de 3FN | Detecta dependencias transitivas entre atributos no clave | 📋 Pendiente |
| 🔍 Detección de dependencias funcionales | Análisis automático mediante algoritmos (sin IA) | 📋 Pendiente |
| 💡 Sugerencias de corrección | El usuario elige cuáles sugerencias aplicar; el esquema se actualiza en tiempo real | 📋 Pendiente |
| 📜 Historial de validaciones | Guarda todas las consultas realizadas por el usuario con fecha, esquema analizado, nivel alcanzado y sugerencias aplicadas | 📋 Pendiente |

---

## 🔐 Autenticación y Comunidad

### Registro de usuarios

El sistema permite crear una cuenta nueva con correo electrónico y contraseña. Los datos del usuario se guardan directamente en Supabase Auth (`auth.users`) y se crea automáticamente un perfil público en la tabla `perfiles` de PostgreSQL.

**Flujo de registro:**
```
Usuario ingresa correo + contraseña
        ↓
Supabase Auth crea la cuenta
        ↓
Se inserta perfil en tabla `perfiles` (nombre, avatar, fecha de registro)
        ↓
Redirige al validador principal
```

### Login de usuarios

La autenticación se realiza vía Supabase Auth con correo y contraseña. La sesión del usuario se mantiene activa en `st.session_state` de Streamlit durante toda la navegación.

**Flujo de login:**
```
Usuario ingresa credenciales
        ↓
Supabase verifica y devuelve token JWT
        ↓
Token guardado en st.session_state
        ↓
Acceso habilitado a las páginas protegidas
```

> Las páginas de validación e historial solo son accesibles si el usuario tiene sesión activa. Sin sesión, redirige automáticamente al login.

### Panel de comunidad en tiempo real

La página de comunidad muestra los usuarios que están conectados al sistema en ese momento, actualizándose automáticamente sin necesidad de recargar la página.

**Cómo funciona:**

- Al ingresar al sistema, el usuario se registra en el canal de presencia de **Supabase Realtime**.
- El canal emite eventos cuando alguien se conecta o desconecta.
- Streamlit usa `streamlit-autorefresh` para refrescar el panel cada pocos segundos y mostrar la lista actualizada.
- Al cerrar sesión o cerrar la pestaña, el usuario desaparece automáticamente del panel.

```
Usuario conectado → join en canal Realtime
        ↓
Evento broadcast a todos los suscriptores
        ↓
Panel de comunidad se actualiza (autorefresh)
        ↓
Se muestra: nombre, avatar y hora de conexión
```

---

## 📂 Entrada de Esquemas

El sistema acepta esquemas de base de datos de dos formas:

### Carga de archivos

| Formato | Descripción |
|---|---|
| `.sql` | Sentencias `CREATE TABLE` directas — el parser extrae tablas, columnas y restricciones automáticamente |
| `.txt` | Definición de esquema en texto plano con formato estructurado |
| `.csv` | Tabla con columnas: `tabla`, `columna`, `tipo`, `pk`, `fk` |
| `.xls` / `.xlsx` | Mismo formato que CSV pero en hoja de cálculo Excel |

### Pegado directo de SQL

El usuario puede pegar directamente sentencias SQL en un área de texto dentro de la interfaz:

```sql
CREATE TABLE Pedidos (
    id_pedido    INT,
    id_cliente   INT,
    nombre_cliente VARCHAR(100),
    id_producto  INT,
    nombre_producto VARCHAR(100),
    ciudad_cliente VARCHAR(50),
    cantidad     INT,
    PRIMARY KEY (id_pedido, id_producto)
);
```

El parser procesa ambas vías de la misma forma y genera la representación interna del esquema para el motor de análisis.

---

## 🔬 Motor de Análisis y Normalización

> **Importante:** Todo el análisis se realiza mediante **algoritmos clásicos de normalización**. No se utiliza inteligencia artificial ni modelos de lenguaje.

### Flujo completo del validador

```
Entrada (archivo o SQL pegado)
        ↓
    [ PARSER ]
    Extrae tablas, columnas, PKs, FKs
        ↓
    [ MOTOR DE DEPENDENCIAS FUNCIONALES ]
    Calcula clausuras, identifica DFs
        ↓
    [ DIAGNÓSTICO INICIAL ]
    ¿Está normalizado? ¿Hasta qué nivel cumple?
        ↓
    Se muestra: ✅ Nivel actual alcanzado (1FN / 2FN / 3FN / Sin normalizar)
        ↓
    [ SELECCIÓN DE NIVEL OBJETIVO ]
    El usuario elige: ¿hasta qué FN desea normalizar?
        ↓
    [ VALIDADORES 1FN → 2FN → 3FN ]
    Detectan violaciones específicas por nivel
        ↓
    [ SUGERENCIAS DE CORRECCIÓN ]
    Lista de acciones concretas (el usuario elige cuáles aplicar)
        ↓
    [ DIAGRAMA ACTUALIZADO EN TIEMPO REAL ]
    El diagrama ER y el schema de tablas se refrescan con cada cambio
```

### Diagnóstico inicial

Antes de cualquier acción, el sistema muestra un resumen del estado de normalización del esquema:

```
📋 Diagnóstico del esquema: Pedidos
─────────────────────────────────────────────
❌ 1FN: No cumple — atributo multivaluado detectado en 'telefonos'
❌ 2FN: No cumple — dependencias parciales encontradas
❌ 3FN: No cumple — dependencias transitivas encontradas

→ Nivel actual: Sin normalizar
→ ¿Hasta qué nivel deseas normalizar? [ 1FN ] [ 2FN ] [ 3FN ]
```

### Selección del nivel objetivo

El usuario selecciona el nivel de normalización deseado mediante botones en la interfaz. El sistema aplica los validadores y sugerencias únicamente hasta ese nivel, sin avanzar más.

### Sugerencias interactivas

Las sugerencias se presentan como una lista de acciones que el usuario puede aplicar individualmente:

```
💡 Sugerencias para alcanzar 2FN:

[ ✔ Aplicar ]  Crear tabla Clientes(id_cliente, nombre_cliente, ciudad_cliente)
               → Elimina dependencia parcial de 'nombre_cliente' y 'ciudad_cliente'

[ ✔ Aplicar ]  Crear tabla Productos(id_producto, nombre_producto)
               → Elimina dependencia parcial de 'nombre_producto'

[ ✔ Aplicar ]  Redefinir Pedidos(id_pedido, id_cliente, id_producto, cantidad)
               → Tabla resultante tras extraer las dependencias parciales
```

Cada vez que el usuario aplica una sugerencia, el diagrama ER y el schema de tablas se actualizan automáticamente para reflejar el nuevo estado del esquema.

---

## 📊 Visualización de Diagramas

El sistema genera dos vistas complementarias del esquema:

### Vista 1 — Diagrama ER clásico

Muestra entidades, atributos y relaciones con sus cardinalidades (1:N, N:M, etc.), generado con **Graphviz**.

### Vista 2 — Schema de tablas

Muestra las tablas con sus columnas, tipos de datos, claves primarias (🔑) y foráneas (🔗), estilo visual de base de datos.

```
┌─────────────────────┐         ┌──────────────────────┐
│      Clientes       │         │       Pedidos         │
├─────────────────────┤         ├──────────────────────┤
│ 🔑 id_cliente  INT  │◄────────│ 🔗 id_cliente   INT  │
│    nombre  VARCHAR  │         │ 🔑 id_pedido    INT  │
│    ciudad  VARCHAR  │         │ 🔗 id_producto  INT  │
└─────────────────────┘         │    cantidad     INT  │
                                └──────────────────────┘
```

Ambas vistas se actualizan en tiempo real cada vez que el usuario aplica una sugerencia de corrección.

---

## 📜 Historial de Validaciones

Cada usuario autenticado tiene acceso a su propio historial de validaciones, donde se registra automáticamente cada análisis realizado en el sistema.

### ¿Qué se guarda?

| Campo | Descripción |
|---|---|
| Fecha y hora | Timestamp de cuándo se realizó el análisis |
| Nombre del esquema | Nombre de la base de datos o archivo analizado |
| Formato de entrada | `.sql`, `.csv`, `.xls`, `.txt` o SQL pegado |
| Nivel inicial detectado | Nivel de normalización que tenía el esquema al ingresar |
| Nivel objetivo elegido | Hasta qué FN decidió normalizar el usuario |
| Nivel final alcanzado | Nivel real tras aplicar las sugerencias seleccionadas |
| Sugerencias aplicadas | Lista de las correcciones que el usuario aceptó |
| Esquema resultante | Estado final del esquema tras la normalización |

### Vista del historial

La página `06_historial.py` muestra las validaciones anteriores del usuario ordenadas de más reciente a más antigua:

```
📜 Tu historial de validaciones
─────────────────────────────────────────────────────────────
🕐 15/06/2025 — 10:32 a.m.
   Esquema: Pedidos.sql
   Entrada: Sin normalizar  →  Objetivo: 3FN  →  Resultado: ✅ 3FN
   Sugerencias aplicadas: 3 de 3
   [ Ver detalle ] [ Volver a analizar ]

🕐 14/06/2025 — 04:15 p.m.
   Esquema: inventario.csv
   Entrada: 1FN  →  Objetivo: 2FN  →  Resultado: ✅ 2FN
   Sugerencias aplicadas: 2 de 4
   [ Ver detalle ] [ Volver a analizar ]
```

### Detalle de una validación

Al hacer clic en **Ver detalle**, se muestra el análisis completo guardado:
- Esquema original (antes de normalizar)
- Dependencias funcionales detectadas
- Violaciones encontradas por nivel
- Sugerencias presentadas y cuáles fueron aplicadas
- Esquema final resultante
- Diagrama ER del estado final

### Almacenamiento

El historial se guarda en la tabla `historial_validaciones` en PostgreSQL (Supabase). Cada registro está vinculado al `user_id` del usuario autenticado mediante RLS (Row Level Security), garantizando que cada usuario solo pueda ver sus propias validaciones.

```sql
-- Estructura de la tabla en Supabase
CREATE TABLE historial_validaciones (
    id               UUID DEFAULT gen_random_uuid() PRIMARY KEY,
    user_id          UUID REFERENCES auth.users(id) ON DELETE CASCADE,
    fecha            TIMESTAMPTZ DEFAULT now(),
    nombre_esquema   TEXT,
    formato_entrada  TEXT,
    nivel_inicial    TEXT,
    nivel_objetivo   TEXT,
    nivel_final      TEXT,
    sugerencias      JSONB,    -- sugerencias presentadas y si fueron aplicadas
    esquema_original JSONB,   -- estructura interna antes de normalizar
    esquema_final    JSONB     -- estructura interna tras normalizar
);
```

---

## ⚙️ Requisitos

- Python **3.10** o superior
- pip (gestor de paquetes de Python)
- Cuenta en [Supabase](https://supabase.com) (gratuita)

### Dependencias principales

```txt
# Interfaz web
streamlit               # Framework de la Vista
streamlit-autorefresh   # Refresco automático del panel de comunidad

# Autenticación y base de datos
psycopg2-binary         # Conexión directa a PostgreSQL
supabase                # Cliente Supabase: Auth, Realtime y base de datos

# Parsing de archivos de entrada
sqlparse                # Parseo de sentencias SQL (CREATE TABLE)
pandas                  # Lectura de archivos CSV y XLS
openpyxl                # Soporte para archivos .xlsx

# Análisis y grafos
graphviz                # Diagrama ER clásico
networkx                # Grafo de dependencias funcionales
matplotlib              # Renderizado de schema de tablas

# Utilidades
python-dotenv           # Carga de variables de entorno
```

> Las dependencias se irán actualizando en el archivo `requirements.txt` conforme avance el desarrollo.

### Variables de entorno

Crea un archivo `.env` en la raíz del proyecto con las siguientes claves de Supabase:

```env
SUPABASE_URL=https://tu-proyecto.supabase.co
SUPABASE_KEY=tu-anon-key
DATABASE_URL=postgresql://postgres:password@db.tu-proyecto.supabase.co:5432/postgres
```

> Nunca subas el archivo `.env` al repositorio. Está incluido en `.gitignore`.

---

## 🖥️ Uso

```bash
# Ejecutar la aplicación Streamlit
streamlit run app.py
```

La aplicación abrirá automáticamente en el navegador en `http://localhost:8501`.

### Flujo de uso esperado

1. El usuario crea una cuenta o inicia sesión desde la página de registro/login.
2. Una vez autenticado, accede al validador de esquemas.
3. **Carga su esquema** mediante un archivo (`.sql`, `.txt`, `.csv`, `.xls`) o pegando SQL directamente.
4. El sistema muestra el **diagnóstico inicial**: nivel de normalización actual y violaciones encontradas.
5. El usuario **elige el nivel objetivo** de normalización (1FN, 2FN o 3FN).
6. Se muestran las sugerencias de corrección; el usuario **elige cuáles aplicar** una por una.
7. El **diagrama ER y el schema de tablas** se actualizan en tiempo real con cada sugerencia aplicada.
8. Desde el panel de comunidad, puede ver quién más está conectado en ese momento.

### Ejemplo de salida esperada en la interfaz

```
🔍 Analizando tabla: Pedidos
────────────────────────────────────────
✅ 1FN: Cumple
❌ 2FN: Violación detectada
   → 'nombre_cliente' depende solo de 'id_cliente', no de la clave completa.
   → 'nombre_producto' depende solo de 'id_producto'.
❌ 3FN: Violación detectada
   → 'ciudad_cliente' depende transitivamente de 'id_cliente'.

💡 Sugerencias:
   → Crear tabla Clientes(id_cliente, nombre_cliente, ciudad_cliente)
   → Crear tabla Productos(id_producto, nombre_producto)
   → Tabla Pedidos resultante: (id_pedido, id_cliente, id_producto, cantidad)
```

---

## 📁 Estructura del Proyecto

```
validador-normalizacion/
│
├── app.py                   # Punto de entrada de Streamlit (Vista principal)
├── requirements.txt         # Dependencias del proyecto
├── README.md
│
├── pages/                   # Páginas adicionales de Streamlit
│   ├── 01_registro.py       # Formulario de creación de cuenta
│   ├── 02_login.py          # Formulario de inicio de sesión
│   ├── 03_comunidad.py      # Panel de usuarios conectados en tiempo real
│   ├── 04_validador.py      # Carga/pegado de esquema + diagnóstico inicial
│   ├── 05_resultados.py     # Sugerencias interactivas + diagramas en tiempo real
│   └── 06_historial.py      # Historial de análisis del usuario
│
├── controllers/             # Controladores (orquestación del flujo)
│   ├── auth_controller.py       # Registro, login y cierre de sesión
│   ├── comunidad_controller.py  # Presencia en tiempo real vía Realtime
│   └── validacion_controller.py # Flujo: carga → parse → análisis → sugerencias
│
├── core/                    # Modelo: lógica de negocio (solo algoritmos)
│   ├── parser.py            # Parser de SQL, CSV, TXT y XLS → estructura interna
│   ├── dependencias.py      # Algoritmos de clausura y detección de DFs
│   ├── diagnostico.py       # Determina nivel de normalización actual del esquema
│   ├── validador_1fn.py     # Algoritmo de validación Primera Forma Normal
│   ├── validador_2fn.py     # Algoritmo de validación Segunda Forma Normal
│   ├── validador_3fn.py     # Algoritmo de validación Tercera Forma Normal
│   └── corrector.py         # Genera sugerencias de corrección por nivel
│
├── db/                      # Modelo: capa de datos
│   ├── conexion.py          # Conexión a Supabase / PostgreSQL
│   ├── auth.py              # Registro y login con Supabase Auth
│   ├── realtime.py          # Suscripción al canal de presencia en tiempo real
│   ├── extractor.py         # Extrae esquemas reales desde information_schema
│   └── modelos.sql          # Tablas internas del sistema en Supabase
│
├── visualizacion/
│   ├── diagrama_er.py       # Diagrama ER clásico con Graphviz
│   └── diagrama_schema.py   # Vista de schema de tablas (columnas, PKs, FKs)
│
├── tests/
│   ├── test_parser.py
│   ├── test_1fn.py
│   ├── test_2fn.py
│   └── test_3fn.py
│
├── ejemplos/
│   ├── esquema_sin_normalizar.sql
│   ├── esquema_sin_normalizar.csv
│   └── esquema_normalizado.sql
│
├── .env.example             # Plantilla de variables de entorno
└── .gitignore               # Incluye .env y archivos sensibles
```

---

## 📐 Formas Normales Soportadas

### Primera Forma Normal (1FN)
- Todos los atributos deben ser atómicos (sin grupos repetitivos ni multivaluados).
- Cada fila debe ser única e identificable por una clave primaria.

### Segunda Forma Normal (2FN)
- Cumple con 1FN.
- Todos los atributos no clave deben depender **completamente** de la clave primaria (sin dependencias parciales).

### Tercera Forma Normal (3FN)
- Cumple con 2FN.
- No existen dependencias transitivas: ningún atributo no clave depende de otro atributo no clave.

---

## 🗺️ Roadmap

> ⚠️ El proyecto se reinicia desde cero. La arquitectura y funcionalidades están definidas; la implementación aún no ha comenzado.

- [ ] Configuración del entorno de desarrollo (Python, Streamlit, dependencias, `.env`)
- [ ] Configuración del proyecto en Supabase (tablas, Auth, Realtime, políticas RLS)
- [ ] Módulo de registro de usuarios con Supabase Auth (`db/auth.py`)
- [ ] Página de registro (`pages/01_registro.py`) con formulario en Streamlit
- [ ] Módulo de login y gestión de sesión (`auth_controller.py`)
- [ ] Página de login (`pages/02_login.py`)
- [ ] Protección de rutas: redirigir a login si no hay sesión activa
- [ ] Panel de comunidad con usuarios conectados en tiempo real (`pages/03_comunidad.py`)
- [ ] Suscripción a Supabase Realtime para presencia de usuarios (`db/realtime.py`)
- [ ] Autorefresh del panel de comunidad con `streamlit-autorefresh`
- [ ] Parser de archivos `.sql` — extracción de `CREATE TABLE` con `sqlparse`
- [ ] Parser de archivos `.csv` y `.xls` con `pandas` / `openpyxl`
- [ ] Parser de texto plano `.txt`
- [ ] Área de pegado directo de SQL en la interfaz
- [ ] Algoritmo de detección de dependencias funcionales y clausuras
- [ ] Módulo de diagnóstico inicial: nivel de normalización actual (`core/diagnostico.py`)
- [ ] Selector de nivel objetivo de normalización (1FN / 2FN / 3FN)
- [ ] Validador de 1FN
- [ ] Validador de 2FN
- [ ] Validador de 3FN
- [ ] Motor de sugerencias de corrección interactivas (el usuario elige cuáles aplicar)
- [ ] Diagrama ER clásico con Graphviz (`visualizacion/diagrama_er.py`)
- [ ] Schema de tablas visual con PKs y FKs (`visualizacion/diagrama_schema.py`)
- [ ] Actualización en tiempo real de ambos diagramas al aplicar sugerencias
- [ ] Tabla `historial_validaciones` en Supabase con RLS por usuario
- [ ] Guardado automático de cada validación al finalizar el análisis
- [ ] Página de historial: lista de validaciones anteriores del usuario (`pages/06_historial.py`)
- [ ] Vista de detalle de una validación guardada (esquema original, DFs, sugerencias, resultado)
- [ ] Botón "Volver a analizar" desde el historial
- [ ] Exportación de reportes en PDF

---

## 📄 Licencia

Este proyecto está bajo la licencia **MIT**. Consulta el archivo [LICENSE](LICENSE) para más detalles.

---

<p align="center">Desarrollado con ❤️ en Python + Streamlit</p>
