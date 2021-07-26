FROM php:7.2-apache 
COPY . /var/www/html
RUN docker-php-ext-install mysqli pdo_mysql pdo
RUN apt-get update -y \
    && apt-get install git curl nano vim -y

EXPOSE 80/tcp

