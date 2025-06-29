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

# Convert PORT to integer and set default
PORT_NUM=${PORT:-8000}
echo "🌐 Starting Laravel server on port $PORT_NUM..."

# Run database migrations
echo "📊 Running database migrations..."
php artisan migrate --force

# Seed the database
echo "🌱 Seeding database..."
php artisan db:seed --force

# Start the application
exec php artisan serve --host=0.0.0.0 --port=$PORT_NUM 