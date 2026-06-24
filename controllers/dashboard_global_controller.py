from db.conexion import get_db_connection
import pandas as pd

def get_global_metrics():
    """
    Obtiene métricas globales de todas las validaciones saltando el RLS usando psycopg2.
    """
    try:
        conn = get_db_connection()
        cursor = conn.cursor()
        
        # Total validaciones
        cursor.execute("SELECT COUNT(*) FROM historial_validaciones")
        total_validaciones = cursor.fetchone()[0]
        
        # Distribución de Niveles Iniciales
        cursor.execute("""
            SELECT COALESCE(nivel_inicial, 'Desconocido'), COUNT(*) 
            FROM historial_validaciones 
            GROUP BY nivel_inicial
        """)
        niveles_iniciales = {row[0]: row[1] for row in cursor.fetchall()}
        
        # Distribución de Niveles Finales
        cursor.execute("""
            SELECT COALESCE(nivel_final, 'Pendiente'), COUNT(*) 
            FROM historial_validaciones 
            GROUP BY nivel_final
        """)
        niveles_finales = {row[0]: row[1] for row in cursor.fetchall()}
        
        # Dificultad (promedio de violaciones por validación si es posible extraerlo, o conteo)
        # We can extract the length of violaciones list if we query it, but it's JSONB.
        # Let's keep it simple: Total de usuarios únicos que han usado la herramienta
        cursor.execute("SELECT COUNT(DISTINCT user_id) FROM historial_validaciones")
        usuarios_unicos = cursor.fetchone()[0]
        
        cursor.close()
        conn.close()
        
        return {
            "total_validaciones": total_validaciones,
            "usuarios_unicos": usuarios_unicos,
            "niveles_iniciales": niveles_iniciales,
            "niveles_finales": niveles_finales
        }
    except Exception as e:
        print(f"Error obteniendo métricas globales: {e}")
        return {
            "total_validaciones": 0,
            "usuarios_unicos": 0,
            "niveles_iniciales": {},
            "niveles_finales": {}
        }

def format_data_for_charts(metricas):
    """
    Formatea la salida de get_global_metrics en DataFrames para Streamlit.
    """
    df_inicial = pd.DataFrame(list(metricas["niveles_iniciales"].items()), columns=["Nivel", "Cantidad"])
    df_final = pd.DataFrame(list(metricas["niveles_finales"].items()), columns=["Nivel", "Cantidad"])
    
    # Asegurarnos de que los niveles se vean bien
    df_inicial["Nivel"] = df_inicial["Nivel"].str.upper()
    df_final["Nivel"] = df_final["Nivel"].str.upper()
    
    return df_inicial, df_final
