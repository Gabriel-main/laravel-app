FROM php:8.4-fpm

# Instalar dependencias del sistema y limpiar caché en un solo paso
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

# Configurar directorio de trabajo
WORKDIR /var/www

# Copiar archivos
COPY . .

# AJUSTE DE PERMISOS CRÍTICO:
# Le damos la propiedad a www-data (el servidor web) 
# pero nos aseguramos de que las carpetas de Laravel tengan permisos 775
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Exponer puerto
EXPOSE 9000

CMD ["php-fpm"]