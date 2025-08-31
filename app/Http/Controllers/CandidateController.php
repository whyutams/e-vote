<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Election;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Election $election)
    {
        return "view dashboard candidate index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Election $election)
    {

        return "view dashboard candidate create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Election $election)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'vision' => 'nullable|string',
            'mission' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('candidates', 'public');
        }

        $validated['election_id'] = $election->id;
        $validated['added_by'] = Auth::id();

        Candidate::create($validated);
    }

    /**
     * Display the specified resource.
     */
    public function show(Candidate $candidate)
    {
        return "view dashboard candidate show";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Election $election, Candidate $candidate)
    {

        return "view dashboard candidate edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Election $election, Candidate $candidate)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'vision' => 'nullable|string',
            'mission' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            if ($candidate->photo && Storage::disk('public')->exists($candidate->photo)) {
                Storage::disk('public')->delete($candidate->photo);
            }
            $validated['photo'] = $request->file('photo')->store('candidates', 'public');
        }

        $validated['updated_by'] = Auth::id();

        $candidate->update($validated);

        return redirect()->route('elections.candidates.index', $election->id)
            ->with('success', 'Kandidat berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Election $election, Candidate $candidate)
    {
        if ($candidate->photo && Storage::disk('public')->exists($candidate->photo)) {
            Storage::disk('public')->delete($candidate->photo);
        }

        $candidate->delete();

        return redirect()->route('dashboard.elections.show', $election->id)
            ->with('success', 'Kandidat berhasil dihapus.');
    }
}
