FROM php:8.1-fpm

RUN apt-get update
RUN apt-get install -y libzip-dev libpng-dev unzip

RUN docker-php-ext-install pdo
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install sockets
RUN docker-php-ext-install zip
RUN docker-php-ext-install gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

#SHELL ["/bin/bash", "-o", "pipefail", "-c"]
#
#ARG environment=production
#
#ARG uid=1000
#
#RUN apt-get update && \
#    apt-get install -y --no-install-recommends unzip gnupg2 libpq-dev \
#    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
#    && docker-php-ext-install pgsql \
#    && docker-php-ext-install pdo_pgsql \
#    #&& docker-php-ext-install sqlsrv \
#    && docker-php-ext-install pdo_sqlsrv \
#    && docker-php-ext-install sockets \
#    && docker-php-ext-install zip \
#    && docker-php-ext-install gd \
#    && docker-php-ext-install amqp \
#    && docker-php-ext-install bcmath \
#    && docker-php-ext-install bz2 \
#    && docker-php-ext-install intl \
#    && docker-php-ext-install soap \
#    && docker-php-ext-install redis \
#    && docker-php-ext-install swoole-^4 \
#    && docker-php-ext-install decimal-^1

#RUN apt-get update && apt-get install -y \
#        curl \
#        git \
#        openssl \
#        libssl-dev \
#        libfreetype6-dev \
#        libjpeg62-turbo-dev \
#        libmcrypt-dev \
#        libpng-dev \
#        libzip-dev \
#    && docker-php-ext-install -j$(nproc) iconv mbstring zip \
#    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
#    && docker-php-ext-install -j$(nproc) gd \
#    && docker-php-ext-install opcache \
#    && docker-php-ext-install sockets \
#    && docker-php-ext-install bcmath

#RUN apt-get install -y libpq-dev \
#    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
#    && docker-php-ext-install pdo pdo_pgsql pdo_mysql pgsql



#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer && \
    #chmod +x /usr/bin/composer

#ENV COMPOSER_HOME=/var/www/.composer

ADD docker/php/output.conf /usr/local/etc/php/conf.d/output.conf
ADD docker/php/zz-docker.conf /usr/local/etc/php-fpm.d/zz-docker.conf

COPY . /app
WORKDIR /app

CMD ["php-fpm"]