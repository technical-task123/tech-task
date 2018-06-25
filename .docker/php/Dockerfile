FROM php:7.2-fpm

LABEL maintainer="Dmitry Nabok"
COPY . /srv/app/
COPY .docker/php/php.ini /usr/local/etc/php/php.ini

COPY .docker/php/composer-installer.sh /usr/local/bin/composer-installer
# Install composer
RUN apt-get update && apt-get install -y wget git zip unzip && chmod +x /usr/local/bin/composer-installer \
&& composer-installer \
&& mv composer.phar /usr/local/bin/composer \
&& chmod +x /usr/local/bin/composer \
&& composer --version

RUN apt-get update && apt-get install -y libmcrypt-dev mysql-client \
    && docker-php-ext-install pdo_mysql \
    && pecl install mcrypt-1.0.1 \
    && docker-php-ext-enable mcrypt

WORKDIR /srv/app/
RUN chown -R www-data:www-data /srv/app
RUN composer install \
--no-interaction \
--no-plugins \
--no-scripts \
--prefer-dist
