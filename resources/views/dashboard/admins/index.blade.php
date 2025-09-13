@extends('layouts.app')

@section('title', 'Admin')

@section('content')

    <div class="mt-3 mb-3">
        <h2 class="text-2xl font-bold text-gray-800">@yield('title')</h2>
        <p class="text-sm text-gray-500">Daftar semua data @yield('title')</p>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg rounded-lg">
        @if (session('success'))
            <div class="px-5 pt-5" id="alert-success">
                <div class="p-4 flex justify-between bg-green-100 border border-green-400 text-green-700 rounded-lg">
                    <span>{{ session('success') }}</span>
                    <span><i class="ri-close-line text-lg cursor-pointer" data-dismiss-target="#alert-success"></i></span>
                </div>
            </div>
        @endif

        <div class="p-5 flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between">
            <div class="flex flex-column">
                <div class="mb-3 me-2">
                    <a href="{{ route('dashboard.admins.create') }}"
                        class="inline-flex items-center px-3 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg shadow hover:bg-blue-700 transition">
                        <i class="ri-add-line mr-1 text-lg"></i>
                        Tambah Data
                    </a>
                </div>
            </div>
            <div class="pb-4">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative mt-1">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="table-search"
                        class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Search for items">
                </div>
            </div>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-300">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Username
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Lengkap
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Panggilan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            No. HP
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($admins as $index => $admin)
                        <tr
                            class="bg-white border-b">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $admin->username }}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $admin->fullname }}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $admin->callname }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $admin->email ?? "-" }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $admin->phone ?? "-" }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('dashboard.admins.edit', ['user' => $admin->id]) }}"
                                    class="font-medium text-yellow-500 hover:underline">
                                    <i class="ri-pencil-fill text-lg"></i>
                                    Ubah
                                </a>

                                <form action="{{ route('dashboard.admins.delete', ['user' => $admin->id]) }}" method="POST"
                                    class="inline" onsubmit="return confirm('Yakin ingin menghapus data?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="font-medium text-red-600 hover:underline ms-2">
                                        <i class="ri-delete-bin-fill text-lg"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr
                            class="bg-white border-b border-gray-200 hover:bg-gray-50">
                            <td colspan="7" class="px-6 py-4 text-center text-gray-500">No data found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection