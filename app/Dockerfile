FROM php:7.4-fpm


WORKDIR /var/www

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer
RUN apt-get update 
RUN apt-get install -y libpq-dev    
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql     
RUN docker-php-ext-install pdo pdo_pgsql pgsql
 
EXPOSE 9000

ENTRYPOINT ["php-fpm", "-F", "-R" ]
