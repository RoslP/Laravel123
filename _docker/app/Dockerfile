#php:8-fpm #fpm FAST CGI(Common gateway interface) Process Manager. Нужен чтобы связать PHP и веб-сервер nginx
#FROM - синтаксис для Dockerfile, в отличие от image в docker-compose
FROM php:8-fpm

#Далее последовательная установка расширений через один RUN, благодаря \ - Позволяет повысить эффективность и скорость установки расширений
RUN apt-get update && apt-get install -y \
      apt-utils \
      libpq-dev \
      libpng-dev \
      libzip-dev \
      zip unzip \
      git && \
      docker-php-ext-install pdo_mysql && \
      docker-php-ext-install bcmath && \
      docker-php-ext-install gd && \
      docker-php-ext-install zip && \
      apt-get clean && \
      rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

#Далее копируме конфигурационный файл php.ini в папку conf.d на Linux
COPY ./_docker/app/php.ini /usr/local/etc/php/conf.d/php.ini

#Install composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- \
    --filename=composer \
    --install-dir=/usr/local/bin

