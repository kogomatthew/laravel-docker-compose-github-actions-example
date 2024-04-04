#!/bin/bash
set -e

echo "Deployment started ....."

# Enter maintence mode or return true if already in maintence mode

(php artisan down --message="Deploying new changes...") || true

# Pull the latest changes from the git repository
git pull origin production

# Install dependencies
composer install --no-interaction --no-dev --prefer-dist --optimize-autoloader

# clear cache

php artisan cache:clear

#recreate  cache

php artisan config:cache

# compile npm assets

npm install && npm run production

# Migrate database

php artisan migrate --seed --force

# Exit maintenance mode

php artisan up

echo "Deployment finished!"
