<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'Laravel - decoder' }}</title>
        <script defer src="{{ asset('js/app.js') }}"></script>
<!--        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>-->
        @livewireStyles
    </head>
    <body>
        <div class="container">
            {{ $slot }}
        </div>
        @livewireScripts
    </body>
</html>
