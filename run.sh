#!/bin/sh

cd /var/www/api 
php artisan migrate:fresh
/usr/sbin/apache2ctl -D FOREGROUND