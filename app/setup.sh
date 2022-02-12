#!/bin/sh
composer install -d /var/www --no-plugins --no-scripts --no-dev 
php-fpm -F -R