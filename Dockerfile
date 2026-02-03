#base image apache
FROM php:8.2-apache

#system dependencies
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libcurl4-openssl-dev \
    libicu-dev \
    libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd intl xml zip

#php extensions for laravel
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

#apache rewrite (needed by laravel)
RUN a2enmod rewrite

#point apache to public folder
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

#set directory
WORKDIR /var/www/html

#copy proj files
COPY . .

#composer installation
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

#install php dependencies
RUN composer install

#permissions fixer
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

EXPOSE 80
