@extends('layouts.app')

@section('title', 'Detail Pemilihan')

@section('content')

    @include('dashboard.election.customize.banner')


    <div class="mb-3 ">
        <ul
            class="flex text-sm font-medium text-center text-gray-500 rounded-lg shadow-sm dark:divide-gray-700 dark:text-gray-400">
            <li class="w-full focus-within:z-10">
                <a href="/#"
                    class="inline-block w-full p-4 font-semibold text-white bg-gradient-to-r from-blue-600 to-blue-400 rounded-s-lg shadow-md dark:from-blue-600 dark:to-indigo-700"
                    aria-current="page">
                    Kandidat
                </a>
            </li>
            <li class="w-full focus-within:z-10">
                <a href="{{ route('dashboard.election.show_voter', $election->id) }}"
                    class="inline-block w-full p-4 bg-white border-s-0 border-gray-200 dark:border-gray-700 rounded-e-lg hover:text-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    Pemilih
                </a>
            </li>
        </ul>
    </div> 

    <div class="mb-3 me-2">
        <a href="/#"
            class="inline-flex items-center px-3 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg shadow hover:bg-blue-700 transition">
            <i class="ri-add-line mr-1 text-lg"></i>
            Tambah Data
        </a>
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
                            <button data-modal-target="default-modal{{ $candidate->id }}" data-modal-toggle="default-modal{{ $candidate->id }}"
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