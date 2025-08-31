<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Pemilih</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>

  <section class="flex justify-center relative min-h-screen">
    {{-- Background --}}
    <img src="https://pagedone.io/asset/uploads/1702362010.png" alt="background" 
         class="w-full h-full object-cover fixed">

    <div class="mx-auto max-w-lg px-6 lg:px-8 absolute inset-0 flex items-center justify-center">
      <div class="w-full">
        {{-- Logo / Judul --}}
        <h1 class="text-center text-2xl font-extrabold text-blue-500 drop-shadow-lg mb-10"> <i class="ri-bar-chart-2-fill text-white bg-blue-500 p-2 rounded-md"></i> Vitely</h1>

        <div class="rounded-2xl bg-white shadow-xl">
          {{-- Form --}}
          <form action="{{ route('login.submit') }}" method="POST" class="lg:p-11 p-7 mx-auto space-y-6">
            @csrf

            {{-- Error Messages --}}
            @if ($errors->any())
              <div class="p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg flex justify-between mb-6" id="alert-error">
                <ul class="list-disc list-inside text-sm">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
                <span class="my-auto">
                  <i class="ri-close-line text-lg cursor-pointer" data-dismiss-target="#alert-error"></i>
                </span>
              </div>
            @endif

            {{-- Heading --}}
            <div class="mb-6">
              <h2 class="text-gray-900 text-center font-manrope text-2xl font-bold leading-10 mb-2">
                Login Pemilih
              </h2>
              <p class="text-gray-500 text-center text-base font-medium leading-6">
                Silakan masukkan nomor identitas & password
              </p>
            </div>

            {{-- Nomor Identitas --}}
            <input type="number" name="nomor_identitas" placeholder="Nomor Identitas" required
              value="{{ old('nomor_identitas') }}"
              class="w-full h-12 text-gray-900 placeholder:text-gray-400 text-lg font-normal rounded-full border-gray-300 border shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 px-4">

            {{-- Password --}}
            <input type="password" name="password" placeholder="Password" required
              class="w-full h-12 text-gray-900 placeholder:text-gray-400 text-lg font-normal rounded-full border-gray-300 border shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 px-4">

            {{-- Tombol Login --}}
            <button type="submit"
              class="w-full h-12 text-white text-center text-base font-semibold rounded-full hover:bg-indigo-800 transition-all duration-700 bg-indigo-600 shadow-sm">
              Login
            </button>

            {{-- Link ke login admin --}}
            <a href="{{ url('/dashboard/login') }}" class="flex justify-center text-gray-900 text-base font-medium leading-6">
              Login sebagai Admin? 
              <span class="text-indigo-600 font-semibold pl-2">Klik di sini</span>
            </a>
          </form>
        </div>
      </div>
    </div>
  </section>

</body>
</html>
