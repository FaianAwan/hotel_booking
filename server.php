<?php

// Simple PHP server script for Railway deployment

$port = getenv('PORT') ?: 8000;
$host = '0.0.0.0';

echo "Starting Laravel server on $host:$port\n";

// Start the Laravel development server
passthru("php artisan serve --host=$host --port=$port"); 