FROM php:7-fpm

ENV DOCKER_ID 1000
RUN usermod -u ${DOCKER_ID} www-data && usermod -G staff www-data

RUN apt-get update && apt-get -y install \
    locales git g++ libcurl4-gnutls-dev libicu-dev libmcrypt-dev libpq-dev libpng-dev libjpeg-dev libxml2-dev unzip zlib1g-dev libfreetype6-dev libjpeg62-turbo-dev \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install curl intl json mbstring pdo pdo_mysql zip gd \
    && apt-get autoremove && apt-get autoclean \
    && rm -rf /var/lib/apt/lists/*

RUN locale-gen en_US.UTF-8
RUN locale-gen uk_UA.UTF-8

COPY ./php-ini-overrides.ini /usr/local/etc/php/php.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

WORKDIR "/www"