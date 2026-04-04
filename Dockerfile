FROM php:8.3-fpm

# Definir argumentos para hacer los permisos dinámicos (Por defecto 1000, como tu usuario localerror404)
ARG uid=1000
ARG user=appuser

# Instalar dependencias del sistema y extensiones de PHP
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalar Node.js y NPM
RUN curl -sL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Crear el usuario idéntico al tuyo de Ubuntu para evitar problemas de permisos en VS Code
RUN useradd -G www-data,root -u $uid -d /home/$user $user \
    && mkdir -p /home/$user/.composer \
    && chown -R $user:$user /home/$user

# Configurar directorio de trabajo principal
WORKDIR /var/www/html

# Copiar archivos
COPY . /var/www/html

# Ajuste de permisos para Laravel (El usuario clonado y el servidor web tendrán acceso)
RUN chown -R $user:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Cambiar a nuestro nuevo usuario seguro para desarrollo
USER $user

# Exponer puerto
EXPOSE 9000

CMD ["php-fpm"]
