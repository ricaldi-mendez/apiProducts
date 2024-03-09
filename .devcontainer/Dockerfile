FROM php:7.4-apache

# Instalar extensiones de PHP necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar archivos de la aplicación
COPY . /var/www/html/

# Permisos para apache
RUN chown -R www-data:www-data /var/www/html/
