<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Vote</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite('resources/css/app.css')
</head>
<body class="gradient-bg min-h-screen text-gray-100">
    <div class="flex h-full">
        @include('layouts.sidebar')
        <!-- Main Content -->
        <div class="flex-1 md:ml-64 p-6">
            <!-- Header -->
            @include('layouts.head')

            @yield('content')


    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>