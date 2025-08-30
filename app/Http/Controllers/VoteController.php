<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Election;
use App\Models\Vote;
use Auth;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Election $election, Candidate $candidate)
    {
        $existingVote = Vote::where('election_id', $election->id)
            ->where('user_id', Auth::id())
            ->first();

        if ($existingVote) {
            return redirect()->back()->with('error', 'Anda sudah memberikan suara di election ini.');
        }

        Vote::create([
            'election_id' => $election->id,
            'candidate_id' => $candidate->id,
            'user_id' => Auth::id(),
        ]);

        return redirect()->back()->with('success', 'Vote berhasil diberikan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vote $vote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vote $vote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vote $vote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Election $election, Candidate $candidate)
    {
        $vote = Vote::where('election_id', $election->id)
            ->where('candidate_id', $candidate->id)
            ->where('user_id', Auth::id())
            ->first();

        if (!$vote) {
            return redirect()->back()->with('error', 'Vote tidak ditemukan.');
        }

        $vote->delete();

        return redirect()->back()->with('success', 'Vote berhasil dihapus.');
    }
}
