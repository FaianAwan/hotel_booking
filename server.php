<?php

// Simple PHP server script for Railway deployment

echo "Starting Laravel application...\n";

// Debug environment variables
echo "Environment variables:\n";
echo "PORT: '" . getenv('PORT') . "'\n";
echo "APP_ENV: '" . getenv('APP_ENV') . "'\n";
echo "DB_CONNECTION: '" . getenv('DB_CONNECTION') . "'\n";

// Get port from environment - Railway sets this
$port = getenv('PORT');
if (!$port) {
    $port = 8000;
    echo "Warning: PORT environment variable not set, using default port 8000\n";
} else {
    echo "Using PORT from environment: $port\n";
}

$host = '0.0.0.0';

echo "Starting server on $host:$port\n";

// Change to the correct directory
chdir('/var/www');

// Check if artisan exists
if (!file_exists('artisan')) {
    echo "Error: artisan file not found in /var/www\n";
    echo "Current directory: " . getcwd() . "\n";
    echo "Files in directory:\n";
    $files = scandir('.');
    foreach ($files as $file) {
        echo "  $file\n";
    }
    exit(1);
}

echo "Found artisan file, setting up database...\n";

// Run database migrations
echo "Running database migrations...\n";
passthru("php artisan migrate --force");

// Run database seeding
echo "Running database seeding...\n";
passthru("php artisan db:seed --force");

echo "Starting PHP built-in server...\n";

// Use PHP built-in server instead of Laravel serve command
passthru("php -S $host:$port -t public public/index.php"); 