FROM php:7.4-fpm

RUN apt-get update && apt-get install -y nginx

COPY . /var/www/html/
COPY nginx.conf /etc/nginx/nginx.conf
COPY custom-php.ini /usr/local/etc/php/conf.d/custom-php.ini

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

EXPOSE 80

CMD sh -c "nginx && php-fpm"