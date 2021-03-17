FROM php:7.3.11
COPY . /var/www/php 
WORKDIR /var/www/php/web
EXPOSE 8080
CMD php -S 0.0.0.0:8080
