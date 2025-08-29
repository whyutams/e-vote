@extends('layouts.app')

@section('title', 'Pemilih')

@section('content')

<div class="mt-3 mb-3">
    <h2 class="text-2xl font-bold text-gray-800">Tambah Data @yield('title')</h2>
    <p class="text-sm text-gray-500">isi form di bawah untuk menambah data @yield('title')</p>
</div>

<div class="mt-6 ms-1 me-1 max-w-5xl mx-auto mb-5">
    <div class="bg-gray-50 dark:bg-neutral-800 border border-gray-200 dark:border-neutral-700 rounded-lg p-6">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">Data Pemilih</h3>
    
        <!-- Nama -->
        <div class="mb-4">
            <label for="nama_pemilih" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
            <input type="text" id="nama_pemilih" name="nama_pemilih"
                class="block w-full p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                    focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 
                    dark:placeholder-gray-400 dark:text-white"
                required>
        </div>
    
        <!-- Nomor HP -->
        <div class="mb-4">
            <label for="nomor_hp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor HP</label>
            <input type="tel" id="nomor_hp" name="nomor_hp"
                class="block w-full p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                    focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 
                    dark:placeholder-gray-400 dark:text-white"
                pattern="[0-9]{10,13}" required>
        </div>
    
        <!-- Nomor Induk -->
        <div class="mb-4">
            <label for="nomor_induk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Induk</label>
            <input type="text" id="nomor_induk" name="nomor_induk"
                class="block w-full p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                    focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 
                    dark:placeholder-gray-400 dark:text-white"
                required>
        </div>

        <div class="mt-6 flex justify-start flex-wrap gap-2">
            <button type="button" 
                    class="px-5 py-2 bg-blue-600 text-white text-sm rounded-lg shadow hover:bg-blue-700 focus:ring-2 focus:ring-blue-300">
                Tambah
            </button>
            <a href="{{ route('dashboard.election.show_voter', $id) }}" 
                    class="px-5 py-2 bg-gray-600 text-white text-sm rounded-lg shadow hover:bg-gray-700 focus:ring-2 focus:ring-gray-300">
                Batal
            </a>
        </div>
    </div>
</div>

@endsection