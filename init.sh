#!/bin/sh
echo "Run db migration"
php artisan migrate

echo "Run generate key"
php artisan key:generate

echo "Run default entrypoint"
/usr/bin/supervisord -n -c /var/www/data/etc/supervisor/supervisord.conf -d /var/www/data/etc/supervisor


