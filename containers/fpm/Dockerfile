FROM php:7.1-fpm AS motivation_fpm

RUN apt-get update && apt-get install -y \
        libpq-dev \
    && docker-php-ext-install \
        pdo_pgsql

WORKDIR /var/www
CMD ["php-fpm"]

