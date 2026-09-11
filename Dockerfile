FROM php:8.2-apache

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install intl pdo_mysql mysqli zip

# Enable Apache Rewrite module
RUN a2enmod rewrite

# Update Apache document root to point to CodeIgniter's public folder
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -s 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -s 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Copy project files into the container
COPY . /var/www/html

# Set proper permissions for writable directory
RUN chown -R www-data:www-data /var/www/html/writable /var/www/html/public

# Expose port 80
EXPOSE 80