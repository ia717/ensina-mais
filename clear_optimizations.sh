#!/bin/bash

echo "Starting to clear Laravel optimizations..."

# Clear configuration cache
echo "Clearing configuration cache..."
php artisan config:clear

# Clear route cache
echo "Clearing route cache..."
php artisan route:clear

# Clear view cache
echo "Clearing view cache..."
php artisan view:clear

echo "Clearing filament cache..."
php artisan filament:optimize-clear

echo "Laravel optimizations cleared successfully."
