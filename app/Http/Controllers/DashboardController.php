<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Election;
use App\Models\User;
use App\Models\Vote;

class DashboardController extends Controller
{
    public function index()
    {
        $elections = Election::all();
        $users = User::where('role', User::ROLE_USER)->get();
        $voted = Vote::all();

        return view('dashboard.dashboard', compact('elections', 'users', 'voted'));
    }
}
