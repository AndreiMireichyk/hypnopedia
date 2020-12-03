FROM php:7.4-fpm-alpine

RUN set -e; \
    apk add --no-cache pcre-dev $PHPIZE_DEPS bash mc freetype libjpeg-turbo freetype-dev jpeg-dev libjpeg libjpeg-turbo-dev libpng-dev \
    && pecl install redis \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo_mysql exif \
    && docker-php-ext-enable redis pdo_mysql exif \
    && mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini


#RUN { \
#    echo 'session.save_handler = redis'; \
#    echo 'session.save_path = tcp://abw-redis:6379'; \
#    echo 'session.cookie_domain  = .abw.test'; \
#    echo 'date.timezone = Europe/Minsk'; \
#
#} >> $PHP_INI_DIR/php.ini

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY ./composer.json ./composer.json

WORKDIR /app



