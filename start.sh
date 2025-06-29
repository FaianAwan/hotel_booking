#!/bin/bash

# Startup script for Railway deployment

echo "🚀 Starting Laravel application..."

# Show environment variables
echo "Environment variables:"
echo "PORT: $PORT"
echo "APP_ENV: $APP_ENV"
echo "DB_CONNECTION: $DB_CONNECTION"

# Create SQLite database if it doesn't exist
if [ ! -f /var/www/database/database.sqlite ]; then
    echo "📊 Creating SQLite database..."
    touch /var/www/database/database.sqlite
    chmod 664 /var/www/database/database.sqlite
fi

# Set proper permissions
chmod -R 775 /var/www/storage
chmod -R 775 /var/www/bootstrap/cache

# Run database migrations
echo "📊 Running database migrations..."
php artisan migrate --force

# Seed the database
echo "🌱 Seeding database..."
php artisan db:seed --force

# Start the application
echo "🌐 Starting Laravel server on port ${PORT:-8000}..."
exec php artisan serve --host=0.0.0.0 --port=${PORT:-8000} 