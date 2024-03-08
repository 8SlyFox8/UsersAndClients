FROM php:7.4-fpm

RUN apt-get update
RUN apt-get install -y curl git zip

RUN apt-get update  && apt-get install -y libpq-dev  && docker-php-ext-install pgsql pdo_pgsql pdo

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

USER "1000:1000"

WORKDIR /var/www

ENTRYPOINT [ "php-fpm" ]