@extends('layouts.app')

@section('title', 'Pemilih')

@section('content')
<div class="mt-20 ms-4 me-4 md:ms-10 md:me-10 max-w-6xl mx-auto">
    <div class="flex flex-col md:flex-row gap-6">
        
        <!-- Kolom Form -->
        <div class="flex-1 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 p-6 md:p-8">
            <form>
                <div class="mb-5">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pemilih</label>
                    <input type="text" id="nama" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                               focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                               dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                </div>

                <div class="mb-5">
                    <label for="code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Code</label>
                    <input type="text" id="code" 
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg 
                               bg-gray-50 text-sm focus:ring-blue-500 focus:border-blue-500 
                               dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                </div>

                <div class="mt-6 flex justify-start flex-wrap gap-2">
                    <button type="button" 
                            class="me-2 px-5 py-2 bg-yellow-500 text-white text-sm rounded-lg shadow hover:bg-yellow-700 focus:ring-2 focus:ring-yellow-300">
                        Ubah
                    </button>
                    <a href="{{ route('dashboard.election.index') }}" 
                            class="px-5 py-2 bg-gray-600 text-white text-sm rounded-lg shadow hover:bg-gray-700 focus:ring-2 focus:ring-gray-300">
                        Batal
                    </a>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection