FROM php:7.4.33-apache

RUN a2enmod rewrite

WORKDIR /var/www/html

RUN docker-php-ext-install mysqli

RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

EXPOSE 80