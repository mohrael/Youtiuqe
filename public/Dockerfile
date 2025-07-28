# Base image
FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev zip unzip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy all files
COPY . .

# Create storage directory if needed
RUN mkdir -p storage/app/public

# Set permissions
RUN chmod -R 775 storage bootstrap/cache

# Install Laravel dependencies & link storage
RUN composer install --no-interaction --optimize-autoloader && \
    php artisan migrate --force && \
    php artisan config:cache && \
    php artisan storage:link

# Start Laravel server (custom command overrideable)
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
