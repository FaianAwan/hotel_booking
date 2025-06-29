<?php

use App\Models\Room;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Health check route for Railway
Route::get('/health', function() {
    return response()->json(['status' => 'ok', 'message' => 'Laravel is running']);
});

// Environment check route
Route::get('/env-check', function() {
    return response()->json([
        'app_env' => env('APP_ENV'),
        'app_debug' => env('APP_DEBUG'),
        'db_connection' => env('DB_CONNECTION'),
        'port' => env('PORT', 'not set')
    ]);
});

// Authentication routes
Route::get('/login', function() {
    return view('auth.login');
})->name('login');

Route::get('/register', function() {
    return view('auth.register');
})->name('register');

// Public home page with fallback
Route::get('/', function() {
    try {
        $room = Room::all();
        return view('home.index', compact('room'));
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'ok',
            'message' => 'Laravel is running but database not ready',
            'error' => $e->getMessage()
        ]);
    }
})->name('home');

// Public static pages
Route::get('/about', function() {
    return view('home.about_page');
})->name('about');

Route::get('/room', function() {
    try {
        $room = Room::all();
        return view('home.room_page', compact('room'));
    } catch (\Exception $e) {
        return view('home.room_page', ['room' => collect()]);
    }
})->name('room');

Route::get('/gallery', function() {
    return view('home.gallery_page');
})->name('gallery');

Route::get('/blog', function() {
    return view('home.blog_page');
})->name('blog');

Route::get('/contact', function() {
    return view('home.contact_page');
})->name('contact');

// Test route to check authentication
Route::get('/test-auth', function() {
    if (auth()->check()) {
        return response()->json([
            'authenticated' => true,
            'user' => auth()->user()->name,
            'usertype' => auth()->user()->usertype
        ]);
    } else {
        return response()->json(['authenticated' => false]);
    }
});

// Public routes
Route::get('/room_details/{id}', [HomeController::class, 'room_details']);
Route::post('/add_booking/{id}', [HomeController::class, 'add_booking'])->name('add_booking');

// Contact routes
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Test route for contacts (temporary)
Route::get('/test-contacts', [ContactController::class, 'index'])->name('test.contacts');

// Simple admin contacts route (no middleware for testing)
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

// Admin routes (require authentication)
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [AdminController::class, 'index'])->name('home');
    Route::get('/create_room', [AdminController::class, 'create_room'])->name('create_room');
    Route::post('/add_room', [AdminController::class, 'add_room'])->name('add_room');
    Route::get('/view_room', [AdminController::class, 'view_room'])->name('view_room');
    Route::get('/room_delete/{id}', [AdminController::class, 'room_delete'])->name('room_delete');
    Route::get('/room_update/{id}', [AdminController::class, 'room_update'])->name('room_update');
    Route::post('/edit_room/{id}', [AdminController::class, 'edit_room'])->name('edit_room');
    
    // Booking management routes
    Route::get('/view_bookings', [AdminController::class, 'view_bookings'])->name('view_bookings');
    Route::get('/booking_delete/{id}', [AdminController::class, 'booking_delete'])->name('booking_delete');
    Route::get('/booking_details/{id}', [AdminController::class, 'booking_details'])->name('booking_details');

    // Admin contact management routes
    Route::get('/admin/contacts', [ContactController::class, 'index'])->name('admin.contacts.index');
    Route::get('/admin/contacts/{id}', [ContactController::class, 'show'])->name('admin.contacts.show');
    Route::put('/admin/contacts/{id}/status', [ContactController::class, 'updateStatus'])->name('admin.contacts.updateStatus');
    Route::delete('/admin/contacts/{id}', [ContactController::class, 'destroy'])->name('admin.contacts.destroy');
});
