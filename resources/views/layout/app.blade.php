<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <div class="flex h-screen">

        {{-- SIDEBAR --}}
        @include('layout.sidebar')

        <div class="flex flex-col flex-1">

            {{-- HEADER --}}
            @include('layout.header')

            {{-- CONTEÚDO --}}
            <main class="p-6">
                @yield('content')
            </main>

        </div>
    </div>

</body>
</html>
