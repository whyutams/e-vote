<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>

  <section class="flex justify-center relative min-h-screen">
    {{-- Background Image --}}
    <img src="https://pagedone.io/asset/uploads/1702362010.png" alt="gradient background image" 
         class="w-full h-full object-cover fixed">

    <div class="mx-auto max-w-lg px-6 lg:px-8 absolute inset-0 flex items-center justify-center">
      <div class="w-full">
        {{-- Logo --}}
        <img src="https://pagedone.io/asset/uploads/1702362108.png" 
             alt="pagedone logo" 
             class="mx-auto lg:mb-11 mb-8 object-cover">

        <div class="rounded-2xl bg-white shadow-xl">
          {{-- Form --}}
          <form action="{{ route('dashboard.login.submit') }}" method="POST" class="lg:p-11 p-7 mx-auto space-y-6">
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
              <h1 class="text-gray-900 text-center font-manrope text-3xl font-bold leading-10 mb-2">
                Welcome Back
              </h1>
              <p class="text-gray-500 text-center text-base font-medium leading-6">
                Silakan login sebagai admin
              </p>
            </div>

            {{-- Username --}}
            <input type="text" name="username" required value="{{ old('username') }}"
              placeholder="Username"
              class="w-full h-12 text-gray-900 placeholder:text-gray-400 text-lg font-normal leading-7 rounded-full border-gray-300 border shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 px-4">

            {{-- Password --}}
            <input type="password" name="password" required placeholder="Password"
              class="w-full h-12 text-gray-900 placeholder:text-gray-400 text-lg font-normal leading-7 rounded-full border-gray-300 border shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 px-4">

            {{-- Forgot Password (opsional, bisa diarahkan ke route forgot password nanti) --}}
            <a href="javascript:;" class="flex justify-end">
              <span class="text-indigo-600 text-right text-sm font-medium">Forgot Password?</span>
            </a>

            {{-- Login Button --}}
            <button type="submit"
              class="w-full h-12 text-white text-center text-base font-semibold leading-6 rounded-full hover:bg-indigo-800 transition-all duration-700 bg-indigo-600 shadow-sm">
              Login
            </button>

            {{-- Link ke login pemilih --}}
            <a href="{{ url('/login') }}" class="flex justify-center text-gray-900 text-base font-medium leading-6">
              Login sebagai Pemilih? 
              <span class="text-indigo-600 font-semibold pl-2">Klik di sini</span>
            </a>
          </form>
        </div>
      </div>
    </div>
  </section>

</body>
</html>
