<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function store($election_id, $candidate_id)
    {
        $userId = auth()->id();

        // Cek apakah user sudah vote sebelumnya
        $alreadyVoted = Vote::where('election_id', $election_id)
            ->where('user_id', $userId)
            ->exists();

        if ($alreadyVoted) {
            return redirect()->back()->with('error', 'Anda sudah memberikan suara di pemilihan ini.');
        }

        // Simpan vote
        Vote::create([
            'election_id'  => $election_id,
            'candidate_id' => $candidate_id,
            'user_id'      => $userId,
        ]);

        return redirect()->back()->with('success', 'Suara Anda berhasil disimpan!');
    }
}
