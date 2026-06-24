import os
from dotenv import load_dotenv
load_dotenv(override=True)

from db.conexion import get_supabase_client

supabase = get_supabase_client()
res = supabase.table("historial_validaciones").select("user_id, nivel_inicial, nivel_final").execute()
datos = res.data
print("Rows fetched:", len(datos))
if len(datos) > 0:
    print("Sample:", datos[0])
