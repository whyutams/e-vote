@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8 mt-14">
    <div class="glass-card p-6 lg:col-span-2 hover-scale">
        <canvas id="voteChart" height="250"></canvas>
    </div>
    <div class="glass-card p-6 hover-scale">
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
            labels: ['Candidate A', 'Candidate B', 'Candidate C'],
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
