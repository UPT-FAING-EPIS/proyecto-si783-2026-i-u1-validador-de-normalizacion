import os
from dotenv import load_dotenv
load_dotenv(override=True)

from db.conexion import get_supabase_client

supabase = get_supabase_client()
res = supabase.table("historial_validaciones").select("id", count="exact").execute()
print("Count via supabase client:", res.count)
