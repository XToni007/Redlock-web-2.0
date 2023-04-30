FROM php:8.1-apache

COPY /php /var/www/html/

RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli
RUN chown -R www-data:www-data /var/www/html
RUN chmod o-wx /var/www/html/index.php
RUN chmod o-wx /var/www/html/countUser.php

EXPOSE 7077
EXPOSE 80
