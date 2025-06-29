#!/bin/bash

# Railway Deployment Script for Laravel Hotel Booking System

echo "🚀 Starting Railway deployment..."

# Create SQLite database file in the correct location
touch /var/www/database/database.sqlite

# Set proper permissions
chmod 664 /var/www/database/database.sqlite

# Run database migrations
echo "📊 Running database migrations..."
php artisan migrate --force

# Seed the database (optional)
echo "🌱 Seeding database..."
php artisan db:seed --force

# Clear and cache configurations
echo "⚙️ Optimizing application..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Set proper permissions for storage
chmod -R 775 /var/www/storage
chmod -R 775 /var/www/bootstrap/cache

echo "✅ Deployment setup complete!" 