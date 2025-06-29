#!/bin/bash

# Startup script for Railway deployment

echo "🚀 Starting Laravel application..."

# Show current directory and file structure
echo "Current directory: $(pwd)"
echo "Directory contents:"
ls -la

# Check if artisan file exists
if [ -f "artisan" ]; then
    echo "✅ artisan file found"
    php artisan --version
else
    echo "❌ artisan file not found"
    echo "Looking for artisan in subdirectories..."
    find . -name "artisan" -type f
fi

# Show environment variables
echo "Environment variables:"
echo "PORT: '$PORT'"
echo "APP_ENV: '$APP_ENV'"
echo "DB_CONNECTION: '$DB_CONNECTION'"

# Create SQLite database if it doesn't exist
if [ ! -f database/database.sqlite ]; then
    echo "📊 Creating SQLite database..."
    touch database/database.sqlite
    chmod 664 database/database.sqlite
fi

# Set proper permissions
chmod -R 775 storage
chmod -R 775 bootstrap/cache

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