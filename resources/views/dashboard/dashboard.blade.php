@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-4 gap-6 mb-8">

    <div class="bg-white rounded-2xl shadow p-6 flex items-center space-x-4 hover-scale">
        <div class="p-3 bg-green-100 rounded-full">
            <i class="ri-team-line text-2xl text-green-600"></i>
        </div>
        <div>
            <p class="text-sm text-gray-500">Total Kandidat</p>
            <h2 class="text-2xl font-bold text-gray-800">3</h2>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow p-6 flex items-center space-x-4 hover-scale">
        <div class="p-3 bg-blue-100 rounded-full">
            <i class="ri-user-3-line text-2xl text-blue-600"></i>
        </div>
        <div>
            <p class="text-sm text-gray-500">Total Pemilih</p>
            <h2 class="text-2xl font-bold text-gray-800">1,250</h2>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow p-6 flex items-center space-x-4 hover-scale">
        <div class="p-3 bg-purple-100 rounded-full">
            {{-- <i class="ri-inbox-archive-fill text-2xl text-purple-600"></i> --}}
            <svg xmlns="http://www.w3.org/2000/svg" height="34px" viewBox="0 -960 960 960" width="28px" fill="#8C1AF6"><path d="M186.67-80q-27 0-46.84-19.83Q120-119.67 120-146.67v-192.66l126.67-141 47.66 47.66-105.33 116h582L671-430l47.67-47.67L840-339.33v192.66q0 27-19.83 46.84Q800.33-80 773.33-80H186.67Zm0-66.67h586.66V-250H186.67v103.33ZM436.33-385l-153-153Q263-558.33 264.5-585.17q1.5-26.83 21.17-46.5l206.66-206.66q18.96-18.71 46.98-19.52 28.02-.82 47.69 18.85l153 153q19 19 19.67 45.67.66 26.66-20.34 47.66l-208 208q-19 19-46.83 19.5T436.33-385Zm251-256-147-147-204.66 204.67 147 147L687.33-641ZM186.67-146.67V-250v103.33Z"/></svg>
        </div>
        <div>
            <p class="text-sm text-gray-500">Suara Masuk</p>
            <h2 class="text-2xl font-bold text-gray-800">970</h2>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow p-6 flex items-center space-x-4 hover-scale">
        <div class="p-3 bg-yellow-100 rounded-full">
            <i class="ri-pie-chart-2-line text-2xl text-yellow-600"></i>
        </div>
        <div>
            <p class="text-sm text-gray-500">Partisipasi</p>
            <h2 class="text-2xl font-bold text-gray-800">77.6%</h2>
        </div>
    </div>

    <div class="glass-card p-6 lg:col-span-2 hover-scale">
        <canvas id="voteChart" height="250"></canvas>
    </div>

    <div class="glass-card p-6 lg:col-span-2 hover-scale">
        <h3 class="font-semibold mb-4">Voting Timeline</h3>
        <canvas id="timelineChart" height="250"></canvas>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Vote Distribution Chart
    const ctx1 = document.getElementById('voteChart').getContext('2d');
    new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ['Nomor Urut 1', 'Nomor Urut 2', 'Nomor Urut 3'],
            datasets: [{
                label: 'Votes',
                data: [300, 150, 100],
                backgroundColor: [
                    'rgba(59, 130, 246, 0.7)',
                    'rgba(16, 185, 129, 0.7)',
                    'rgba(239, 68, 68, 0.7)'
                ],
                borderWidth: 1
            }]
        },
    });

    // Voting Timeline Chart
    const ctx2 = document.getElementById('timelineChart').getContext('2d');
    new Chart(ctx2, {
        type: 'line',
        data: {
            labels: ['08:00', '10:00', '12:00', '14:00', '16:00'],
            datasets: [{
                label: 'Votes Cast',
                data: [20, 50, 120, 180, 220],
                fill: true,
                borderColor: 'rgba(59, 130, 246, 1)',
                backgroundColor: 'rgba(59, 130, 246, 0.2)',
                tension: 0.3
            }]
        },
    });
});
</script>
@endpush
