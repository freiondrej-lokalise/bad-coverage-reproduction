FROM php:8.1-cli

RUN apt-get update \
    && apt-get install -y git \
    && apt-get install -y libzip-dev zip \
    && docker-php-ext-install zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN pecl channel-update pecl.php.net \
	&& pecl install xdebug-3.1.3 \
	&& curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

WORKDIR /var/www/html/app
