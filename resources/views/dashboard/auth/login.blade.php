<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet">
</head>
<div
  class="absolute top-10 left-10 w-80 h-80 bg-blue-500 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-pulse">
</div>
<div
  class="absolute bottom-20 right-16 w-56 h-56 bg-indigo-500 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse">
</div>
<div class="absolute top-1/2 left-1/3 w-56 h-56 bg-pink-900 rounded-full mix-blend-multiply filter blur-2xl opacity-30">
</div>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div
    class="e-card relative w-[340px] sm:w-[380px] h-[460px] rounded-2xl overflow-hidden shadow-[0_0_30px_rgba(91,66,243,0.6)] bg-transparent">

    <div class="absolute w-[540px] h-[700px] opacity-60 -left-1/2 -top-[70%] wave-gradient animate-wave"></div>
    <div class="absolute w-[540px] h-[700px] opacity-60 -left-1/2 top-[210px] wave-gradient animate-wave-2"></div>
    <div class="absolute w-[540px] h-[700px] opacity-60 -left-1/2 top-[210px] wave-gradient animate-wave-3"></div>

    <div class="absolute inset-0 flex flex-col justify-center px-8">
      <h1 class="text-center text-3xl font-extrabold text-white drop-shadow-lg mb-8">Vitely</h1>

      @if ($errors->any())
        <div class="mb p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg flex justify-between" id="alert-error">
          <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
          <span class="my-auto"><i class="ri-close-line text-lg cursor-pointer"
          data-dismiss-target="#alert-error"></i></span>
        </div>
      @endif

      <form class="mt-6 space-y-4" action="{{ route('dashboard.login.submit') }}" method="POST">
        @csrf

        <input type="text" name="username" placeholder="Username" required value="{{ old('username') }}"
          class="w-full rounded-2xl px-4 py-3 border-2 border-gray-200 focus:border-blue-500 bg-white shadow-md placeholder-gray-400 focus:outline-none">

        <input type="password" name="password" placeholder="Password" required
          class="w-full rounded-2xl px-4 py-3 border-2 border-gray-200 focus:border-blue-500 bg-white shadow-md placeholder-gray-400 focus:outline-none">

        <button type="submit"
          class="w-full py-3 rounded-2xl font-bold text-white bg-gradient-to-r from-blue-700 to-indigo-600 shadow-lg transform transition duration-200 hover:scale-105 hover:from-indigo-600 hover:to-blue-700 active:scale-95">
          Login
        </button>
      </form>
      <a href="{{ url('/login') }}" 
          class="hapus-kandidat mt-7 text-white hover:text-black text-xl">
          Login Pemilih
      </a>
    </div>
  </div>

</body>

</html>