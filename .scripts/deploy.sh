#!/bin/bash

# Exit script on error
set -e

echo "Deployment started ....."

# Enter maintenance mode
echo "Entering maintenance mode..."

cd /var/www/html/my_app

php artisan down --message="Deploying new changes..." || true

echo "Pulling the latest changes from the git repository..."
git pull origin production

echo "Installing dependencies..."
composer install --no-interaction --no-dev --prefer-dist --optimize-autoloader

echo "Clearing cache..."
php artisan cache:clear

echo "Recreating cache..."
php artisan config:cache

echo "Compiling npm assets..."
npm install && npm run production

echo "Migrating database..."
php artisan migrate --seed --force

echo "Exiting maintenance mode..."
php artisan up

echo "Deployment finished!"
