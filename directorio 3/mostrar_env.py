import os

print("Variables de entorno configuradas:")
print(f"NOMBRE: {os.environ.get('NOMBRE', 'No definido')}")
print(f"ENTORNO: {os.environ.get('ENTORNO', 'No definido')}")
print(f"VERSION: {os.environ.get('VERSION', 'No definido')}")