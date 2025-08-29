@extends('layouts.voter')

@section('title', 'Voter')

@section('body')

<div class="px-4 sm:px-6">
    <h2 class="lg:text-3xl text-md font-bold text-gray-800 dark:text-white mb-6">Pemilihan Ketua & Wakil Ketua OSIS</h2>

    <!-- Time Card -->
    <div class="mb-8">
        <div class="bg-gradient-to-r from-blue-600 to-blue-400 rounded-xl shadow-lg overflow-hidden">
            <div class="p-4 sm:p-6">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="text-white text-center md:text-left">
                        <h3 class="text-xl font-semibold mb-2">Waktu Pemilihan</h3>
                        <p class="text-blue-100 text-sm sm:text-base">Pastikan anda memilih sebelum waktu berakhir</p>
                    </div>
                    <div class="flex flex-wrap justify-center gap-3 sm:gap-4">
                        <div class="bg-gray-100 rounded-lg p-3 sm:p-4 text-center min-w-[80px] sm:min-w-[90px]  backdrop-filter backdrop-blur-sm bg-opacity-40 border border-gray-200">
                            <span class="block text-xl sm:text-2xl font-bold text-white">24</span>
                            <span class="text-xs sm:text-sm text-gray-100">Jam</span>
                        </div>
                        <div class="bg-gray-100 rounded-lg p-3 sm:p-4 text-center min-w-[80px] sm:min-w-[90px]  backdrop-filter backdrop-blur-sm bg-opacity-40 border border-gray-200">
                            <span class="block text-xl sm:text-2xl font-bold text-white">45</span>
                            <span class="text-xs sm:text-sm text-gray-100">Menit</span>
                        </div>
                        <div class="bg-gray-100 rounded-lg p-3 sm:p-4 text-center min-w-[80px] sm:min-w-[90px]  backdrop-filter backdrop-blur-sm bg-opacity-40 border border-gray-200">
                            <span class="block text-xl sm:text-2xl font-bold text-white">30</span>
                            <span class="text-xs sm:text-sm text-gray-100">Detik</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="grid grid-cols-1 lg:grid-cols-4 gap-6 mb-8">

    
    <!-- Card -->
    <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden dark:bg-gray-800">
        <div class="p-6">
            <div class="flex flex-col items-center">
                <div class="w-34 h-34 mb-4 rounded-2xl overflow-hidden border-4 border-blue-500 shadow-md">
                    <img class="w-full h-full object-cover" src="https://placehold.co/400" alt="kandidat" />
                </div>
                
                <h5 class="mb-3 text-2xl font-bold text-gray-700 dark:text-white">
                    Dimas & Sadim
                </h5>
                
                <div class="w-16 h-1 bg-blue-500 rounded-full mb-4"></div>
                
                <div class="flex items-center gap-3">
                    @include('dashboard.candidate.show')
                    <button 
                        data-modal-target="default-modal" 
                        data-modal-toggle="default-modal" 
                        class="px-20 py-2 text-sm font-semibold text-white bg-blue-600 rounded-full hover:bg-blue-700 transform hover:scale-105 transition-all duration-200 focus:ring-4 focus:ring-blue-300 focus:outline-none"
                        type="button">
                        Pilih
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden dark:bg-gray-800">
        <div class="p-6">
            <div class="flex flex-col items-center">
                <div class="w-34 h-34 mb-4 rounded-2xl overflow-hidden border-4 border-blue-500 shadow-md">
                    <img class="w-full h-full object-cover" src="https://placehold.co/400" alt="kandidat" />
                </div>
                
                <h5 class="mb-3 text-2xl font-bold text-gray-700 dark:text-white">
                    Dimas & Sadim
                </h5>
                
                <div class="w-16 h-1 bg-blue-500 rounded-full mb-4"></div>
                
                <div class="flex items-center gap-3">
                    @include('dashboard.candidate.show')
                    <button 
                        data-modal-target="default-modal" 
                        data-modal-toggle="default-modal" 
                        class="px-20 py-2 text-sm font-semibold text-white bg-blue-600 rounded-full hover:bg-blue-700 transform hover:scale-105 transition-all duration-200 focus:ring-4 focus:ring-blue-300 focus:outline-none"
                        type="button">
                        Pilih
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden dark:bg-gray-800">
        <div class="p-6">
            <div class="flex flex-col items-center">
                <div class="w-34 h-34 mb-4 rounded-2xl overflow-hidden border-4 border-blue-500 shadow-md">
                    <img class="w-full h-full object-cover" src="https://placehold.co/400" alt="kandidat" />
                </div>
                
                <h5 class="mb-3 text-2xl font-bold text-gray-700 dark:text-white">
                    Dimas & Sadim
                </h5>
                
                <div class="w-16 h-1 bg-blue-500 rounded-full mb-4"></div>
                
                <div class="flex items-center gap-3">
                    @include('dashboard.candidate.show')
                    <button 
                        data-modal-target="default-modal" 
                        data-modal-toggle="default-modal" 
                        class="px-20 py-2 text-sm font-semibold text-white bg-blue-600 rounded-full hover:bg-blue-700 transform hover:scale-105 transition-all duration-200 focus:ring-4 focus:ring-blue-300 focus:outline-none"
                        type="button">
                        Pilih
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden dark:bg-gray-800">
        <div class="p-6">
            <div class="flex flex-col items-center">
                <div class="w-34 h-34 mb-4 rounded-2xl overflow-hidden border-4 border-blue-500 shadow-md">
                    <img class="w-full h-full object-cover" src="https://placehold.co/400" alt="kandidat" />
                </div>
                
                <h5 class="mb-3 text-2xl font-bold text-gray-700 dark:text-white">
                    Dimas & Sadim
                </h5>
                
                <div class="w-16 h-1 bg-blue-500 rounded-full mb-4"></div>
                
                <div class="flex items-center gap-3">
                    @include('dashboard.candidate.show')
                    <button 
                        data-modal-target="default-modal" 
                        data-modal-toggle="default-modal" 
                        class="px-20 py-2 text-sm font-semibold text-white bg-blue-600 rounded-full hover:bg-blue-700 transform hover:scale-105 transition-all duration-200 focus:ring-4 focus:ring-blue-300 focus:outline-none"
                        type="button">
                        Pilih
                    </button>
                </div>
            </div>
        </div>
    </div>
</<div class="grid grid-cols-1 lg:grid-cols-4 gap-6 mb-8">


@endsection