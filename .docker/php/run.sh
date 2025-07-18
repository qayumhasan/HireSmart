#!/bin/sh

# Wait until the database is available (adjust for your DB settings)
echo "Waiting for database to be ready..."

until php artisan migrate:status > /dev/null 2>&1; do
  echo "Waiting for MySQL..."
  sleep 2
done

echo "Database is ready."

# Run migrations and seed
php artisan migrate:fresh --seed

# # Start Laravel server
# echo "Starting Laravel server on port $APP_PORT"
# exec php artisan serve --host=0.0.0.0 --port=$APP_PORT
