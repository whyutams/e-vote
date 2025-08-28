@extends('layouts.app')

@section('title', 'Pemilihan')

@section('content')

<div class="mt-3 mb-6">
    <h2 class="text-2xl font-bold text-gray-800">@yield('title')</h2>
    <p class="text-sm text-gray-500">Daftar semua data @yield('title')</p>
</div>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg rounded-lg  dark:bg-gray-800 dark:border-gray-700">
    <div class="p-5 flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between">
         <div class="flex flex-column">
             <div class="mb-3 me-2">
                <a href="{{ url('/dashboard/election/create') }}"
                    class="inline-flex items-center px-3 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg shadow hover:bg-blue-700 transition">
                    <i class="ri-add-line mr-1 text-lg"></i>
                    Tambah Data
                </a>
            </div>
         </div>
        <div class="pb-4 dark:bg-gray-900">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative mt-1">
                <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="text" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
            </div>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
            <thead class="text-xs text-gray-50 uppercase bg-gray-900 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Judul Pemilihan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Deskripsi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Mulai Pemilihan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Selesai Pemilihan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Denis Supratman
                    </th>
                    <td class="px-6 py-4">
                        Pemilihan ini bertujuan memilih Ketua OSIS periode 2025/2026
                    </td>
                    <td class="px-6 py-4">
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-900 dark:text-blue-300">Draft</span>
                    </td>
                    <td class="px-6 py-4">
                        2025-05-12 08:00:00
                    </td>
                    <td class="px-6 py-4">
                        2025-05-12 10:00:00
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ url('/dashboard/election/edit') }}" class="font-medium text-yellow-500 dark:text-yellow-500 hover:underline">Edit</a>
                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Sumanto Adibi
                    </th>
                    <td class="px-6 py-4">
                        Pemilihan ini bertujuan memilih Ketua OSIS periode 2025/2026
                    </td>
                    <td class="px-6 py-4">
                        <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-green-900 dark:text-green-300">active</span>
                    </td>
                     <td class="px-6 py-4">
                        2025-05-12 08:00:00
                    </td>
                    <td class="px-6 py-4">
                        2025-05-12 10:00:00
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ url('/dashboard/election/edit') }}" class="font-medium text-yellow-500 dark:text-yellow-500 hover:underline">Edit</a>
                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Marince Since Raga-raga
                    </th>
                    <td class="px-6 py-4">
                        Pemilihan ini bertujuan memilih Ketua OSIS periode 2025/2026
                    </td>
                    <td class="px-6 py-4">
                        <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-red-900 dark:text-red-300">Closed</span>
                    </td>
                    <td class="px-6 py-4">
                        2025-05-12 08:00:00
                    </td>
                    <td class="px-6 py-4">
                        2025-05-12 10:00:00
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ url('/dashboard/election/edit') }}" class="font-medium text-yellow-500 dark:text-yellow-500 hover:underline">Edit</a>
                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection