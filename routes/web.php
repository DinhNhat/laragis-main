<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing

// All Listings
Route::get('/', [DashboardController::class, 'index'])->name('main');

Route::get('/listings', [ListingController::class, 'index']);

Route::middleware(['revalidate', 'auth'])->group(function() {
    // Store Listing Data
    Route::post('/listings', [ListingController::class, 'store']);

// Show Edit Form
    Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->name('show-listing-edit');

// Update Listing
    Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete Listing
    Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// Manage Listings
    Route::get('/listings/manage', [ListingController::class, 'manage']);

    // Show Create Form
    Route::get('/listings/create', [ListingController::class, 'create']);

    // Log User Out
    Route::post('/logout', [UserController::class, 'logout']);

});


// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show'])->name('show-listing');

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Show Login Form
Route::get('/new-login', [UserController::class, 'newLogin'])->name('new-login');

// Show Login Form
Route::get('/auth/forgot-password', [UserController::class, 'forgotPass'])->name('forgot-pass')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::get('/setup', function() {
    $credentials = [
        'email' => 'nhat123@yahoo.net',
        'password' => 'nhat123'
    ];

    if (!Auth::attempt($credentials))
    {
        $user = new \App\Models\User();

        $user->name = 'Admin';
        $user->email = $credentials['email'];
        $user->password = \Illuminate\Support\Facades\Hash::make($credentials['password']);

        $user->save();

        if (Auth::attempt($credentials))
        {
            $user = Auth::user();

            $adminToken = $user->createToken('admin-token', ['create', 'update', 'delete']);
            $updateToken = $user->createToken('update-token', ['create', 'update']);
            $basicToken = $user->createToken('basic-token');

            return [
                'admin' => $adminToken->plainTextToken,
                'update' => $updateToken->plainTextToken,
                'basic' => $basicToken->plainTextToken,
            ];
        }
    }
});
