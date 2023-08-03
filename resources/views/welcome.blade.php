<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta
            http-equiv="Content-Security-Policy"
            content="upgrade-insecure-requests"
        />
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1"
        />

        <title>Sushi</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body
        class="overflow-x-hidden font-vietnam text-shark antialiased selection:bg-stone-500/10"
    >
        <x-home.hero />
    </body>
</html>
