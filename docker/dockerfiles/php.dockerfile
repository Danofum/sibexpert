FROM php:8.2-fpm-alpine

ARG UID
ARG GID

ENV UID=${UID}
ENV GID=${GID}

RUN mkdir -p /var/www/html

WORKDIR /var/www/html

RUN delgroup dialout

RUN addgroup -g ${GID} --system sibexpert
RUN adduser -G sibexpert --system -D -s /bin/sh -u ${UID} sibexpert

RUN sed -i "s/user = www-data/user = sibexpert/g" /usr/local/etc/php-fpm.d/www.conf
RUN sed -i "s/group = www-data/group = sibexpert/g" /usr/local/etc/php-fpm.d/www.conf
RUN echo "php_admin_flag[log_errors] = on" >> /usr/local/etc/php-fpm.d/www.conf
RUN echo "post_max_size = 500M" >> /usr/local/etc/php/conf.d/docker-fpm.ini
RUN echo "upload_max_filesize = 500M" >> /usr/local/etc/php/conf.d/docker-fpm.ini

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

RUN install-php-extensions pdo pdo_mysql

USER sibexpert

CMD ["php-fpm", "-y", "/usr/local/etc/php-fpm.conf", "-R"]
