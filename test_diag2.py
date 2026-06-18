from core.parser import parse_schema
from core.diagnostico import diagnosticar_esquema

sql = """
CREATE TABLE test (
  id INT PRIMARY KEY,
  telefono1 VARCHAR,
  telefono2 VARCHAR
);
"""

schema = parse_schema(sql, 'sql', '')
diag = diagnosticar_esquema(schema)
print("Violaciones 1FN:", len(diag["violaciones_1fn"]))
print("Violaciones 2FN:", len(diag["violaciones_2fn"]))
print("Violaciones 3FN:", len(diag["violaciones_3fn"]))
print("Nivel:", diag["nivel_actual"])
