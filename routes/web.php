<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ElectionController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoteController;
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
    Route::get('/', function () {
        if (Auth::user()->role == User::ROLE_USER) {
            return redirect('/voter');
        } else {
            return redirect('/dashboard');

        }
    });
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');

    Route::prefix('dashboard')->middleware('role:' . User::ROLE_SUPERADMIN . "," . User::ROLE_ADMIN)->group(function () {

        Route::get('/', function () {
            return view('dashboard.dashboard');
        })->name('dashboard.index');

        Route::prefix('elections')->group(function () {
            Route::get('/', [ElectionController::class, 'index'])->name('dashboard.elections.index');

            Route::get('/create', [ElectionController::class, 'create'])->name('dashboard.elections.create');
            Route::post('/create', [ElectionController::class, 'store'])->name('dashboard.elections.store');

            Route::get('/edit', function () {
                return view('dashboard.elections.edit');
            })->name('dashboard.elections.edit');

            Route::get('/{election}/edit', [ElectionController::class, 'edit'])->name('dashboard.elections.edit');
            Route::post('/{election}/edit', [ElectionController::class, 'update'])->name('dashboard.elections.update');

            Route::get('/{election}/show', [ElectionController::class, 'show'])->name('dashboard.elections.show');  
            Route::patch('/{election}/start', [ElectionController::class, 'start'])->name('elections.elections.start');
            Route::patch('/{election}/close', [ElectionController::class, 'close'])->name('elections.elections.close');

            Route::get('/{election}/voter', [ElectionController::class, 'show_pemilih'])->name('dashboard.election.show_voter');
            
            Route::get('/{election}/show/{candidate}/create', [CandidateController::class, 'create'])->name('dashboard.candidates.create');
            Route::post('/{election}/show/{candidate}/create', [CandidateController::class, 'store'])->name('dashboard.candidates.store');
            Route::delete('/{election}/show/{candidate}/delete', [CandidateController::class, 'destroy'])->name('dashboard.candidates.delete');
            
            // CREATE (di dalam show)
            Route::prefix('{id}/create')->group(function () {
                Route::get('/candidate', function ($id) {
                    return view('dashboard.elections.create.create_candidate', ['id' => $id]);
                })->name('dashboard.elections.create_candidate');

                Route::get('/voter', function ($id) {
                    return view('dashboard.elections.create.create_voter', ['id' => $id]);
                })->name('dashboard.elections.create_voter');
            });

            // EDIT (di dalam show)
            Route::prefix('{id}/edit')->group(function () {
                Route::get('/election', function ($id) {
                    return view('dashboard.elections.edit.edit_election', ['id' => $id]);
                })->name('dashboard.elections.edit_election');

                Route::get('/candidate', function ($id) {
                    return view('dashboard.elections.edit.edit_candidate', ['id' => $id]);
                })->name('dashboard.elections.edit_candidate');

                Route::get('/voter', function ($id) {
                    return view('dashboard.elections.edit.edit_voter', ['id' => $id]);
                })->name('dashboard.elections.edit_voter');
            });

        });

        Route::get('/profile', [UserController::class, 'update_profile'])->name('dashboard.profile.index');
        Route::post('/profile', [UserController::class, 'proses_update_profile'])->name('dashboard.profile.update');

        Route::prefix('admins')->middleware('role:' . User::ROLE_SUPERADMIN)->group(function () {
            Route::get('/', [UserController::class, 'd'])->name('dashboard.admins.index');
            Route::get('/create', [UserController::class, 'd_create_admin'])->name('dashboard.admins.create');
            Route::post('/create', [UserController::class, 'd_store_admin'])->name('dashboard.admins.store');
            Route::get('/{user}/edit', [UserController::class, 'd_edit_admin'])->name('dashboard.admins.edit');
            Route::post('/{user}/edit', [UserController::class, 'd_update_admin'])->name('dashboard.admins.update');
            Route::delete('/{user}', [UserController::class, 'd_destroy'])->name('dashboard.admins.delete');
        });
    });

    Route::prefix('voter')->middleware('role:' . User::ROLE_USER)->group(function () {
        Route::get('/', [LandingController::class, 'index'])->name('voter.index');
        Route::get('/{election}', [LandingController::class, 'show'])->name('voter.voter');

        // Vote – memakai binding: {election} + {candidate}
        Route::post('/vote/{election}/{candidate}', [VoteController::class, 'store'])
            ->name('vote.store');
    });
});