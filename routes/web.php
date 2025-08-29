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

    Route::prefix('election')->group(function () {
        Route::get('/', function () {
            return view('dashboard.election.index');
        })->name('dashboard.election.index');

        Route::get('/create', function () {
            return view('dashboard.election.create');
        })->name('dashboard.election.create');

        Route::get('/edit', function (){
            return view('dashboard.election.edit');
        })->name('dashboard.election.edit');

        Route::get('/{id}', function ($id) {
            return view('dashboard.election.show', ['id' => $id]);
        })->name('dashboard.election.show');

        Route::get('/{id}/voter', function ($id) {
            return view('dashboard.election.show_voter', ['id' => $id]);
        })->name('dashboard.election.show_voter');

        // CREATE (di dalam show)
        Route::prefix('{id}/create')->group(function () {
            Route::get('/candidate', function ($id) {
                return view('dashboard.election.create.create_candidate', ['id' => $id]);
            })->name('dashboard.election.create_candidate');

            Route::get('/voter', function ($id) {
                return view('dashboard.election.create.create_voter', ['id' => $id]);
            })->name('dashboard.election.create_voter');
        });
        
        // EDIT (di dalam show)
        Route::prefix('{id}/edit')->group(function () {
            Route::get('/election', function ($id) {
                return view('dashboard.election.edit.edit_election', ['id' => $id]);
            })->name('dashboard.election.edit_election');

            Route::get('/candidate', function ($id) {
                return view('dashboard.election.edit.edit_candidate', ['id' => $id]);
            })->name('dashboard.election.edit_candidate');

            Route::get('/voter', function ($id) {
                return view('dashboard.election.edit.edit_voter', ['id' => $id]);
            })->name('dashboard.election.edit_voter');
        });

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
    });
});

Route::prefix('voter')->group(function () {
    Route::get('/', function () {
        return view('voter.index');
    })->name('dashboard.voter.index');
});

