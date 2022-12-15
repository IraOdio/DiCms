FROM php:8.1-fpm

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    build-essential \
    libzip-dev \
    libpng-dev \
    libjpeg62-turbo-dev \
    libwebp-dev libjpeg62-turbo-dev libpng-dev libxpm-dev \
    libfreetype6 \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    gnupg \
    libxml2-dev \
    iputils-ping \
    traceroute \
    telnet \
    libpq-dev


# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
# Install extensions

RUN docker-php-ext-install zip exif pcntl sockets
RUN docker-php-ext-install pgsql
RUN docker-php-ext-install pdo_pgsql
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug pdo_pgsql

#RUN docker-php-ext-install ftp
#RUN pecl install sqlsrv pdo_sqlsrv
# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN addgroup --gid 1000 laravel && adduser --ingroup  laravel --gecos laravel --shell /bin/sh --disabled-password laravel
RUN mkdir -p /var/www/html
RUN chown laravel:laravel /var/www/html

# chmod o+w ./storage/ -R
