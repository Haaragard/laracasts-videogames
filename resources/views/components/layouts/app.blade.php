<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ $title ?? '' . (isset($title) ? ' - ' : '') . "Laracasts Video Games" }}</title>
</head>
<body class="text-white bg-gray-900">
    <x-layouts.header />

    <main class="py-8">
        {{ $slot ?? '' }}
    </main>

    <footer class="border-t border-gray-800">
        <div class="container px-4 py-6 mx-auto">
            Powered By <a href="#" class="underline hover:text-gray-400">IGDB API</a>
        </div>
    </footer>
</body>
</html>
