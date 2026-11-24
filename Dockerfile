FROM php:8.2.35-apache

RUN apt-get update && apt-get install -y unzip git \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install pdo pdo_mysql \
    && a2enmod rewrite

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY ./config/vhost/immoflow.local.conf /etc/apache2/sites-available/immoflow.local.conf
RUN a2dissite 000-default.conf && a2ensite immoflow.local.conf

WORKDIR /var/www/html
