@extends('layouts.voter')

@section('title', 'Voter')

@section('body')

    <div class="px-4 sm:px-6">

        <div class="mt-3 mb-6">
            <h2 class="text-2xl font-bold text-gray-800">{{ $election->title }}</h2>
            <p class="text-sm text-gray-500">{{ $election->description }}</p>
        </div>

        <!-- Time Card -->
        <div class="mb-8">
            <div class="bg-gradient-to-r from-blue-600 to-blue-400 rounded-xl shadow-lg overflow-hidden">
                <div class="p-4 sm:p-6">
                    <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                        <div class="text-white text-center md:text-left">
                            <h3 class="text-xl font-semibold mb-2">Waktu Pemilihan</h3>
                            <p class="text-blue-100 text-sm sm:text-base">
                                {{ \Carbon\Carbon::parse($election->start_date)->format('d M Y H:i') }} -
                                {{ \Carbon\Carbon::parse($election->end_date)->format('d M Y H:i') }}
                            </p>
                            <p class="text-blue-100 text-xs sm:text-sm">
                                Pastikan anda memilih sebelum waktu berakhir
                            </p>
                        </div>

                        <!-- Countdown -->
                        <div class="flex flex-wrap justify-center gap-3 sm:gap-4"
                            data-countdown="{{ $election->end_date }}">
                            <div
                                class="bg-gray-100 rounded-lg p-3 sm:p-4 text-center min-w-[80px] sm:min-w-[90px] backdrop-filter backdrop-blur-sm bg-opacity-40 border border-gray-200">
                                <span id="days" class="block text-xl sm:text-2xl font-bold text-white">00</span>
                                <span class="text-xs sm:text-sm text-gray-100">Hari</span>
                            </div>
                            <div
                                class="bg-gray-100 rounded-lg p-3 sm:p-4 text-center min-w-[80px] sm:min-w-[90px] backdrop-filter backdrop-blur-sm bg-opacity-40 border border-gray-200">
                                <span id="hours" class="block text-xl sm:text-2xl font-bold text-white">00</span>
                                <span class="text-xs sm:text-sm text-gray-100">Jam</span>
                            </div>
                            <div
                                class="bg-gray-100 rounded-lg p-3 sm:p-4 text-center min-w-[80px] sm:min-w-[90px] backdrop-filter backdrop-blur-sm bg-opacity-40 border border-gray-200">
                                <span id="minutes" class="block text-xl sm:text-2xl font-bold text-white">00</span>
                                <span class="text-xs sm:text-sm text-gray-100">Menit</span>
                            </div>
                            <div
                                class="bg-gray-100 rounded-lg p-3 sm:p-4 text-center min-w-[80px] sm:min-w-[90px] backdrop-filter backdrop-blur-sm bg-opacity-40 border border-gray-200">
                                <span id="seconds" class="block text-xl sm:text-2xl font-bold text-white">00</span>
                                <span class="text-xs sm:text-sm text-gray-100">Detik</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const countdownEl = document.querySelector("[data-countdown]");
                if (!countdownEl) return;

                const endDate = new Date(countdownEl.dataset.countdown).getTime();

                function updateCountdown() {
                    const now = new Date().getTime();
                    const distance = endDate - now;

                    if (distance < 0) {
                        document.getElementById("days").textContent = "00";
                        document.getElementById("hours").textContent = "00";
                        document.getElementById("minutes").textContent = "00";
                        document.getElementById("seconds").textContent = "00";
                        return;
                    }

                    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    document.getElementById("days").textContent = String(days).padStart(2, '0');
                    document.getElementById("hours").textContent = String(hours).padStart(2, '0');
                    document.getElementById("minutes").textContent = String(minutes).padStart(2, '0');
                    document.getElementById("seconds").textContent = String(seconds).padStart(2, '0');
                }

                updateCountdown();
                setInterval(updateCountdown, 1000);
            });
        </script>

    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 mb-8">
        @forelse($candidates as $index => $candidate)
            <!-- Card -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                <div class="p-6">
                    <div class="flex flex-col items-center">
                        <div class="w-34 h-34 mb-4 rounded-2xl overflow-hidden border-4 border-blue-500 shadow-md">
                            <img class="w-full h-full object-cover"
                                src="@if(!$candidate->photo) https://placehold.co/400 @else {{ asset('storage/' . $candidate->photo) }} @endif"
                                alt="kandidat" />
                        </div>

                        <h5 class="mb-3 text-2xl font-bold text-gray-700">
                            {{ $candidate->name }}
                        </h5>

                        <div class="w-16 h-1 bg-blue-500 rounded-full mb-4"></div>

                        <div class="flex items-center gap-3">
                            @include('dashboard.election.customize.visi-misi')
                            <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                                class="px-10 py-2 text-sm font-semibold text-white bg-blue-600 rounded-full hover:bg-blue-700 transform hover:scale-105 transition-all duration-200 focus:ring-4 focus:ring-blue-300 focus:outline-none"
                                type="button">
                                Visi Misi
                            </button>
                            <button
                                class="px-10 py-2 text-sm font-semibold text-white bg-blue-600 rounded-full hover:bg-blue-700 transform hover:scale-105 transition-all duration-200 focus:ring-4 focus:ring-blue-300 focus:outline-none"
                                type="button">
                                Pilih
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div>
        @endforelse


@endsection