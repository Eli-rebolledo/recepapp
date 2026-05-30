FROM php:8.2-apache

RUN docker-php-ext-install mysqli

RUN a2enmod rewrite

COPY . /var/www/html/

RUN chmod -R 777 /var/www/html/frontend/img

RUN echo '<VirtualHost *:10000>\n\
    DocumentRoot /var/www/html/frontend\n\
    <Directory /var/www/html/frontend>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

EXPOSE 10000

CMD ["sh", "-c", "sed -i 's/Listen 80/Listen 10000/' /etc/apache2/ports.conf && apache2-foreground"]