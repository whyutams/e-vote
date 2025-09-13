<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Election;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoteController extends Controller
{
    public function store(Request $request, Election $election, Candidate $candidate)
    {
        $userId = $request->user()->id;

        if ($candidate->election_id !== $election->id) {
            return back()->with('error', 'Kandidat tidak valid untuk pemilihan ini.');
        }

        if (!now()->between($election->start_date, $election->end_date)) {
            return back()->with('error', 'Waktu pemilihan belum mulai atau sudah berakhir.');
        }

        $already = Vote::where('election_id', $election->id)
            ->where('user_id', $userId)
            ->exists();

        if ($already) {
            return back()->with('error', 'Anda sudah memberikan suara di pemilihan ini.');
        }

        try {
            DB::transaction(function () use ($election, $candidate, $userId) {
                Vote::create([
                    'election_id' => $election->id,
                    'candidate_id' => $candidate->id,
                    'user_id' => $userId,
                ]);
            });
        } catch (\Throwable $e) {
            return back()->with('error', 'Gagal menyimpan suara. Silakan coba lagi.');
        }

        return back()->with('success', 'Suara Anda berhasil disimpan!');
    }
}
