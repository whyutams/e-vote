<!-- Time Card -->
<div class="mb-8">
    <div class="bg-gradient-to-r from-blue-600 to-blue-400 rounded-xl shadow-lg overflow-hidden">
        <div class="p-4 sm:p-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="text-white text-center md:text-left">
                    <h3 class="text-xl font-semibold mb-2">Waktu Pemilihan</h3>
                    <p class="text-blue-100 text-sm sm:text-base">
                        {{ \Carbon\Carbon::parse($election->start_date)->format('d M Y H:i') }} -
                        {{ \Carbon\Carbon::parse($election->end_date)->format('d M Y H:i') }}
                    </p>
                    <p class="text-blue-100 text-xs sm:text-sm">
                        Pastikan anda memilih sebelum waktu berakhir
                    </p>
                </div>

                <!-- Countdown -->
                <div class="flex flex-wrap justify-center gap-3 sm:gap-4"
                    data-countdown="{{ $election->end_date }}">
                    <div
                        class="bg-gray-100 rounded-lg p-3 sm:p-4 text-center min-w-[80px] sm:min-w-[90px] backdrop-filter backdrop-blur-sm bg-opacity-40 border border-gray-200">
                        <span id="days" class="block text-xl sm:text-2xl font-bold text-white">00</span>
                        <span class="text-xs sm:text-sm text-gray-100">Hari</span>
                    </div>
                    <div
                        class="bg-gray-100 rounded-lg p-3 sm:p-4 text-center min-w-[80px] sm:min-w-[90px] backdrop-filter backdrop-blur-sm bg-opacity-40 border border-gray-200">
                        <span id="hours" class="block text-xl sm:text-2xl font-bold text-white">00</span>
                        <span class="text-xs sm:text-sm text-gray-100">Jam</span>
                    </div>
                    <div
                        class="bg-gray-100 rounded-lg p-3 sm:p-4 text-center min-w-[80px] sm:min-w-[90px] backdrop-filter backdrop-blur-sm bg-opacity-40 border border-gray-200">
                        <span id="minutes" class="block text-xl sm:text-2xl font-bold text-white">00</span>
                        <span class="text-xs sm:text-sm text-gray-100">Menit</span>
                    </div>
                    <div
                        class="bg-gray-100 rounded-lg p-3 sm:p-4 text-center min-w-[80px] sm:min-w-[90px] backdrop-filter backdrop-blur-sm bg-opacity-40 border border-gray-200">
                        <span id="seconds" class="block text-xl sm:text-2xl font-bold text-white">00</span>
                        <span class="text-xs sm:text-sm text-gray-100">Detik</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const countdownEl = document.querySelector("[data-countdown]");
        if (!countdownEl) return;

        const endDate = new Date(countdownEl.dataset.countdown).getTime();

        function updateCountdown() {
            const now = new Date().getTime();
            const distance = endDate - now;

            if (distance < 0) {
                document.getElementById("days").textContent = "00";
                document.getElementById("hours").textContent = "00";
                document.getElementById("minutes").textContent = "00";
                document.getElementById("seconds").textContent = "00";
                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("days").textContent = String(days).padStart(2, '0');
            document.getElementById("hours").textContent = String(hours).padStart(2, '0');
            document.getElementById("minutes").textContent = String(minutes).padStart(2, '0');
            document.getElementById("seconds").textContent = String(seconds).padStart(2, '0');
        }

        updateCountdown();
        setInterval(updateCountdown, 1000);
    });
</script>
