@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    @if (session('success'))
        <div class="" id="alert-success">
            <div class="p-4 flex justify-between bg-green-100 border border-green-400 text-green-700 rounded-lg">
                <span>{{ session('success') }}</span>
                <span><i class="ri-close-line text-lg cursor-pointer" data-dismiss-target="#alert-success"></i></span>
            </div>
        </div>
    @endif

    <div class="mt-3 mb-6">
        <h2 class="text-2xl font-bold text-gray-800">@yield('title')</h2>
        <p class="text-sm text-gray-500">Ringkasan data pemilihan</p>
    </div>

    {{-- Statistik Cards --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

        <div class="bg-white rounded-2xl shadow p-6 flex items-center space-x-4 hover-scale w-full">
            <div class="px-3 py-2 bg-green-100 rounded-full">
                <i class="ri-team-line text-2xl text-green-600"></i>
            </div>
            <div class="flex-1">
                <p class="text-sm text-gray-500">Total Pemilihan</p>
                <h2 class="text-2xl font-bold text-gray-800">{{$elections->count()}}</h2>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow p-6 flex items-center space-x-4 hover-scale w-full">
            <div class="px-3 py-2 bg-blue-100 rounded-full">
                <i class="ri-user-3-line text-2xl text-blue-600"></i>
            </div>
            <div class="flex-1">
                <p class="text-sm text-gray-500">Total Pemilih</p>
                <h2 class="text-2xl font-bold text-gray-800">{{$users->count()}}</h2>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow p-6 flex items-center space-x-4 hover-scale w-full">
            <div class="px-3 py-2 bg-purple-100 rounded-full">
                <span class="material-symbols-outlined text-2xl text-purple-600">
                    how_to_vote
                </span>
            </div>
            <div class="flex-1">
                <p class="text-sm text-gray-500">Suara Masuk</p>
                <h2 class="text-2xl font-bold text-gray-800">{{$voted->count()}}</h2>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow p-6 flex items-center space-x-4 hover-scale w-full">
            <div class="px-3 py-2 bg-yellow-100 rounded-full">
                <i class="ri-pie-chart-2-line text-2xl text-yellow-600"></i>
            </div>
            @php
                $totalUsers = $users->count();
                $totalVoted = $voted->count();
                $participation = $totalUsers > 0 ? round(($totalVoted / $totalUsers) * 100, 1) : 0;
            @endphp

            <div class="flex-1">
                <p class="text-sm text-gray-500">Partisipasi</p>
                <h2 class="text-2xl font-bold text-gray-800">{{$participation}}%</h2>
            </div>
        </div>
    </div>


@endsection
