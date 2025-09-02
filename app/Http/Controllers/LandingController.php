<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Election;
use App\Models\Vote;

class LandingController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $candidates = Candidate::with(['election', 'creator', 'updater', 'votes'])
            ->where('election_id', $user->election_id)  
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

        $userId = auth()->id();

        $myVote = Vote::where('election_id', $election->id)
            ->where('user_id', $userId)
            ->first();

        $hasVoted = (bool) $myVote;
        $myCandidateId = $myVote?->candidate_id;

        $isVotingOpen = now()->between($election->start_date, $election->end_date);

        return view('voter.voter', compact(
            'election',
            'candidates',
            'hasVoted',
            'myCandidateId',
            'isVotingOpen'
        ));
    }
}
