<?php

namespace App\Http\Controllers;

use App\Models\Election;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ElectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $elections = Election::all();

        return view('dashboard.election.index', compact('elections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
        return view('dashboard.election.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {

            $election = \App\Models\Election::create([
                'title' => $request->title,
                'description' => $request->description,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'added_by' => auth()->id(),
            ]);

            foreach ($request->candidates as $c) {
                $photoPath = null;
                if (isset($c['photo'])) {
                    $photoPath = $c['photo']->store('candidates', 'public');
                }

                \App\Models\Candidate::create([
                    'election_id' => $election->id,
                    'name' => $c['name'],
                    'vission' => $c['vission'],
                    'mission' => $c['mission'],
                    'photo' => $photoPath,
                    'added_by' => auth()->id(),
                ]);
            }

            foreach ($request->users as $u) {
                \App\Models\User::create([
                    'fullname' => $u['fullname'],
                    'nomor_identitas' => $u['nomor_identitas'],
                    'phone' => $u['phone'],
                    'password' => bcrypt('default123'), // generate password
                    'role' => User::ROLE_USER,
                ]);
            }
        });

        return redirect()->route('dashboard.election.index')
            ->with('success', 'Data pemilihan berhasil ditambahkan!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Election $election)
    {
        return "view dashboard election show";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Election $election)
    {
        if (Auth::check() && Auth::user()->role != User::ROLE_ADMIN) {
            return abort('404', 'NOT FOUND');
        }

        return "view dashboard election edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Election $election)
    {
        if (Auth::check() && Auth::user()->role != User::ROLE_ADMIN) {
            return abort('404', 'NOT FOUND');
        }

        $validated = $request->validate([
            'title' => 'required|string|max:150|unique:elections,title,' . $election->id,
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'status' => 'nullable|in:draft,active,closed',
        ]);

        $validated['updated_by'] = Auth::id();

        $election->update($validated);

        return redirect()->route('dashboard.elections.index')
            ->with('success', 'Election berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Election $election)
    {
        if (Auth::check() && Auth::user()->role != User::ROLE_ADMIN) {
            return abort('404', 'NOT FOUND');
        }

        $election->delete();

        return redirect()->route('dashboard.elections.index')
            ->with('success', 'Election berhasil dihapus.');
    }
}
