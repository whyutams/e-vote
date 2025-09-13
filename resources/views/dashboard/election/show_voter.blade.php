@extends('layouts.app')

@section('title', 'Detail Pemilihan')

@section('content')

    @include('dashboard.election.customize.banner')

    {{-- Statistik Cards --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
 

        <div class="bg-white rounded-2xl shadow p-6 flex items-center space-x-4 hover-scale w-full">
            <div class="px-3 py-2 bg-blue-100 rounded-full">
                <i class="ri-user-3-line text-2xl text-blue-600"></i>
            </div>
            <div class="flex-1">
                <p class="text-sm text-gray-500">Total Pemilih</p>
                <h2 class="text-2xl font-bold text-gray-800">{{ $users2->count() }}</h2>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow p-6 flex items-center space-x-4 hover-scale w-full">
            <div class="px-3 py-2 bg-purple-100 rounded-full">
                <span class="material-symbols-outlined text-2xl text-purple-600">
                    how_to_vote
                </span>
            </div>
            <div class="flex-1">
                <p class="text-sm text-gray-500">Suara Masuk</p>
                <h2 class="text-2xl font-bold text-gray-800">{{ $voted->count() }}</h2>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow p-6 flex items-center space-x-4 hover-scale w-full">
            <div class="px-3 py-2 bg-yellow-100 rounded-full">
                <i class="ri-pie-chart-2-line text-2xl text-yellow-600"></i>
            </div>
            @php
                $totalUsers = $users2->count();
                $totalVoted = $voted->count();
                $participation = $totalUsers > 0 ? round(($totalVoted / $totalUsers) * 100, 1) : 0;
            @endphp

            <div class="flex-1">
                <p class="text-sm text-gray-500">Partisipasi</p>
                <h2 class="text-2xl font-bold text-gray-800">{{ $participation }}%</h2>
            </div>
        </div>
    </div>

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
                            Memilih
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
                            <td class="w-4 p-4 text-center">
                                @php
                                    $now = now();
                                    $start = $election->start_date;
                                    $end = $election->end_date;

                                    $has_voted = App\Models\Vote::where('user_id', $user->id)
                                        ->where('election_id', $election->id)
                                        ->exists();
                                @endphp

                                {{-- Jika pemilihan sedang berlangsung --}}
                                @if ($now->between($start, $end))
                                    @if ($has_voted)
                                        ✅
                                    @else
                                        {{-- Belum memilih → biarkan kosong --}}
                                    @endif

                                    {{-- Jika pemilihan sudah selesai --}}
                                @elseif($now->greaterThan($end))
                                    @if ($has_voted)
                                        ✅
                                    @else
                                        ❌
                                    @endif
                                @else
                                    {{-- Belum dimulai --}}
                                    ⏳
                                @endif
                            </td>

                            </td>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $user->fullname }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $user->nomor_identitas }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->phone ?? '-' }}
                            </td>
                            <td class="px-6 py-4">
                                {{-- <a href="{{ route('dashboard.elections.edit_voter', $election->id) }}"
                                    class="font-medium text-yellow-500 dark:text-yellow-500 hover:underline">
                                    <i class="ri-pencil-fill text-lg"></i>
                                    Ubah
                                </a> --}}
                                <form action="{{ route('dashboard.users.delete_voter', [$election->id, $user->id]) }}" class="" method="post"
                                    onsubmit="return confirm('Yakin ingin menghapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button  
                                        class="font-medium text-red-600 dark:text-red-500 hover:underline ms-2">
                                        <i class="ri-delete-bin-fill text-lg"></i>
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>

@endsection
