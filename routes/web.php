<?php

use App\Http\Controllers\UserController;
use App\Models\User;
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


Route::middleware('guest')->group(function () {
    Route::redirect('/', '/login');
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'proses_login'])->name('login.submit');
    Route::get('/dashboard/login', [UserController::class, 'dashboard_login'])->name('dashboard.login');
    Route::post('/dashboard/login', [UserController::class, 'proses_dashboard_login'])->name('dashboard.login.submit');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');

    Route::prefix('dashboard')->middleware('role:' . User::ROLE_SUPERADMIN . "," . User::ROLE_ADMIN)->group(function () {

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

            Route::get('/edit', function () {
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

        Route::prefix('admins')->middleware('role:'. User::ROLE_SUPERADMIN)->group(function () {
            Route::get('/', [UserController::class, 'd'])->name('dashboard.admins.index');
            Route::get('/create', [UserController::class, 'd_create_admin'])->name('dashboard.admins.create');
            Route::post('/create', [UserController::class, 'd_store_admin'])->name('dashboard.admins.store');
            Route::get('/{user}/edit', [UserController::class, 'd_edit_admin'])->name('dashboard.admins.edit');
            Route::post('/{user}/edit', [UserController::class, 'd_update_admin'])->name('dashboard.admins.update');
            Route::delete('/{user}', [UserController::class, 'd_destroy'])->name('dashboard.admins.delete');
        });
    });

    Route::prefix('voter')->middleware('role:' . User::ROLE_USER)->group(function () {
        Route::get('/', function () {
            return view('voter.index');
        })->name('voter.index');
        Route::get('/vote_candidate', function () {
            return view('voter.voter');
        })->name('voter.voter');
    });
});