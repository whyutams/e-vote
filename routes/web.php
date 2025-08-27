<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ElectionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.app');
});
Route::get('/candidate', function () {
    return view('components.candidate');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [UserController::class, 'register'])->name('register');
    Route::post('/register', [UserController::class, 'proses_register'])->name('register.submit');
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'proses_login'])->name('login.submit');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/profile/update', [UserController::class, 'update_profile'])->name('profile.update');
    Route::post('/profile/update', [UserController::class, 'proses_update_profile'])->name('profile.update.submit');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');

    Route::prefix('dashboard')
        ->name('dashboard.')->middleware(['superadmin', 'admin'])
        ->group(function () {
            Route::get('', [DashboardController::class, "index"])->name("dashboard");

            Route::controller(UserController::class)->group(function () {
                Route::get('users', 'd')->name('users.index');
                Route::get('users/create', 'd_create')->name('users.create');
                Route::post('users', 'proses_register')->name('users.store');
                Route::get('users/{user}/edit', 'd_edit')->name('users.edit');
                Route::put('users/{user}', 'proses_update_profile')->name('users.update');
                Route::delete('users/{user}', 'd_destroy')->name('users.destroy')->middleware('superadmin');
            });

            Route::resource('elections', ElectionController::class)->names('elections');
            Route::resource('elections.candidates', CandidateController::class)->names('candidates');
            Route::resource('elections.candidates.votes', VoteController::class)->names('votes')->only(['store', 'destroy']);

        });
});