<div class="mt-3 mb-7">
    <h2 class="text-2xl font-bold text-gray-800">Pemilihan Ketua & Wakil Ketua OSIS</h2>
</div>

<!-- Time Card -->
<div class="mb-4">
    <div class="bg-gradient-to-r from-blue-600 to-blue-400 rounded-xl shadow-lg overflow-hidden">
        <div class="p-4 sm:p-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="text-white text-center md:text-left">
                    <h3 class="text-xl font-semibold mb-2">Waktu Pemilihan</h3>
                    <button type="button"
                        class="bg-gray-100 rounded-lg text-sm font-medium px-5 py-2.5 me-2 mb-2 
                            text-center backdrop-filter backdrop-blur-sm bg-opacity-40 border border-gray-200
                            hover:bg-gray-200 hover:border-gray-300 hover:shadow-md transition">
                        Mulai
                    </button>
                    <a href="{{ route('dashboard.election.edit_election', $id) }}"
                        class="bg-gray-100 rounded-lg text-sm font-medium px-5 py-2.5 me-2 mb-2 
                            text-center backdrop-filter backdrop-blur-sm bg-opacity-40 border border-gray-200
                            hover:bg-gray-200 hover:border-gray-300 hover:shadow-md transition">
                        Edit
                    </a>
                    <button type="button"
                        class="bg-gray-100 rounded-lg text-sm font-medium px-5 py-2.5 me-2 mb-2 
                            text-center backdrop-filter backdrop-blur-sm bg-opacity-40 border border-gray-200
                            hover:bg-gray-200 hover:border-gray-300 hover:shadow-md transition">
                        Tutup
                    </button>
                </div>
                <div class="flex flex-wrap justify-center gap-3 sm:gap-4">
                    <div class="bg-gray-100 rounded-lg p-3 sm:p-4 text-center min-w-[80px] sm:min-w-[90px]  backdrop-filter backdrop-blur-sm bg-opacity-40 border border-gray-200">
                        <span class="block text-xl sm:text-2xl font-bold text-white">02</span>
                        <span class="text-xs sm:text-sm text-gray-100">Jam</span>
                    </div>
                    <div class="bg-gray-100 rounded-lg p-3 sm:p-4 text-center min-w-[80px] sm:min-w-[90px]  backdrop-filter backdrop-blur-sm bg-opacity-40 border border-gray-200">
                        <span class="block text-xl sm:text-2xl font-bold text-white">00</span>
                        <span class="text-xs sm:text-sm text-gray-100">Menit</span>
                    </div>
                    <div class="bg-gray-100 rounded-lg p-3 sm:p-4 text-center min-w-[80px] sm:min-w-[90px]  backdrop-filter backdrop-blur-sm bg-opacity-40 border border-gray-200">
                        <span class="block text-xl sm:text-2xl font-bold text-white">00</span>
                        <span class="text-xs sm:text-sm text-gray-100">Detik</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>