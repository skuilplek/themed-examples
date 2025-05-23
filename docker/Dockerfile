# Use Ubuntu 24.10 as the base image
FROM ubuntu:24.10

# Set environment variables to avoid interactive prompts
ENV DEBIAN_FRONTEND=noninteractive

# Accept PHP_VERSION as a build argument from .env
ARG PHP_VERSION=8.3

RUN apt-get update && apt-get install -y --no-install-recommends \
    software-properties-common \
    gnupg \
    curl \
    vim \
    npm

RUN apt-get install -y software-properties-common

# Add PHP repository
RUN LC_ALL=C.UTF-8 add-apt-repository -y ppa:ondrej/php

# Install software
RUN apt-get install -y --no-install-recommends \
    apache2 \
    git \
    unzip \
    zip \
    curl \
    httrack \
    php${PHP_VERSION} \
    libapache2-mod-php${PHP_VERSION} \
    php${PHP_VERSION}-xdebug \
    php${PHP_VERSION}-cli \
    php${PHP_VERSION}-intl \
    php${PHP_VERSION}-common \
    php${PHP_VERSION}-mbstring \
    php${PHP_VERSION}-curl \
    php${PHP_VERSION}-fpm 

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

# Remove the default icons/ apache alias
COPY default.conf /etc/apache2/sites-available/000-default.conf

# Copy PHP configuration
COPY php-${PHP_VERSION}.ini-development /etc/php/${PHP_VERSION}/apache2/php.ini

# Make bootstrap script executable
RUN chown -R www-data:www-data /var/www/html

# Clean up
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Configure Apache
RUN sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

RUN a2enmod rewrite headers php${PHP_VERSION}

# Expose port for web server
EXPOSE 80

# Run composer and start Apache
CMD ["sh", "-c", "composer install --no-interaction --working-dir=/var/www/html ; apache2ctl -D FOREGROUND"]