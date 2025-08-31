<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Election;
use App\Models\Vote;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $candidates = Candidate::with(['election', 'creator', 'updater', 'votes'])
            ->oldest()
            ->get()
            ->groupBy('election_id');

        return view('voter.index', compact('candidates'));
    }

    public function show(Election $election)
    {
        $candidates = Candidate::with(['election', 'creator', 'updater', 'votes'])
            ->where('election_id', $election->id)
            ->get();

        // cek apakah user sudah pernah vote di election ini
        $hasVoted = Vote::where('election_id', $election->id)
            ->where('user_id', auth()->id())
            ->exists();

        return view('voter.voter', compact('election', 'candidates', 'hasVoted'));
    }
}
