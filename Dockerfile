FROM php:8.2-apache

RUN docker-php-ext-install mysqli

COPY . /var/www/html/

RUN sed -i 's|/var/www/html|/var/www/html/frontend|g' /etc/apache2/sites-available/000-default.conf

EXPOSE 10000

CMD ["sh", "-c", "sed -i 's/80/10000/g' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf && apache2-foreground"]
