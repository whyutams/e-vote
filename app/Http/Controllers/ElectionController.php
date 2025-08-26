<?php

namespace App\Http\Controllers;

use App\Models\Election;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ElectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "view dashboard election index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check() && Auth::user()->role != User::ROLE_ADMIN) {
            return abort('404', 'NOT FOUND');
        }

        return "view dashboard election create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::check() && Auth::user()->role != User::ROLE_ADMIN) {
            return abort('404', 'NOT FOUND');
        }

        $validated = $request->validate([
            'title' => 'required|string|max:150|unique:elections,title',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'status' => 'nullable|in:draft,active,closed',
        ]);

        $validated['added_by'] = Auth::id();

        Election::create($validated);

        return redirect()->route('dashboard.elections.index')
            ->with('success', 'Election berhasil dibuat.');
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
