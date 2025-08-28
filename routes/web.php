<?php

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
    return view('auth.login');
});

Route::prefix('dashboard')->group(function () {

    Route::get('/', function () {
        return view('dashboard.dashboard');
    })->name('dashboard.index');

    Route::prefix('candidate')->group(function () {
        Route::get('/', function () {
            return view('dashboard.candidate.index');
        })->name('dashboard.candidate.index');

        Route::get('/create', function () {
            return view('dashboard.candidate.create');
        })->name('dashboard.candidate.create');

        Route::get('/edit', function (){
            return view('dashboard.candidate.edit');
        })->name('dashboard.candidate.edit');

        // Route::get('/{id}', function ($id) {
        //     return view('dashboard.candidate.show', ['id' => $id]);
        // })->name('dashboard.candidate.show');

    });

    Route::prefix('users')->group(function () {
        Route::get('/', function () {
            return view('dashboard.users.index');
        })->name('dashboard.users.index');

        Route::get('/create', function () {
            return view('dashboard.users.create');
        })->name('dashboard.users.create');

        Route::get('/edit', function (){
            return view('dashboard.users.edit');
        })->name('dashboard.users.edit');

        // Route::get('/{id}', function ($id) {
        //     return view('dashboard.users.show', ['id' => $id]);
        // })->name('dashboard.users.show');
    });

    Route::get('/setting', function () {
        return view('dashboard.setting.index');
    })->name('dashboard.setting.index');
});

