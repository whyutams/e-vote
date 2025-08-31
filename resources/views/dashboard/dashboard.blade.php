@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    @if (session('success'))
        <div class="px-5 pt-5" id="alert-success">
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
                <h2 class="text-2xl font-bold text-gray-800">3</h2>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow p-6 flex items-center space-x-4 hover-scale w-full">
            <div class="px-3 py-2 bg-blue-100 rounded-full">
                <i class="ri-user-3-line text-2xl text-blue-600"></i>
            </div>
            <div class="flex-1">
                <p class="text-sm text-gray-500">Total Pemilih</p>
                <h2 class="text-2xl font-bold text-gray-800">1,250</h2>
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
                <h2 class="text-2xl font-bold text-gray-800">970</h2>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow p-6 flex items-center space-x-4 hover-scale w-full">
            <div class="px-3 py-2 bg-yellow-100 rounded-full">
                <i class="ri-pie-chart-2-line text-2xl text-yellow-600"></i>
            </div>
            <div class="flex-1">
                <p class="text-sm text-gray-500">Partisipasi</p>
                <h2 class="text-2xl font-bold text-gray-800">77.6%</h2>
            </div>
        </div>
    </div>

    {{-- Dropdown --}}
    <div class="bg-white rounded-2xl col-span-4 shadow p-4 flex justify-center items-center space-x-4 w-full mb-8">
        <form class="max-w-sm w-full mx-auto">
            <label for="countries" class="block text-sm text-center mb-2 font-medium text-gray-900">Data Statistik</label>
            <select id="countries"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option selected>Pilih Pemilihan</option>
                <option value="US">Pemilihan Ketua OSIS</option>
                <option value="CA">Pemilihan Ketua Pramuka</option>
                <option value="FR">Pemilihan Ketua PIK-R</option>
            </select>
        </form>
    </div>

    {{-- Charts --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="glass-card p-6 hover-scale w-full">
            <div class="relative w-full h-64 md:h-80">
                <canvas id="voteChart"></canvas>
            </div>
        </div>

        <div class="glass-card p-6 hover-scale w-full">
            <h3 class="font-semibold mb-4">Timeline Pemungutan Suara</h3>
            <div class="relative w-full h-64 md:h-80">
                <canvas id="timelineChart"></canvas>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Vote Distribution Chart
            const ctx1 = document.getElementById('voteChart').getContext('2d');
            new Chart(ctx1, {
                type: 'bar',
                data: {
                    labels: ['Nomor Urut 1', 'Nomor Urut 2', 'Nomor Urut 3'],
                    datasets: [{
                        label: 'Data',
                        data: [300, 150, 100],
                        backgroundColor: [
                            'rgba(59, 130, 246, 0.7)',
                            'rgba(16, 185, 129, 0.7)',
                            'rgba(239, 68, 68, 0.7)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });

            // Voting Timeline Chart
            const ctx2 = document.getElementById('timelineChart').getContext('2d');
            new Chart(ctx2, {
                type: 'line',
                data: {
                    labels: ['08:00', '10:00', '12:00', '14:00', '16:00'],
                    datasets: [{
                        label: 'Data',
                        data: [200, 80, 120, 180, 120],
                        fill: true,
                        borderColor: 'rgba(59, 130, 246, 1)',
                        backgroundColor: 'rgba(59, 130, 246, 0.2)',
                        tension: 0.3
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });
        });
    </script>
@endpush