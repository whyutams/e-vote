@extends('layouts.app')

@section('title', 'Pengaturan Voting')

@section('content')
<div class=" mx-auto p-2">
    <div class="grid md:grid-cols-2 gap-6">
        <!-- Card Info Voting -->

        <!-- Card Waktu Voting -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-md p-6 border dark:border-gray-700">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4 flex items-center gap-2">
                ⏰ Waktu Voting
            </h2>
            
            <div class="space-y-5">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Mulai Voting</label>
                    <input type="datetime-local" name="start_time"
                        class="w-full px-4 py-2 border rounded-lg dark:bg-gray-900 dark:border-gray-600 dark:text-white focus:ring-2 focus:ring-blue-500"/>
                </div>

                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Berakhir Voting</label>
                    <input type="datetime-local" name="end_time"
                        class="w-full px-4 py-2 border rounded-lg dark:bg-gray-900 dark:border-gray-600 dark:text-white focus:ring-2 focus:ring-blue-500"/>
                </div>

                <button type="submit"
                    class="w-full px-4 py-3 bg-blue-600 text-white font-medium rounded-xl shadow hover:bg-blue-700 transition">
                    Simpan Pengaturan
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
