@extends('layouts.voter')

@section('title', 'Voter')

@section('body')

    @if (session('success'))
        <div class="mb-6" id="alert-success">
            <div class="p-4 flex justify-between bg-green-100 border border-green-400 text-green-700 rounded-lg">
                <span>{{ session('success') }}</span>
                <span><i class="ri-close-line text-lg cursor-pointer" data-dismiss-target="#alert-success"></i></span>
            </div>
        </div>
    @endif

    <div class="grid md:grid-cols-2 lg:grid-cols-4 grid-cols-1 justify-center items-center gap-6 mb-8">
        <!-- Card -->
        @forelse ($candidates as $electionId => $candidateGroup)
            @php
                $election = $candidateGroup->first()->election;
            @endphp

            <script>
                let test = "{{$election->id}}";
                alert(test)
            </script>
            <div
                class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden min-h-[500px]">
                <div class="p-6">
                    <div class="flex flex-col items-center">
                        <h5 class="text-center mb-7 mt-3 text-3xl font-bold text-gray-700">
                            {{ $election->title }}
                        </h5>

                        <div
                            class="flex flex-col md:flex-row justify-center items-center gap-6 mb-6 bg-gray-100 p-4 rounded-lg w-full">
                            <!-- Kolom kiri -->
                            <div class="text-center w-2/4">
                                <h6 class="mb-1 font-bold text-lg text-center text-gray-700">Waktu Pemilihan</h6>
                                <p class="mb-1 text-center font-normal text-gray-700">
                                    {{ \Carbon\Carbon::parse($election->start_date)->format('Y-m-d H:i') }} -
                                    {{ \Carbon\Carbon::parse($election->end_date)->format('Y-m-d H:i') }}
                                </p>
                            </div>

                            <!-- Kolom kanan -->
                            <div class="text-center">
                                <h6 class="mb-2 font-bold text-lg text-center text-gray-700">Status</h6>
                                <span
                                    class="{{ $election->status == 'draft' ? 'bg-blue-100 text-blue-800' : ($election->status == 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800') }} text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm">
                                    {{ $election->status == 'draft' ? 'Belum dimulai' : ($election->status == 'active' ? 'Sedang berlangsung' : 'Ditutup') }}
                                </span>
                            </div>
                        </div>

                        <div class="mb-4">
                            <p>{{ $election->description }}</p>
                        </div>

                        <div class="w-16 h-1 bg-blue-500 rounded-full mb-4"></div>

                        <div class="flex items-center gap-3">
                            <a class="px-20 py-2 text-sm font-semibold text-white bg-blue-600 rounded-full hover:bg-blue-700 transform hover:scale-105 transition-all duration-200 focus:ring-4 focus:ring-blue-300 focus:outline-none"
                                href="{{ route('voter.voter', ['election' => $election->id]) }}">
                                Lihat
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            </div>
            <p class="text-center text-gray-500">Pemilihan belum tersedia.</p>
        @endforelse
@endsection