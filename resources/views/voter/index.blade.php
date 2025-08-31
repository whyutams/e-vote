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

    <div class="flex flex-col md:flex-row justify-center items-center gap-6 mb-8">
        <!-- Card -->
        <div
            class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden dark:bg-gray-800">
            <div class="p-6">
                <div class="flex flex-col items-center">

                    <h5 class="text-center mb-7 mt-3 text-3xl font-bold text-gray-700 dark:text-white">
                        Pemilihan Ketua & Wakil Ketua OSIS
                    </h5>

                    <h6 class="mb-1 font-bold text-lg text-center text-gray-700 dark:text-gray-400">Waktu Pemilihan</h6>
                    <p class="mb-1 text-center font-normal text-gray-700 dark:text-gray-400">2025-05-12</p>
                    <p class="mb-4 text-center font-normal text-gray-700 dark:text-gray-400">08:00:00 - 10:00:00</p>

                    <h6 class="mb-2 font-bold text-lg text-center text-gray-700 dark:text-gray-400">Status Pemilihan</h6>
                    <span class="bg-green-100 text-green-800 mb-4 text-lg font-medium px-2.5 py-0.5 rounded-lg">aktif</span>
                    <div class="w-16 h-1 bg-blue-500 rounded-full mb-4"></div>

                    <div class="flex items-center gap-3">
                        <a class="px-20 py-2 text-sm font-semibold text-white bg-blue-600 rounded-full hover:bg-blue-700 transform hover:scale-105 transition-all duration-200 focus:ring-4 focus:ring-blue-300 focus:outline-none"
                            href="{{ route('voter.voter') }}">
                            Lihat
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden dark:bg-gray-800">
            <div class="p-6">
                <div class="flex flex-col items-center">

                    <h5 class="text-center mb-7 mt-3 text-3xl font-bold text-gray-700 dark:text-white">
                        Pemilihan Ketua & Wakil Ketua OSIS
                    </h5>

                    <h6 class="mb-1 font-bold text-lg text-center text-gray-700 dark:text-gray-400">Waktu Pemilihan</h6>
                    <p class="mb-1 text-center font-normal text-gray-700 dark:text-gray-400">2025-05-12</p>
                    <p class="mb-4 text-center font-normal text-gray-700 dark:text-gray-400">08:00:00 - 10:00:00</p>

                    <h6 class="mb-2 font-bold text-lg text-center text-gray-700 dark:text-gray-400">Status Pemilihan</h6>
                    <span class="bg-red-100 text-red-800  mb-4 text-lg font-medium px-2.5 py-0.5 rounded-lg">selesai</span>
                    <div class="w-16 h-1 bg-blue-500 rounded-full mb-4"></div>

                    <div class="flex items-center gap-3">
                        <a class="px-20 py-2 text-sm font-semibold text-white bg-blue-600 rounded-full hover:bg-blue-700 transform hover:scale-105 transition-all duration-200 focus:ring-4 focus:ring-blue-300 focus:outline-none"
                            href="{{ route('voter.voter') }}">
                            Lihat
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden dark:bg-gray-800">
            <div class="p-6">
                <div class="flex flex-col items-center">

                    <h5 class="text-center mb-7 mt-3 text-3xl font-bold text-gray-700 dark:text-white">
                        Pemilihan Ketua & Wakil Ketua OSIS
                    </h5>

                    <h6 class="mb-1 font-bold text-lg text-center text-gray-700 dark:text-gray-400">Waktu Pemilihan</h6>
                    <p class="mb-1 text-center font-normal text-gray-700 dark:text-gray-400">2025-05-12</p>
                    <p class="mb-4 text-center font-normal text-gray-700 dark:text-gray-400">08:00:00 - 10:00:00</p>

                    <h6 class="mb-2 font-bold text-lg text-center text-gray-700 dark:text-gray-400">Status Pemilihan</h6>
                    <span class="bg-blue-100 text-blue-800 mb-4 text-lg font-medium px-2.5 py-0.5 rounded-lg">Draft</span>
                    <div class="w-16 h-1 bg-blue-500 rounded-full mb-4"></div>

                    <div class="flex items-center gap-3">
                        <a class="px-20 py-2 text-sm font-semibold text-white bg-blue-600 rounded-full hover:bg-blue-700 transform hover:scale-105 transition-all duration-200 focus:ring-4 focus:ring-blue-300 focus:outline-none"
                            href="{{ route('voter.voter') }}">
                            Lihat
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection