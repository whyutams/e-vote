@extends('layouts.app')

@section('title', 'Kandidat')

@section('content')

<div class="grid grid-cols-1 lg:grid-cols-4 gap-6 mb-8">
    <div class="ms-3 lg:col-span-4">
    
        <div>
            <a href="{{ url('/dashboard/candidate/create') }}"
                class="inline-flex items-center mt-4 px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg shadow hover:bg-blue-700 transition">
                <i class="ri-add-line mr-1 text-lg"></i>
                Tambah Kandidat
            </a>
        </div>
    
    </div>
    
    <!-- Card -->
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
    
        <a href="#">
            <img class="rounded-t-lg" src="https://placehold.co/400" alt="kandidat" />
        </a>
    
        <div class="p-5">
    
            <h5 class="mb-5 text-2xl text-center font-bold tracking-tight text-gray-600 dark:text-white">
                Dimas & Sadim
            </h5>
    
            <div class="flex items-center justify-center space-x-2">

                @include('dashboard.candidate.show')
                <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="h-12 px-6 flex items-center justify-center text-sm font-semibold text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300" type="button">
                    Visi Misi
                </button>
    
                <a href="{{ url('/dashboard/candidate/edit') }}"
                    class="h-12 w-12 flex items-center justify-center text-white bg-yellow-500 rounded-lg hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300">
                    <i class="ri-pencil-fill text-lg"></i>
                </a>
    
                <a href="#"
                    class="h-12 w-12 flex items-center justify-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300">
                    <i class="ri-delete-bin-fill text-lg"></i>
                </a>
    
            </div>
    
        </div>
    </div>
    
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
    
        <a href="#">
            <img class="rounded-t-lg" src="https://placehold.co/400" alt="kandidat" />
        </a>
    
        <div class="p-5">
    
            <h5 class="mb-5 text-2xl text-center font-bold tracking-tight text-gray-600 dark:text-white">
                Dimas & Sadim
            </h5>
    
            <div class="flex items-center justify-center space-x-2">

                @include('dashboard.candidate.show')
                <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="h-12 px-6 flex items-center justify-center text-sm font-semibold text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300" type="button">
                    Visi Misi
                </button>
    
                <a href="#"
                    class="h-12 w-12 flex items-center justify-center text-white bg-yellow-500 rounded-lg hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300">
                    <i class="ri-pencil-fill text-lg"></i>
                </a>
    
                <a href="#"
                    class="h-12 w-12 flex items-center justify-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300">
                    <i class="ri-delete-bin-fill text-lg"></i>
                </a>
    
            </div>
    
        </div>
    </div>
    
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
    
        <a href="#">
            <img class="rounded-t-lg" src="https://placehold.co/400" alt="kandidat" />
        </a>
    
        <div class="p-5">
    
            <h5 class="mb-5 text-2xl text-center font-bold tracking-tight text-gray-600 dark:text-white">
                Dimas & Sadim
            </h5>
    
            <div class="flex items-center justify-center space-x-2">
                
                @include('dashboard.candidate.show')
                <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="h-12 px-6 flex items-center justify-center text-sm font-semibold text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300" type="button">
                    Visi Misi
                </button>
    
                <a href="#"
                    class="h-12 w-12 flex items-center justify-center text-white bg-yellow-500 rounded-lg hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300">
                    <i class="ri-pencil-fill text-lg"></i>
                </a>
    
                <a href="#"
                    class="h-12 w-12 flex items-center justify-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300">
                    <i class="ri-delete-bin-fill text-lg"></i>
                </a>
    
            </div>
    
        </div>
    </div>
</<div class="grid grid-cols-1 lg:grid-cols-4 gap-6 mb-8">


@endsection