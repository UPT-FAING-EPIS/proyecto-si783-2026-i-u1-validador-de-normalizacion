from core.parser import parse_schema
from core.diagnostico import diagnosticar_esquema

sql = """
CREATE TABLE empleados (
    empleado_id INT,
    empleado_nombre VARCHAR(50),
    departamento_id INT,
    departamento_nombre VARCHAR(50)
);
"""

schema = parse_schema(sql, 'sql', '')
diag = diagnosticar_esquema(schema)
print("Violaciones 1FN:", len(diag["violaciones_1fn"]))
print("Violaciones 2FN:", len(diag["violaciones_2fn"]))
print("Violaciones 3FN:", len(diag["violaciones_3fn"]))
print("Nivel:", diag["nivel_actual"])
