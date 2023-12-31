FROM php:8.2-apache
RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install pdo pdo_mysql

EXPOSE 80

CMD ["/usr/sbin/apache2ctl","-DFOREGROUND"]