FROM php:8.3-fpm-alpine

RUN apk add --no-cache \
    postgresql-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    nginx \
    supervisor \
    autoconf \
    g++ \
    make

RUN docker-php-ext-install pdo_pgsql zip pcntl

RUN pecl install pcov && docker-php-ext-enable pcov

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY ./php/8.3/php.ini /usr/local/etc/php/conf.d/php.ini

COPY ./nginx/default.conf /etc/nginx/conf.d/default.conf

COPY ./supervisor/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
RUN mkdir -p /var/log/supervisor && chmod 755 /var/log/supervisor

COPY ./.. /var/www/html
RUN mkdir -p storage bootstrap/cache && chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

RUN composer install --optimize-autoloader

RUN php artisan key:generate && php artisan migrate && php artisan db:seed

WORKDIR /var/www/html

CMD ["supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
