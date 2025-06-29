#!/bin/bash

# Startup script for Railway deployment

echo "🚀 Starting Laravel application..."

# Show environment variables
echo "Environment variables:"
echo "PORT: '$PORT'"
echo "APP_ENV: '$APP_ENV'"
echo "DB_CONNECTION: '$DB_CONNECTION'"

# Create SQLite database if it doesn't exist
if [ ! -f /var/www/database/database.sqlite ]; then
    echo "📊 Creating SQLite database..."
    touch /var/www/database/database.sqlite
    chmod 664 /var/www/database/database.sqlite
fi

# Set proper permissions
chmod -R 775 /var/www/storage
chmod -R 775 /var/www/bootstrap/cache

# Handle PORT environment variable
if [ -z "$PORT" ]; then
    PORT_NUM=8000
    echo "⚠️  PORT environment variable is empty, using default port 8000"
else
    PORT_NUM=$PORT
    echo "✅ Using PORT from environment: $PORT_NUM"
fi

echo "🌐 Starting Laravel server on port $PORT_NUM..."

# Start the Laravel development server
exec php artisan serve --host=0.0.0.0 --port=$PORT_NUM 