FROM php:7.4-fpm
RUN apt-get update -y && apt-get install -y \
        libmcrypt-dev \
        openssl \
        git \
        zip \
        unzip \
        libzip-dev
RUN pecl install mcrypt
RUN docker-php-ext-enable mcrypt
RUN docker-php-ext-install pdo_mysql zip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /app
COPY ./backend /app
RUN composer update

CMD php artisan serve --host=0.0.0.0 --port=8000
EXPOSE 8000