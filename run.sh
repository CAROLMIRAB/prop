#!/bin/sh

cd /var/www/api 
php artisan migrate:fresh --seeder
/usr/sbin/apache2ctl -D FOREGROUND