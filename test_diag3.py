from core.parser import parse_schema
from core.diagnostico import diagnosticar_esquema

sql = """
CREATE TABLE cliente (
  codigo INT,
  nombre VARCHAR,
  telefono1 VARCHAR,
  telefono2 VARCHAR,
  ciudad_origen VARCHAR,
  ciudad_codigo VARCHAR,
  departamento VARCHAR,
  departamento_jefe VARCHAR,
  col1 VARCHAR,
  col2 VARCHAR,
  col3 VARCHAR
);
"""

schema = parse_schema(sql, 'sql', '')
diag = diagnosticar_esquema(schema)
print("Nivel:", diag["nivel_actual"])
print("Violaciones 1FN:", len(diag["violaciones_1fn"]))
print("Violaciones 2FN:", len(diag["violaciones_2fn"]))
print("Violaciones 3FN:", len(diag["violaciones_3fn"]))
for v in diag["violaciones_1fn"]: print("-", v["mensaje"])
for v in diag["violaciones_3fn"]: print("-", v["mensaje"])
