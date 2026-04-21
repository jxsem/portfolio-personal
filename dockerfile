# --- ETAPA 1: Compilar Assets (Node) ---
FROM node:20-alpine AS build-assets
WORKDIR /app
COPY . .
RUN npm install && npm run build

# --- ETAPA 2: Servidor PHP ---
FROM php:8.4-fpm

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libpq-dev

# Instalar extensiones de PHP
RUN docker-php-ext-install pdo pdo_pgsql mbstring exif pcntl bcmath gd

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# 1. Copiar el proyecto
COPY . /var/www

# 2. Copiar los assets de la etapa anterior
COPY --from=build-assets /app/public/build /var/www/public/build

# 3. INSTALAR DEPENDENCIAS (Esto debe ir ANTES de cualquier comando php artisan)
RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs

# 4. Ajustar permisos
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

EXPOSE 10000

# 5. Comando de arranque: Limpiamos y optimizamos justo al encender
CMD php artisan config:clear && \
    php artisan view:clear && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan serve --host=0.0.0.0 --port=10000 