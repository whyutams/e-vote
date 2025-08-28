@extends('layouts.app')

@section('title', 'Pemilihan')

@section('content')

<div class="mt-3 mb-3">
    <h2 class="text-2xl font-bold text-gray-800">Tambah Data @yield('title')</h2>
    <p class="text-sm text-gray-500">Isi form di bawah untuk menambahkan data @yield('title') baru</p>
</div>


<div class="mt-6 ms-4 me-4 md:ms-10 md:me-10 max-w-6xl mx-auto">
    <div class="flex flex-col md:flex-row gap-6">
        
        <!-- Kolom Form -->
        <div class="flex-1 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 p-6 md:p-8">
            <form>
                
                <div class="mb-6 flex flex-col items-center justify-center w-full"> 
                    <ol class="flex flex-row items-center w-full">
                        <li class="relative flex-1 mb-6 sm:mb-0">
                            <div class="flex items-center">
                                <div class="z-10 flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                    <span class="material-symbols-outlined text-blue-800 dark:text-blue-300">
                                        how_to_vote
                                    </span>
                                </div>
                                <div class="flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                            </div>
                            <div class="mt-3 sm:pe-8">
                                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Data Pemilihan</time>
                            </div>
                        </li>
                        <li class="relative flex-1 mb-6 sm:mb-0">
                            <div class="flex items-center">
                                <div class="z-10 flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full ring-0 ring-white dark:bg-gray-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                    <i class="ri-group-line"></i>
                                </div>
                                <div class="flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                            </div>
                            <div class="mt-3 sm:pe-8">
                                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Data Kandidat</time>
                            </div>
                        </li>
                        <li class="relative flex-1 mb-6 sm:mb-0">
                            <div class="flex items-center">
                                <div class="z-10 flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full ring-0 ring-white dark:bg-gray-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                    <i class="ri-user-line"></i>
                                </div>
                            </div>
                            <div class="mt-3 sm:pe-8">
                                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Data Pemilih</time>
                            </div>
                        </li>
                    </ol>
                </div>

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
            </form>
        </div>

    </div>
</div>

@endsection