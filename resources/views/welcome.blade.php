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

        <title>Sushi - Eloquent’s missing “array” driver.</title>

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body
        class="overflow-x-hidden bg-[#FFF0E7] font-poppins text-stone-900 antialiased selection:bg-stone-500/10 pb-14"
    >
        <x-hero />
        <x-quick-start />
        <x-other-projects />
    </body>
</html>
