@extends('layouts.app')

@section('title', 'Pemilih')

@section('content')

    <div class="mt-3 mb-3">
        <h2 class="text-2xl font-bold text-gray-800">Tambah Data @yield('title')</h2>
        <p class="text-sm text-gray-500">isi form di bawah untuk menambah data @yield('title')</p>
    </div>

    <div class="mt-6 ms-1 me-1 max-w-5xl mx-auto mb-5">
        <form action="{{ route('dashboard.elections.store_voter', $election->id) }}" method="post">
            @csrf

            <div class="bg-gray-50 dark:bg-neutral-800 border border-gray-200 dark:border-neutral-700 rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">Data Pemilih</h3>

                {{-- Error Messages --}}
                @if ($errors->any())
                    <div class="p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg flex justify-between mb-6"
                        id="alert-error">
                        <ul class="list-disc list-inside text-sm">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <span class="my-auto">
                            <i class="ri-close-line text-lg cursor-pointer" data-dismiss-target="#alert-error"></i>
                        </span>
                    </div>
                @endif

                <!-- Nomor Induk -->
                <div class="mb-4">
                    <label for="nomor_identitas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                        Induk</label>
                    <input type="number" id="nomor_identitas" name="nomor_identitas"
                        class="block w-full p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                    focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 
                    dark:placeholder-gray-400 dark:text-white"
                        required>
                </div>

                <!-- Nomor Induk -->
                <div class="mb-4">
                    <label for="password"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" id="password" name="password"
                        class="block w-full p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                    focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 
                    dark:placeholder-gray-400 dark:text-white"
                        required>
                </div>

                <!-- Nama -->
                <div class="mb-4">
                    <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Lengkap</label>
                    <input type="text" id="fullname" name="fullname"
                        class="block w-full p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                    focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 
                    dark:placeholder-gray-400 dark:text-white"
                        required>
                </div>

                <!-- Nomor HP -->
                <div class="mb-4">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                        HP</label>
                    <input type="number" id="phone" name="phone"
                        class="block w-full p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                    focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 
                    dark:placeholder-gray-400 dark:text-white"
                        pattern="[0-9]{10,13}" required>
                </div>

                <div class="mt-6 flex justify-start flex-wrap gap-2">
                    <button type="submit"
                        class="px-5 py-2 bg-blue-600 text-white text-sm rounded-lg shadow hover:bg-blue-700 focus:ring-2 focus:ring-blue-300">
                        Tambah
                    </button>
                    <a href="{{ route('dashboard.election.show_voter', $election->id) }}"
                        class="px-5 py-2 bg-gray-600 text-white text-sm rounded-lg shadow hover:bg-gray-700 focus:ring-2 focus:ring-gray-300">
                        Batal
                    </a>
                </div>
            </div>
        </form>
    </div>

@endsection
