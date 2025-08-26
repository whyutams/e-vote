<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Vitely')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">

    @include('templates.sidebar')

    @include('templates.navbar')
    <div class="p-4 sm:ml-64">
        <main>
            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @stack('scripts')

</body>
</html>
