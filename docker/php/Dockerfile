# base image
FROM php:8.2-apache

# system dependencies
RUN apt-get update && apt-get install -y \
    git zip unzip libpng-dev libonig-dev libxml2-dev \
    libcurl4-openssl-dev libicu-dev libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd intl xml zip

# enable apache rewrite
RUN a2enmod rewrite

# set working directory
WORKDIR /var/www/html

# copy project files
COPY . .

# copy composer from official image
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# install php dependencies
RUN composer install --no-interaction --optimize-autoloader

# fix permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache

# expose port
EXPOSE 80

# run apache in foreground
CMD ["apache2-foreground"]

