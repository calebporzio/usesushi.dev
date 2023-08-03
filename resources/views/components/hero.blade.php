<section class="mx-auto w-full max-w-5xl px-5">
    {{-- Sushi Logo --}}
    <div class="grid place-items-center pt-10">
        <div class="grid w-72">
            <div
                class="relative -right-7 -top-1.5 self-start justify-self-end [grid-area:1/-1]"
            >
                <x-assets.rice-piece />
            </div>
            <div
                class="relative -right-10 top-5 rotate-[40deg] scale-[.8] self-start justify-self-end [grid-area:1/-1]"
            >
                <x-assets.rice-piece />
            </div>
            <x-assets.sushi-title />
        </div>
    </div>

    {{-- Header --}}
    <div class="pt-14 text-center">
        <header class="text-4xl">
            <strong>Eloquent</strong>
            ’s missing “
            <strong>array</strong>
            ” driver.
        </header>
        <div class="pt-5 text-xl font-medium text-[#6B6B78]">
            Sometimes you want to use Eloquent, but without dealing with a
            database.
        </div>
    </div>

    {{-- Sushi Plate --}}
    <div class="grid place-items-center pt-20">
        <img
            src="{{ Vite::asset('resources/images/sushi-plate.webp') }}"
            alt=""
            class="w-96"
        />
    </div>
</section>
