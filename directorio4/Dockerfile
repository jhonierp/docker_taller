FROM php:apache                        

# Instala extensiones PHP útiles (opcional)
RUN docker-php-ext-install pdo pdo_mysql

# Copia el archivo PHP personalizado al directorio web
COPY index.php /var/www/html/

# Variables de entorno personalizadas
ENV CREADOR="[TU NOMBRE]" 
ENV APP_VERSION="1.0"

# El puerto 80 ya está expuesto en la imagen base, pero lo documentamos explícitamente
EXPOSE 80

# Apache se inicia automáticamente, no necesitamos CMD adicional