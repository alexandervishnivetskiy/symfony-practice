FROM php:7.3-fpm

RUN apt-get update \
    && apt-get install -y \
    libicu-dev \
    libzip-dev \
    zip \
    unzip \
    vim \
    git

RUN pecl install xdebug-2.7.0beta1 && docker-php-ext-enable xdebug \
    && docker-php-ext-install \
        intl

RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/bin/composer \
    && composer global require hirak/prestissimo