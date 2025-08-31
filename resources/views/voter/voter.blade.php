@extends('layouts.voter')

@section('title', 'Voter')

@section('body')

<div class="px-4 sm:px-6">

    {{-- Alert --}}
    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 border border-green-400 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="mb-4 p-3 bg-red-100 border border-red-400 text-red-700 rounded">
            {{ session('error') }}
        </div>
    @endif

    <div class="mt-3 mb-6">
        <h2 class="text-2xl font-bold text-gray-800">{{ $election->title }}</h2>
        <p class="text-sm text-gray-500">{{ $election->description }}</p>
    </div>

    <!-- Time Card (countdown) -->
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
                        <div class="bg-gray-100 rounded-lg p-3 sm:p-4 text-center min-w-[80px] sm:min-w-[90px] bg-opacity-40 border border-gray-200">
                            <span id="days" class="block text-xl sm:text-2xl font-bold text-white">00</span>
                            <span class="text-xs sm:text-sm text-gray-100">Hari</span>
                        </div>
                        <div class="bg-gray-100 rounded-lg p-3 sm:p-4 text-center min-w-[80px] sm:min-w-[90px] bg-opacity-40 border border-gray-200">
                            <span id="hours" class="block text-xl sm:text-2xl font-bold text-white">00</span>
                            <span class="text-xs sm:text-sm text-gray-100">Jam</span>
                        </div>
                        <div class="bg-gray-100 rounded-lg p-3 sm:p-4 text-center min-w-[80px] sm:min-w-[90px] bg-opacity-40 border border-gray-200">
                            <span id="minutes" class="block text-xl sm:text-2xl font-bold text-white">00</span>
                            <span class="text-xs sm:text-sm text-gray-100">Menit</span>
                        </div>
                        <div class="bg-gray-100 rounded-lg p-3 sm:p-4 text-center min-w-[80px] sm:min-w-[90px] bg-opacity-40 border border-gray-200">
                            <span id="seconds" class="block text-xl sm:text-2xl font-bold text-white">00</span>
                            <span class="text-xs sm:text-sm text-gray-100">Detik</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

{{-- Kartu kandidat --}}
<div class="grid grid-cols-1 lg:grid-cols-4 gap-6 mb-8">
@forelse($candidates as $index => $candidate)
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
                    {{-- Visi Misi --}}

                    <!-- Main modal -->
                    <div id="default-modal{{ $index }}" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow-sm">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                                    <h3 class="text-xl font-semibold text-gray-900">
                                        Visi Misi {{ $candidate->name }}
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                        data-modal-hide="default-modal{{ $index }}">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    <h1 class="text-xl font-semibold">Visi</h1>
                                    <p class="ms-3 text-base leading-relaxed text-gray-500">
                                        {{ $candidate->vision }}
                                    </p>

                                    <h1 class="text-xl font-semibold">Misi</h1>
                                    <p class="ms-3 text-base leading-relaxed text-gray-500">
                                        {{ $candidate->mission }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button data-modal-target="default-modal{{ $index }}" data-modal-toggle="default-modal{{ $index }}"
                        class="px-10 py-2 text-sm font-semibold text-white bg-blue-600 rounded-full hover:bg-blue-700 transform hover:scale-105 transition-all duration-200 focus:ring-4 focus:ring-blue-300 focus:outline-none"
                        type="button">
                        Visi Misi
                    </button> 

                    <form action="{{ route('voter.vote.store', ['election'=>$election->id, 'candidate'=>$candidate->id]) }}" method="POST" class="" onsubmit="return confirm('Apakah anda yakin ingin memilih {{$candidate->name}}?')">
                        @csrf
                        <button type="submit" 
                            class="pick-btn px-10 py-2 text-sm font-semibold text-white rounded-full {{ $hasVoted ? 'bg-gray-400 cursor-not-allowed' : 'bg-blue-600 hover:bg-blue-700' }}"
                            >
                            Pilih
                        </button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
@empty
    <div class="text-gray-600">Belum ada kandidat untuk pemilihan ini.</div>
@endforelse
</div> 

{{-- JS countdown + modal --}}
<script>
document.addEventListener("DOMContentLoaded", function () {
    // === Countdown ===
    const countdownEl = document.querySelector("[data-countdown]");
    if (countdownEl) {
        const endDate = new Date(countdownEl.dataset.countdown).getTime();
        function updateCountdown() {
            const now = new Date().getTime();
            const distance = endDate - now;

            const d = document.getElementById("days");
            const h = document.getElementById("hours");
            const m = document.getElementById("minutes");
            const s = document.getElementById("seconds");

            if (distance < 0) {
                [d, h, m, s].forEach(el => el && (el.textContent = "00"));
                return;
            }

            const days    = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours   = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            if (d) d.textContent = String(days).padStart(2, '0');
            if (h) h.textContent = String(hours).padStart(2, '0');
            if (m) m.textContent = String(minutes).padStart(2, '0');
            if (s) s.textContent = String(seconds).padStart(2, '0');
        }
        updateCountdown();
        setInterval(updateCountdown, 1000);
    } 
});
</script>

@endsection
