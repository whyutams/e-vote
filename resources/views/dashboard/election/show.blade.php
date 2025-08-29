@extends('layouts.app')

@section('title', 'Detail Pemilihan')

@section('content')

@include('dashboard.election.customize.banner')


<div class="mb-3 ">
    <ul class="flex text-sm font-medium text-center text-gray-500 rounded-lg shadow-sm dark:divide-gray-700 dark:text-gray-400">
        <li class="w-full focus-within:z-10">
            <a href="{{ route('dashboard.election.show', $id) }}"
               class="inline-block w-full p-4 font-semibold text-white bg-gradient-to-r from-blue-600 to-blue-400 rounded-s-lg shadow-md dark:from-blue-600 dark:to-indigo-700"
               aria-current="page">
                Kandidat
            </a>
        </li>
        <li class="w-full focus-within:z-10">
            <a  href="{{ route('dashboard.election.show_voter', $id) }}" 
                class="inline-block w-full p-4 bg-white border-s-0 border-gray-200 dark:border-gray-700 rounded-e-lg hover:text-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                Pemilih
            </a>
        </li>
    </ul>
</div>

<div class="mb-3 me-2">
    <a href="{{ route('dashboard.election.create_voter', $id) }}"
        class="inline-flex items-center px-3 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg shadow hover:bg-blue-700 transition">
        <i class="ri-add-line mr-1 text-lg"></i>
        Tambah Data
    </a>
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
                    @include('dashboard.election.customize.visi-misi')
                    <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="h-12 px-6 flex items-center justify-center text-sm font-semibold text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300" type="button">
                        Visi Misi
                    </button>

                    <a href="{{ route('dashboard.election.edit_candidate', $id) }}"
                        class="h-12 w-12 flex items-center justify-center text-white bg-yellow-500 rounded-lg hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300">
                        <i class="ri-pencil-fill text-lg"></i>
                    </a>
        
                    <button type="button"
                        class="h-12 w-12 flex items-center justify-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300">
                        <i class="ri-delete-bin-fill text-lg"></i>
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
                    @include('dashboard.election.customize.visi-misi')
                    <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="h-12 px-6 flex items-center justify-center text-sm font-semibold text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300" type="button">
                        Visi Misi
                    </button>

                    <a href="#"
                        class="h-12 w-12 flex items-center justify-center text-white bg-yellow-500 rounded-lg hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300">
                        <i class="ri-pencil-fill text-lg"></i>
                    </a>
        
                    <button type="button"
                        class="h-12 w-12 flex items-center justify-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300">
                        <i class="ri-delete-bin-fill text-lg"></i>
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
                    @include('dashboard.election.customize.visi-misi')
                    <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="h-12 px-6 flex items-center justify-center text-sm font-semibold text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300" type="button">
                        Visi Misi
                    </button>

                    <a href="#"
                        class="h-12 w-12 flex items-center justify-center text-white bg-yellow-500 rounded-lg hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300">
                        <i class="ri-pencil-fill text-lg"></i>
                    </a>
        
                    <button type="button"
                        class="h-12 w-12 flex items-center justify-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300">
                        <i class="ri-delete-bin-fill text-lg"></i>
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
                    @include('dashboard.election.customize.visi-misi')
                    <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="h-12 px-6 flex items-center justify-center text-sm font-semibold text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300" type="button">
                        Visi Misi
                    </button>

                    <a href="#"
                        class="h-12 w-12 flex items-center justify-center text-white bg-yellow-500 rounded-lg hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300">
                        <i class="ri-pencil-fill text-lg"></i>
                    </a>
        
                    <button type="button"
                        class="h-12 w-12 flex items-center justify-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300">
                        <i class="ri-delete-bin-fill text-lg"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</<div>

@endsection