#!/bin/sh
echo "Instalando dependencias "
composer install
echo "Dependencias instaladas"
php-fpm -F -R
