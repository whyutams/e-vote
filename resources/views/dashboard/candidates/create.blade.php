@extends('layouts.app')

@section('title', 'Tambah Kandidat')

@section('content')
<div class="max-w-4xl mx-auto mt-8">
    <!-- Header -->
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100">Tambah Kandidat</h1>
        <p class="text-gray-600 dark:text-gray-400">Lengkapi data kandidat berikut dengan benar.</p>
    </div>

    <!-- Alert -->
    @if (session('success'))
        <div class="mb-4 rounded-lg bg-green-100 p-4 text-green-800">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="mb-4 rounded-lg bg-red-100 p-4 text-red-800">
            <ul class="list-disc list-inside space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Card Form -->
    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8">
        <form action="{{ route('dashboard.candidates.store', $election->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Nama Kandidat -->
            <div>
                <label for="name" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Nama Kandidat</label>
                <input type="text" id="name" name="name"
                    value="{{ old('name') }}"
                    class="mt-2 w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Masukkan nama kandidat" required>
                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Visi -->
            <div>
                <label for="vision" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Visi</label>
                <textarea id="vision" name="vision" rows="3"
                    class="mt-2 w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Tuliskan visi kandidat">{{ old('vision') }}</textarea>
                @error('vision')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Misi -->
            <div>
                <label for="mission" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Misi</label>
                <textarea id="mission" name="mission" rows="4"
                    class="mt-2 w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Tuliskan misi kandidat">{{ old('mission') }}</textarea>
                @error('mission')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Foto -->
            <div>
                <label for="photo" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">Foto Kandidat</label>
                <input type="file" id="photo" name="photo" accept="image/*"
                    class="mt-2 w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                @error('photo')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Buttons -->
            <div class="flex justify-end gap-4">
                <a href="{{ route('dashboard.elections.show', $election->id) }}"
                   class="px-5 py-2 rounded-lg border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                    Batal
                </a>
                <button type="submit"
                        class="px-6 py-2 rounded-lg bg-blue-600 text-white font-semibold shadow hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 transition">
                    Simpan Kandidat
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
