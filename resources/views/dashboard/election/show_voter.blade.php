@extends('layouts.app')

@section('title', 'Detail Pemilihan')

@section('content')

    @include('dashboard.election.customize.banner')

    <div class="mb-6">
        <ul
            class="flex text-sm font-medium text-center text-gray-500 rounded-lg shadow-sm dark:divide-gray-700 dark:text-gray-800">
            <li class="w-full focus-within:z-10">
                <a href="{{ route('dashboard.elections.show', $election->id) }}"
                    class="inline-block w-full p-4 bg-white border-r border-gray-200 hover:text-gray-700 hover:bg-gray-50 rounded-s-lg dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">
                    Kandidat
                </a>
            </li>
            <li class="w-full focus-within:z-10">
                <a href="{{ route('dashboard.election.show_voter', $election->id) }}"
                    class="inline-block w-full p-4 font-semibold text-white bg-gradient-to-r from-blue-400 to-blue-600 rounded-e-lg shadow-md dark:from-blue-600 dark:to-indigo-700"
                    aria-current="page">
                    Pemilih
                </a>
            </li>
        </ul>
    </div>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg rounded-lg  dark:bg-gray-800 dark:border-gray-700">
        <div class="p-5 flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between">
            <div class="flex flex-column">
                <div class="mb-3 me-2">
                    <a href="{{ route('dashboard.elections.create_voter', $election->id) }}"
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
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="table-search"
                        class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search for items">
                </div>
            </div>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nomor Identitas
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nomor HP
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $index => $user)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$user->fullname}}
                            </th>
                            <td class="px-6 py-4">
                                {{$user->nomor_identitas}}
                            </td>
                            <td class="px-6 py-4">
                                {{$user->phone ?? '-'}}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('dashboard.elections.edit_voter', $election->id) }}"
                                    class="font-medium text-yellow-500 dark:text-yellow-500 hover:underline">
                                    <i class="ri-pencil-fill text-lg"></i>
                                    Ubah
                                </a>
                                <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-2">
                                    <i class="ri-delete-bin-fill text-lg"></i>
                                    Hapus
                                </a>
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection