#!/bin/bash

echo "Starting Laravel optimization..."

# Cache configuration
echo "Caching configuration..."
php artisan config:cache
echo "To clear the configuration cache, run: php artisan config:clear"

# Cache routes
echo "Caching routes..."
php artisan route:cache
echo "To clear the route cache, run: php artisan route:clear"

# Cache views
echo "Caching views..."
php artisan view:cache
echo "To clear the view cache, run: php artisan view:clear"

echo "Caching Filament Panel..."
php artisan filament:optimize

echo "Laravel optimization completed."
