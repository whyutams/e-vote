@extends('layouts.app')

@section('title', 'Kandidat')

@section('content')
<div class="mt-20 ms-4 me-4 md:ms-10 md:me-10 max-w-6xl mx-auto">
    <div class="flex flex-col md:flex-row gap-6">
        
        <!-- Kolom Form -->
        <div class="flex-1 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 p-6 md:p-8">

                <div class="mb-5">
                    <label for="ketua" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Ketua</label>
                    <input type="text" id="ketua" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                               focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                               dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                </div>

                <div class="mb-5">
                    <label for="wakil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Wakil</label>
                    <input type="text" id="wakil" 
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg 
                               bg-gray-50 text-sm focus:ring-blue-500 focus:border-blue-500 
                               dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                </div>

                <div class="mb-5">
                    <label for="visi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Visi</label>
                    <textarea id="visi" rows="4" 
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg 
                               border border-gray-300 focus:ring-blue-500 focus:border-blue-500 
                               dark:bg-gray-700 dark:border-gray-600 dark:text-white"></textarea>
                </div>

                <div class="mb-5">
                    <label for="misi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Misi</label>
                    <!-- Card Editor -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <!-- Toolbar -->
                        @include('components.wysiwyg-toolbar')
                        <!-- Editor Area -->
                        <div class="px-4 text-sm text-gray-800 dark:bg-gray-800 rounded-b-lg focus:outline-none"
                             id="wysiwyg-typography-example">
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex justify-start flex-wrap gap-2">
                    <button type="button" 
                            class="px-5 py-2 bg-blue-600 text-white text-sm rounded-lg shadow hover:bg-blue-700 focus:ring-2 focus:ring-blue-300">
                        Tambah
                    </button>
                    <a href="{{ route('dashboard.candidate.index') }}" 
                            class="px-5 py-2 bg-gray-600 text-white text-sm rounded-lg shadow hover:bg-gray-700 focus:ring-2 focus:ring-gray-300">
                        Batal
                    </a>
                </div>
        </div>

        <!-- Kolom Upload Gambar -->
        <div class="w-full md:w-80 self-start bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 p-6 flex flex-col items-center justify-center">
            <!-- Preview -->
            <div class="w-full h-48 flex items-center justify-center bg-gray-100 rounded-lg mb-4">
                <img id="previewImage" src="https://placehold.co/200" class="rounded-lg object-cover w-full h-full">
            </div>
            <h3 class="text-md font-semibold mb-4 text-gray-700 dark:text-gray-200">Upload Gambar</h3>
            <input type="file" id="gambar" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600">
        </div>

    </div>
</div>
@endsection
