<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Fathom - beautiful, simple website analytics -->
        <script src="https://cdn.usefathom.com/script.js" data-site="TCLQKKKS" defer></script>
        <!-- / Fathom -->

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

        {{-- Alpine Style --}}
        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

        {{-- Favicon --}}
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="/favicon/apple-touch-icon.png?v=93mfAPBMrCx"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="/favicon/favicon-32x32.png?v=93mfAPBMrCx"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="/favicon/favicon-16x16.png?v=93mfAPBMrCx"
        />
        <link
            rel="manifest"
            href="/favicon/site.webmanifest?v=93mfAPBMrCx"
        />
        <link
            rel="mask-icon"
            href="/favicon/safari-pinned-tab.svg?v=93mfAPBMrCx"
            color="#5bbad5"
        />
        <link
            rel="shortcut icon"
            href="/favicon/favicon.ico?v=93mfAPBMrCx"
        />
        <meta
            name="msapplication-TileColor"
            content="#b91d47"
        />
        <meta
            name="msapplication-config"
            content="/favicon/browserconfig.xml?v=93mfAPBMrCx"
        />
        <meta
            name="theme-color"
            content="#fff0e7"
        />

        {{-- OpenGraph --}}
        <meta
            property="og:site_name"
            content="Sushi 🍣"
        />
        <meta
            property="og:type"
            content="website"
        />
        <meta
            property="og:title"
            content="Eloquent’s missing “array” driver."
        />
        <meta
            property="og:description"
            content="Sometimes you just want to use Eloquent without a database."
        />
        <meta
            property="og:image"
            content="https://usesushi.dev/sushi-opengraph.png"
        />
        <meta
            property="og:locale"
            content="en"
        />
        <meta
            property="og:url"
            content="https://usesushi.dev"
        />
        <meta
            name="twitter:card"
            content="summary_large_image"
        />
        <meta
            name="twitter:image"
            content="https://usesushi.dev/sushi-opengraph.png"
        />
        <meta
            name="twitter:site"
            content="@calebporzio"
        />
        <meta
            name="twitter:creator"
            content="@calebporzio"
        />
        <meta
            name="twitter:title"
            content="Eloquent’s missing “array” driver."
        />
        <meta
            name="twitter:description"
            content="Sometimes you just want to use Eloquent without a database."
        />

        {{-- Vite --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body
        class="overflow-x-hidden bg-[#FFF0E7] pb-14 font-poppins text-stone-900 antialiased selection:bg-stone-500/10"
    >
        <x-hero />
        <x-quick-start />
        <x-other-projects />
    </body>
</html>
