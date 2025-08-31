@extends('layouts.app')

@section('title', 'Admin')

@section('content')

    <div class="mt-3 mb-3">
        <h2 class="text-2xl font-bold text-gray-800">Ubah Data @yield('title')</h2>
        <p class="text-sm text-gray-500">form di bawah ini untuk mengubah data @yield('title')</p>
    </div>

    <div class="mt-6 ms-1 me-1 max-w-5xl mx-auto mb-5">
        <div class="flex flex-col md:flex-row gap-6">

            <!-- Kolom Form -->
            <div
                class="flex-1 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 p-6 md:p-8">
                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg flex justify-between"
                        id="alert-error">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <span class="my-auto"><i class="ri-close-line text-lg cursor-pointer"
                                data-dismiss-target="#alert-error"></i></span>
                    </div>
                @endif

                <form action="{{ route('dashboard.admins.update', ['user' => $user->id]) }}" method="POST">
                    @csrf
                    <div class="mb-5">
                        <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Lengkap <span class="me-2 text-red-600">*</span></label>
                        <input value="{{ old('fullname', $user->fullname) }}" type="text" id="fullname" name="fullname"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            required>
                    </div>

                    <div class="mb-5">
                        <label for="callname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Panggilan <span class="me-2 text-red-600">*</span></label>
                        <input value="{{ old('callname', $user->callname) }}" type="text" id="callname" name="callname"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            required>
                    </div>

                    <div class="mb-5">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input value="{{ old('email', $user->email ?? '') }}" type="text" id="email" name="email"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    </div>

                    <div class="mb-5">
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.
                            HP</label>
                        <input value="{{ old('phone', $user->phone ?? '') }}" type="text" id="phone" name="phone"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    </div>

                    <div class="mb-5">
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username
                            <span class="me-2 text-red-600">*</span></label>
                        <input value="{{ old('username', $user->username) }}" type="text" id="username" name="username"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                            readonly disabled>
                    </div>

                    <div class="mb-5">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password
                            <span class="me-2 text-red-600"></span></label>
                        <input value="{{ old('password') }}" type="password" id="password" name="password"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <small>Kosongkan kalau tidak ada perubahan password</small>
                    </div>

                    <div class="mb-5">
                        <label for="password_confirmation"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi Password <span
                                class="me-2 text-red-600"></span></label>
                        <input value="{{ old('password_confirmation') }}" type="password" name="password_confirmation"
                            id="password_confirmation"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    </div>

                    <div class="mt-6 flex justify-start flex-wrap gap-2">
                        <button type="submit"
                            class="me-2 px-5 py-2 bg-blue-600 text-white text-sm rounded-lg shadow hover:bg-blue-700 focus:ring-2 focus:ring-blue-300">
                            Ubah
                        </button>
                        <a href="{{ route('dashboard.admins.index') }}"
                            class="px-5 py-2 bg-gray-600 text-white text-sm rounded-lg shadow hover:bg-gray-700 focus:ring-2 focus:ring-gray-300">
                            Batal
                        </a>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection