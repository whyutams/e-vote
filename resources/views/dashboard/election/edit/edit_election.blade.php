@extends('layouts.app')

@section('title', 'Pemilihan')

@section('content')

<div class="mt-3 mb-3">
    <h2 class="text-2xl font-bold text-gray-800">Ubah Data @yield('title')</h2>
    <p class="text-sm text-gray-500">form di bawah ini untuk mengubah data @yield('title')</p>
</div>

<div class="mt-6 ms-1 me-1 max-w-5xl mx-auto mb-5">

    <div class="bg-gray-50 dark:bg-neutral-800 border border-gray-200 dark:border-neutral-700 rounded-lg p-6">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">Data Pemilihan</h3>
        <div class="mb-5">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Pemilihan</label>
            <input type="text" id="title" 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                    dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required>
        </div>

        <div class="mb-5">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
            <textarea id="description" rows="4" 
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg 
                    border border-gray-300 focus:ring-blue-500 focus:border-blue-500 
                    dark:bg-gray-700 dark:border-gray-600 dark:text-white"></textarea>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-10">
            <div class="mb-5 w-full span-col-2">
                <label for="start_date" class="block text-sm font-medium text-gray-700 mb-2">
                    Mulai Pemilihan
                </label>
                <input type="datetime-local" id="start_date" name="start_date"
                    class="px-3 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300 focus:outline-none"
                    required>
            </div>

            <div class="mb-5 w-full span-col-2">
                <label for="end_date" class="block text-sm font-medium text-gray-700 mb-2">
                    Selesai Pemilihan
                </label>
                <input type="datetime-local" id="end_date" name="end_date"
                    class="px-3 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300 focus:outline-none"
                    required>
            </div>
        </div>

        <div class="mt-6 flex justify-start flex-wrap gap-2">
            <button type="submit" 
                    class="px-5 py-2 bg-yellow-500 text-white text-sm rounded-lg shadow hover:bg-blue-700 focus:ring-2 focus:ring-blue-300">
                Ubah
            </button>
            <a href="{{ route('dashboard.election.show', $id) }}" 
                    class="px-5 py-2 bg-gray-600 text-white text-sm rounded-lg shadow hover:bg-gray-700 focus:ring-2 focus:ring-gray-300">
                Batal
            </a>
        </div>
    </div>
</div>

@endsection