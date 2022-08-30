FROM php:5.6-apache

# Install some stuff that is needed.
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        git \ 
        zip \
        unzip \
        cron \
    && docker-php-ext-install mysql mysqli pdo pdo_mysql

# Turn on Apache redirect module.
RUN a2enmod rewrite
RUN a2enmod headers

# Extra PHP settings.
COPY php.ini /usr/local/etc/php/

# Copy source files.
COPY ./ /var/www/html/

# Setup PHP error log.
RUN touch /var/log/php-errors.log
RUN chown www-data:www-data /var/log/php-errors.log
