from db.conexion import get_supabase_client

def get_dashboard_metrics(user_id):
    """
    Obtiene las métricas principales para el dashboard del usuario actual.
    """
    try:
        supabase = get_supabase_client()
        
        # 1. Total validaciones realizadas
        res_val = supabase.table("historial_validaciones").select("id", count="exact").eq("user_id", user_id).execute()
        total_validaciones = res_val.count if res_val.count else 0
        
        # 2. Total tablas analizadas (aproximación sumando las tablas del esquema_original)
        res_tablas = supabase.table("historial_validaciones").select("esquema_original").eq("user_id", user_id).execute()
        total_tablas = 0
        for row in res_tablas.data:
            if row.get("esquema_original") and "tablas" in row["esquema_original"]:
                total_tablas += len(row["esquema_original"]["tablas"])
                
        # 3. Reportes / Errores encontrados (sumando violaciones)
        res_viol = supabase.table("historial_validaciones").select("violaciones").eq("user_id", user_id).execute()
        total_reportes = 0
        for row in res_viol.data:
            if row.get("violaciones") and "lista" in row["violaciones"]:
                total_reportes += len(row["violaciones"]["lista"])
                
        # 4. Usuarios online ahora
        res_online = supabase.table("presencia").select("id", count="exact").execute()
        online_ahora = res_online.count if res_online.count else 1
        
        return {
            "validaciones": total_validaciones,
            "tablas_analizadas": total_tablas,
            "reportes_generados": total_reportes,
            "online": online_ahora
        }
    except Exception as e:
        print(f"Error obteniendo métricas del dashboard: {e}")
        return {
            "validaciones": 0,
            "tablas_analizadas": 0,
            "reportes_generados": 0,
            "online": 1
        }

def get_ultimos_escaneos(user_id, limit=5):
    """
    Obtiene las validaciones más recientes para la tabla del dashboard.
    """
    try:
        supabase = get_supabase_client()
        res = supabase.table("historial_validaciones").select("*").eq("user_id", user_id).order("fecha", desc=True).limit(limit).execute()
        return res.data
    except Exception as e:
        print(f"Error obteniendo últimos escaneos: {e}")
        return []
