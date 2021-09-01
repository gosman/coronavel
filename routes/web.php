<?php

use App\Http\Controllers\ManageUsersController;
use App\Http\Controllers\ProfileSettingsController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExampleController;

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

// Auth Routes
Route::middleware(['auth'])->group(function () {

    Route::get('/', [
        DashboardController::class,
        'index',
    ])->name('dashboard');

    Route::get('/submenu1', [
        ExampleController::class,
        'submenu1',
    ])->name('submenu1');


    Route::get('/submenu2', [
        ExampleController::class,
        'submenu2',
    ])->name('submenu2');

    Route::get('/manage-users', [
        ManageUsersController::class,
        'index',
    ])->middleware('admin')->name('manage-users');

    Route::get('/profile-settings', [
        ProfileSettingsController::class,
        'index',
    ])->name('profile-settings');

    Route::post('/profile-settings', [
        ProfileSettingsController::class,
        'store',
    ])->name('profile-settings.store');

    Route::get('/search', [
        SearchController::class,
        'index',
    ])->name('search');
});

// Auth Admin Routes
Route::middleware([
    'auth',
    'admin',
])->group(function () {

    Route::resource('manage-users', ManageUsersController::class);
});


require __DIR__.'/auth.php';
