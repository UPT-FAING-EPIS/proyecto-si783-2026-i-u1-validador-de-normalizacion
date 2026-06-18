import sys
sys.path.append('c:/Users/chara/Videos/DATAQUEST')
from core.parser import parse_schema

sql = """
CREATE TABLE "public"."Test" (
    id uuid PRIMARY KEY,
    name varchar(255)
);
"""
print(parse_schema(sql, 'sql'))
