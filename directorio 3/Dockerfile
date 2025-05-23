FROM python:3.9-slim

# Definimos variables de entorno
ENV NOMBRE="Usuario Docker"
ENV ENTORNO="Desarrollo" 
ENV VERSION="1.0"

WORKDIR /app
COPY mostrar_env.py .

CMD ["python", "mostrar_env.py"]