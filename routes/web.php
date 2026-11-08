<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('HomePage');
})->name('home');

Route::get('/about', function () {
    return view('Pages.AboutUs');
})->name('about');

Route::get('/services', function () {
    return view('Pages.services');
})->name('serivces');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/login', [
        AuthController::class,
        'showLogin',
    ])->name('login');

    Route::post('/login', [
        AuthController::class,
        'login',
    ])->middleware('throttle:5,1')->name('login.submit');

    Route::middleware(['auth', 'admin'])->group(function () {

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::post('/logout', [
            AuthController::class,
            'logout',
        ])->name('logout');
    });
    Route::get('/contacts', [ContactController::class, 'index'])
        ->name('contacts.index');
    Route::get('/contacts/{contact}', [ContactController::class, 'show'])
        ->name('contacts.show');

    Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])
        ->name('contacts.edit');

    Route::put('/contacts/{contact}', [ContactController::class, 'update'])
        ->name('contacts.update');

    Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])
        ->name('contacts.destroy');
});
Route::get('/contacts/create', [ContactController::class, 'create'])
    ->name('contacts.create');
Route::post('/contacts', [ContactController::class, 'store'])
    ->name('contacts.store');


Route::get('/optimize', function () {
    return view('Pages.OptimizationSerivce');
})->name('optimize');
Route::get('/conservation', function () {
    return view('Pages.ConservationSerivce');
})->name('conservation');

Route::get('/software', function () {
    return view('Pages.SoftwareSerivce');
})->name('software');

Route::get('/safteyservice', function () {
    return view('Pages.SafetySerivce');
})->name('safteyservice');



require __DIR__.'/auth.php';
