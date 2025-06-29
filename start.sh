#!/bin/bash

# Startup script for Railway deployment

echo "🚀 Starting Laravel application..."

# Show current directory and file structure
echo "Current directory: $(pwd)"
echo "Directory contents:"
ls -la

# Check if artisan file exists in current directory
if [ -f "/var/www/artisan" ]; then
    echo "✅ Found artisan at: /var/www/artisan"
    echo "Laravel version:"
    php /var/www/artisan --version
    ARTISAN_PATH="/var/www/artisan"
elif [ -f "artisan" ]; then
    echo "✅ Found artisan at: artisan"
    echo "Laravel version:"
    php artisan --version
    ARTISAN_PATH="artisan"
else
    echo "❌ artisan file not found"
    echo "Searching in subdirectories..."
    find . -name "artisan" -type f
    echo "Searching in /var/www..."
    find /var/www -name "artisan" -type f
    exit 1
fi

# Show environment variables
echo "Environment variables:"
echo "PORT: '$PORT'"
echo "APP_ENV: '$APP_ENV'"
echo "DB_CONNECTION: '$DB_CONNECTION'"

# Create SQLite database if it doesn't exist
if [ ! -f "/var/www/database/database.sqlite" ]; then
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

# Start the Laravel development server using the found artisan path
exec php "$ARTISAN_PATH" serve --host=0.0.0.0 --port=$PORT_NUM 