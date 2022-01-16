FROM php:8.1-fpm

RUN apt-get update
RUN apt-get install -y libzip-dev libpng-dev unzip

RUN docker-php-ext-install pdo
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install sockets
RUN docker-php-ext-install zip
RUN docker-php-ext-install gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

ADD docker/php/output.conf /usr/local/etc/php/conf.d/output.conf
ADD docker/php/zz-docker.conf /usr/local/etc/php-fpm.d/zz-docker.conf

COPY . /app
WORKDIR /app

CMD ["php-fpm"]