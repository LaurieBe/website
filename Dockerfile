FROM php:7.2-apache
COPY ./laurie.besinet.net /var/www/html
RUN chmod -R +r /var/www/html
