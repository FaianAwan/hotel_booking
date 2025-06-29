<?php

// Simple PHP server script for Railway deployment

echo "Starting Laravel application...\n";

// Get port from environment
$port = getenv('PORT') ?: 8000;
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

echo "Found artisan file, starting Laravel server...\n";

// Start the Laravel development server
passthru("php artisan serve --host=$host --port=$port"); 