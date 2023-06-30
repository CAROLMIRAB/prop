#!/bin/sh

cd /var/www/api 
php artisan migrate:fresh --seed
/usr/sbin/apache2ctl -D FOREGROUND