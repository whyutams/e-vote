@extends('layouts.voter')

@section('title', 'Voter')

@section('body')

    <div class="px-4 sm:px-6">

        <div class="mt-3 mb-6">
            <h2 class="text-2xl font-bold text-gray-800">{{ $election->title }}</h2>
            <p class="text-sm text-gray-500">{{ $election->description }}</p>
        </div>

        {{-- Countdown sama persis dengan punyamu --}}
        @include('partials.countdown', ['election' => $election])

    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 mb-8">
        @forelse($candidates as $candidate)
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
                            {{-- Tombol Visi Misi --}}
                            @include('dashboard.election.customize.visi-misi')

                            <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                                class="px-10 py-2 text-sm font-semibold text-white bg-blue-600 rounded-full hover:bg-blue-700 transform hover:scale-105 transition-all duration-200 focus:ring-4 focus:ring-blue-300 focus:outline-none"
                                type="button">
                                Visi Misi
                            </button>

                            {{-- Form Vote --}}
                            <form method="POST" action="{{ route('vote.store', [$election->id, $candidate->id]) }}"
                                class="vote-form">
                                @csrf
                                <button
                                    type="submit"
                                    class="vote-btn px-10 py-2 text-sm font-semibold text-white bg-blue-600 rounded-full hover:bg-blue-700 transform hover:scale-105 transition-all duration-200 focus:ring-4 focus:ring-blue-300 focus:outline-none">
                                    Pilih
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div>
                <p class="text-gray-600">Belum ada kandidat untuk pemilihan ini.</p>
            </div>
        @endforelse
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const voteForms = document.querySelectorAll(".vote-form");
            voteForms.forEach(form => {
                form.addEventListener("submit", function (e) {
                    e.preventDefault();

                    // Konfirmasi vote
                    if (!confirm("Apakah anda yakin ingin memilih kandidat ini? Pilihan tidak dapat diubah.")) {
                        return;
                    }

                    // Submit form
                    fetch(form.action, {
                        method: "POST",
                        body: new FormData(form),
                        headers: {
                            "X-Requested-With": "XMLHttpRequest",
                            "X-CSRF-TOKEN": form.querySelector("[name=_token]").value
                        }
                    })
                        .then(res => {
                            if (!res.ok) throw new Error("Gagal menyimpan vote");
                            return res.json();
                        })
                        .then(data => {
                            // Disable semua tombol pilih
                            document.querySelectorAll(".vote-btn").forEach(btn => {
                                btn.disabled = true;
                                btn.classList.remove("bg-blue-600", "hover:bg-blue-700");
                                btn.classList.add("bg-gray-400", "cursor-not-allowed");
                                btn.textContent = "Sudah Memilih";
                            });
                            alert("Terima kasih, suara anda sudah tersimpan.");
                        })
                        .catch(err => {
                            console.error(err);
                            alert("Terjadi kesalahan saat memilih.");
                        });
                });
            });
        });
    </script>

@endsection
