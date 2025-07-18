#!/bin/sh
set -e

# Set permissions for Laravel directories
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
chmod -R 775 /var/www/storage /var/www/bootstrap/cache

chown -R $USER:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# permissions for PHPMyAdmin
mkdir -p /sessions

chmod 777 /sessions

echo "Waiting for database to be ready..."

until php artisan migrate:status > /dev/null 2>&1; do
  echo "Waiting for connection"
  sleep 2
done

echo "Database is ready."

# Run migrations and seed
php artisan migrate:fresh --seed

exec "$@"
