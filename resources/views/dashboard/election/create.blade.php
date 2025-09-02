@extends('layouts.app')

@section('title', 'Pemilihan')

@section('content')

    <div class="mt-3 mb-3">
        <h2 class="text-2xl font-bold text-gray-800">Tambah Data @yield('title')</h2>
        <p class="text-sm text-gray-500">Isi form di bawah untuk menambahkan data @yield('title') baru</p>
    </div>


    <div class="mt-6 ms-1 me-1 max-w-5xl mx-auto mb-5">
        <div class="flex flex-col md:flex-row">

            <!-- Kolom Form -->
            <div
                class="flex-1 bg-white border border-gray-200 rounded-lg shadow-sm p-6">

                <form action="{{ route('dashboard.elections.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Stepper -->
                    <div data-hs-stepper="">
                        <!-- Stepper Nav -->
                        <ul class="relative flex flex-row gap-x-2">
                            <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{
                                                        "index": 1
                                                        }'>
                                <span class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle">
                                    <span
                                        class="size-7 flex justify-center items-center shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600">
                                        <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">1</span>
                                        <svg class="hidden shrink-0 size-3 hs-stepper-success:block"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                        </svg>
                                    </span>
                                    <span class="ms-2 text-sm font-medium text-gray-800">
                                        Pemilihan
                                    </span>
                                </span>
                                <div
                                    class="w-full h-px flex-1 bg-gray-200 group-last:hidden hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600">
                                </div>
                            </li>

                            <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{
                                                        "index": 2
                                                        }'>
                                <span class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle">
                                    <span
                                        class="size-7 flex justify-center items-center shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600">
                                        <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">2</span>
                                        <svg class="hidden shrink-0 size-3 hs-stepper-success:block"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                        </svg>
                                    </span>
                                    <span class="ms-2 text-sm font-medium text-gray-800">
                                        Kandidat
                                    </span>
                                </span>
                                <div
                                    class="w-full h-px flex-1 bg-gray-200 group-last:hidden hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600">
                                </div>
                            </li>

                            <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{
                                                            "index": 3
                                                        }'>
                                <span class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle">
                                    <span
                                        class="size-7 flex justify-center items-center shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600">
                                        <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">3</span>
                                        <svg class="hidden shrink-0 size-3 hs-stepper-success:block"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                        </svg>
                                    </span>
                                    <span class="ms-2 text-sm font-medium text-gray-800">
                                        Pemilih
                                    </span>
                                </span>
                                <div
                                    class="w-full h-px flex-1 bg-gray-200 group-last:hidden hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600">
                                </div>
                            </li>
                            <!-- End Item -->
                        </ul>
                        <!-- End Stepper Nav -->

                        <!-- Stepper Content -->
                        <div class="mt-5 sm:mt-8">
                            <!-- First Content -->
                            <div data-hs-stepper-content-item='{
                                                        "index": 1
                                                        }'>
                                <div
                                    class="bg-gray-50  border border-gray-200 rounded-lg p-6">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Data Pemilihan
                                    </h3>
                                    <div class="mb-5">
                                        <label for="title"
                                            class="block mb-2 text-sm font-medium text-gray-900">Judul
                                            Pemilihan</label>
                                        <input type="text" id="title" name="title" value="{{ old('title') }}"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                                                                            focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                                                                            " required>
                                    </div>

                                    <div class="mb-5">
                                        <label for="description"
                                            class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                                        <textarea id="description" rows="4"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg 
                                                                            border border-gray-300 focus:ring-blue-500 focus:border-blue-500 
                                                                            "
                                            name="description">{{ old('description') }}</textarea>
                                    </div>

                                    <div class="grid grid-cols-1 lg:grid-cols-4 gap-10">
                                        <div class="mb-5 w-full span-col-2">
                                            <label for="start_date" class="block text-sm font-medium text-gray-700 mb-2">
                                                Mulai Pemilihan
                                            </label>
                                            <input type="datetime-local" id="start_date" name="start_date"
                                                class="px-3 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300 focus:outline-none"
                                                required>
                                        </div>

                                        <div class="mb-5 w-full span-col-2">
                                            <label for="end_date" class="block text-sm font-medium text-gray-700 mb-2">
                                                Selesai Pemilihan
                                            </label>
                                            <input type="datetime-local" id="end_date" name="end_date"
                                                class="px-3 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300 focus:outline-none"
                                                required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End First Content -->

                            <!-- First Content -->
                            <div data-hs-stepper-content-item='{"index":2}' style="display: none;">
                                <div id="kandidat-container" class="space-y-6">
                                    <!-- Kandidat Template -->
                                    <div
                                        class="kandidat-item bg-gray-50  border border-gray-200 rounded-lg p-6">
                                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Data
                                            Kandidat</h3>
                                        <div class="flex flex-col md:flex-row gap-6">
                                            <div class="flex-1">
                                                <div class="mb-5">
                                                    <label
                                                        class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                                                    <input type="text" name="candidates[0][name]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                  ">
                                                </div>

                                                <div class="mb-5">
                                                    <label
                                                        class="block mb-2 text-sm font-medium text-gray-900">Visi</label>
                                                    <textarea name="candidates[0][vision]"
                                                        class="wysiwyg bg-gray-50 border w-full border-gray-300 rounded-lg shadow-sm"></textarea>
                                                </div>

                                                <div class="mb-5">
                                                    <label
                                                        class="block mb-2 text-sm font-medium text-gray-900">Misi</label>
                                                    <textarea name="candidates[0][mission]"
                                                        class="wysiwyg bg-gray-50 border w-full border-gray-300 rounded-lg shadow-sm"></textarea>
                                                </div>
                                            </div>

                                            <div class="flex-1">
                                                <div
                                                    class="w-full self-start bg-white border border-gray-200 rounded-lg shadow-sm p-6 flex flex-col items-center justify-center">
                                                    <!-- Preview -->
                                                    <div
                                                        class="w-44 h-44 flex items-center justify-center bg-gray-100 rounded-lg mb-4">
                                                        <img id="preview-0" src="https://placehold.co/200"
                                                            class="rounded-lg object-cover w-full h-full preview">
                                                    </div>
                                                    <h3 class="text-md font-semibold mb-4 text-gray-700">
                                                        Upload Gambar</h3>
                                                    <input type="file" name="candidates[0][photo]" id="upload-0"
                                                        class="file-input block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none ">
                                                </div>
                                            </div>
                                        </div>

                                        <button type="button"
                                            class="hapus-kandidat mt-2 text-red-600 hover:text-red-800 text-sm">Hapus
                                            Kandidat</button>
                                    </div>
                                </div>
 
                                <div class="mt-4">
                                    <button type="button" id="tambah-kandidat"
                                        class="py-2 px-3 rounded-lg bg-green-600 text-white hover:bg-green-700">
                                        + Tambah Kandidat
                                    </button>
                                </div>
                            </div>

                            <script>
                                document.addEventListener("DOMContentLoaded", function () {
                                    let index = 1;
                                    const container = document.getElementById("kandidat-container");
                                    const btnTambah = document.getElementById("tambah-kandidat");

                                    // fungsi binding preview upload
                                    function bindPreview(input, previewId) {
                                        input.addEventListener("change", function (event) {
                                            const file = event.target.files[0];
                                            if (file) {
                                                const reader = new FileReader();
                                                reader.onload = function (e) {
                                                    document.getElementById(previewId).src = e.target.result;
                                                };
                                                reader.readAsDataURL(file);
                                            }
                                        });
                                    }
 
                                    bindPreview(document.getElementById("upload-0"), "preview-0");

                                    btnTambah.addEventListener("click", function () {
                                        let kandidatBaru = container.firstElementChild.cloneNode(true);
 
                                        kandidatBaru.querySelectorAll("input[type=text], textarea").forEach(el => {
                                            el.value = "";
                                            el.name = el.name.replace(/\[\d+\]/, `[${index}]`);
                                        });
 
                                        let fileInput = kandidatBaru.querySelector("input[type=file]");
                                        fileInput.value = "";
                                        fileInput.name = fileInput.name.replace(/\[\d+\]/, `[${index}]`);
                                        fileInput.id = `upload-${index}`;
 
                                        let previewImg = kandidatBaru.querySelector("img.preview");
                                        previewImg.id = `preview-${index}`;
                                        previewImg.src = "https://placehold.co/200";
 
                                        bindPreview(fileInput, previewImg.id);

                                        container.appendChild(kandidatBaru);
                                        index++;
                                    });
 
                                    container.addEventListener("click", function (e) {
                                        if (e.target.classList.contains("hapus-kandidat")) {
                                            if (container.children.length > 1) {
                                                e.target.closest(".kandidat-item").remove();
                                            } else {
                                                alert("Minimal 1 kandidat harus ada!");
                                            }
                                        }
                                    });
                                });
                            </script>


                            <!-- End First Content -->

                            <!-- Step 3 Content -->
                            <div data-hs-stepper-content-item='{
                                                        "index": 3
                                                        }' style="display: none;">
                                <div data-hs-stepper-content-item='{"index": 3}' style="display: none;">
                                    <div class="bg-gray-50 border border-gray-200 rounded-lg p-6">
                                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Data Pemilih</h3>

                                        <div id="pemilih-container" class="space-y-6">
                                            <!-- Template Pemilih -->
                                            <div class="pemilih-item bg-white border border-gray-200 rounded-lg p-4">
                                                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">

                                                    <!-- Nomor Induk -->
                                                    <div>
                                                        <label class="block mb-2 text-sm font-medium text-gray-900">Nomor Induk</label>
                                                        <input type="number" name="voters[0][nomor_identitas]" 
                                                            class="block w-full p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                                                            focus:ring-blue-500 focus:border-blue-500" required>
                                                    </div>

                                                    <!-- Nama -->
                                                    <div>
                                                        <label class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                                                        <input type="text" name="voters[0][fullname]" 
                                                            class="block w-full p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                                                            focus:ring-blue-500 focus:border-blue-500" required>
                                                    </div>

                                                    <!-- Password -->
                                                    <div>
                                                        <label class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                                                        <input type="password" name="voters[0][password]" 
                                                            class="block w-full p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                                                            focus:ring-blue-500 focus:border-blue-500"  required>
                                                    </div>

                                                    <!-- Nomor HP -->
                                                    <div>
                                                        <label class="block mb-2 text-sm font-medium text-gray-900">Nomor HP</label>
                                                        <input type="number" name="voters[0][phone]" 
                                                            class="block w-full p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                                                            focus:ring-blue-500 focus:border-blue-500" 
                                                            pattern="[0-9]{10,13}" required>
                                                    </div>


                                                </div>

                                                <button type="button" 
                                                    class="hapus-pemilih mt-3 text-red-600 hover:text-red-800 text-sm">
                                                    Hapus Pemilih
                                                </button>
                                            </div>
                                        </div>

                                        <!-- Tombol Tambah Pemilih -->
                                        <div class="mt-4">
                                            <button type="button" id="tambah-pemilih" 
                                                class="py-2 px-3 rounded-lg bg-green-600 text-white hover:bg-green-700">
                                                + Tambah Pemilih
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                document.addEventListener("DOMContentLoaded", function () {
                                    let voterIndex = 1;
                                    const voterContainer = document.getElementById("pemilih-container");
                                    const btnTambahPemilih = document.getElementById("tambah-pemilih");

                                    btnTambahPemilih.addEventListener("click", function () {
                                        let pemilihBaru = voterContainer.firstElementChild.cloneNode(true);

                                        pemilihBaru.querySelectorAll("input").forEach(el => {
                                            el.value = "";
                                            if (el.name.includes("voters")) {
                                                el.name = el.name.replace(/\[\d+\]/, `[${voterIndex}]`);
                                            }
                                        });

                                        voterContainer.appendChild(pemilihBaru);
                                        voterIndex++;
                                    });

                                    voterContainer.addEventListener("click", function (e) {
                                        if (e.target.classList.contains("hapus-pemilih")) {
                                            if (voterContainer.children.length > 1) {
                                                e.target.closest(".pemilih-item").remove();
                                            } else {
                                                alert("Minimal 1 pemilih harus ada!");
                                            }
                                        }
                                    });
                                });
                                </script>

                            </div>
                            <!-- End Step 3 Content -->

                            <!-- Button Group -->
                            <div class="mt-5 flex justify-between items-center gap-x-2">
                                <button type="button"
                                    class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                    data-hs-stepper-back-btn="">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m15 18-6-6 6-6"></path>
                                    </svg>
                                    Kembali
                                </button>
                                <a href="{{ route('dashboard.elections.index') }}"
                                    class="px-5 py-2 bg-gray-600 text-white text-sm rounded-lg shadow hover:bg-gray-700 focus:ring-2 focus:ring-gray-300">
                                    Batal
                                </a>
                                <button type="button"
                                    class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                    data-hs-stepper-next-btn="">
                                    Lanjut
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6"></path>
                                    </svg>
                                </button>
                                <button type="submit"
                                    class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                    data-hs-stepper-finish-btn="" style="display: none;">
                                    Selesai
                                </button>
                                <button type="reset"
                                    class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                    data-hs-stepper-reset-btn="" style="display: none;">
                                    Reset
                                </button>

                            </div>
                            <!-- End Button Group -->
                        </div>
                        <!-- End Stepper Content -->
                    </div>
                    <!-- End Stepper -->
                </form>

                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        const steppers = document.querySelectorAll("[data-hs-stepper]");

                        steppers.forEach(stepperEl => {
                            const navItems = stepperEl.querySelectorAll("[data-hs-stepper-nav-item]");
                            const contentItems = stepperEl.querySelectorAll("[data-hs-stepper-content-item]");
                            const nextBtn = stepperEl.querySelector("[data-hs-stepper-next-btn]");
                            const backBtn = stepperEl.querySelector("[data-hs-stepper-back-btn]");
                            const finishBtn = stepperEl.querySelector("[data-hs-stepper-finish-btn]");

                            let currentIndex = 0;

                            function setActiveStep(index) {
                                navItems.forEach((item, i) => {
                                    const circle = item.querySelector("span.size-7");
                                    const line = item.querySelector("span.absolute");

                                    circle.classList.remove("bg-blue-600", "bg-teal-500", "text-white", "bg-gray-100", "text-gray-800");
                                    circle.classList.add("bg-gray-100", "text-gray-800");

                                    if (i < index) {
                                        circle.classList.remove("bg-gray-100", "text-gray-800");
                                        circle.classList.add("bg-teal-500", "text-white");
                                    }
                                    if (i === index) {
                                        circle.classList.remove("bg-gray-100", "text-gray-800");
                                        circle.classList.add("bg-blue-600", "text-white");
                                    }

                                    if (line) {
                                        line.classList.remove("bg-gray-200", "bg-blue-600", "bg-teal-500");
                                        if (i < index) {
                                            line.classList.add("bg-teal-500");
                                        } else if (i === index) {
                                            line.classList.add("bg-blue-600");
                                        } else {
                                            line.classList.add("bg-gray-200");
                                        }
                                    }
                                });

                                contentItems.forEach((c, i) => {
                                    c.style.display = i === index ? "block" : "none";
                                });

                                backBtn.disabled = index === 0;
                                nextBtn.style.display = index === navItems.length - 1 ? "none" : "inline-flex";
                                finishBtn.style.display = index === navItems.length - 1 ? "inline-flex" : "none";
                            }

                            nextBtn?.addEventListener("click", () => {
                                if (currentIndex < navItems.length - 1) {
                                    currentIndex++;
                                    setActiveStep(currentIndex);
                                }
                            });

                            backBtn?.addEventListener("click", () => {
                                if (currentIndex > 0) {
                                    currentIndex--;
                                    setActiveStep(currentIndex);
                                }
                            });

                            setActiveStep(currentIndex);
                        });
                    });
                </script>


            </div>

        </div>
    </div>

@endsection