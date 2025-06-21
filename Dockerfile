FROM php:8.3-apache

# Install dependencies dan ekstensi yang dibutuhkan Laravel
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    libcurl4-openssl-dev \
    mariadb-client \
    && docker-php-ext-install \
    pdo \
    pdo_mysql \
    zip \
    mbstring \
    xml \
    curl \
    bcmath

# Aktifkan mod_rewrite
RUN a2enmod rewrite
