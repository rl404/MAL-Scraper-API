FROM php:5.6-apache

# Install any needed packages
RUN apt-get update -y && apt-get install -y openssl zip unzip git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo mbstring

# Prepare work directory
WORKDIR /var/www/html
COPY . .
RUN composer install
RUN chmod -R 777 vendor

# Prepare apache service
RUN a2enmod rewrite
RUN service apache2 restart

EXPOSE 80