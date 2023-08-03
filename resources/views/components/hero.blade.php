<section class="mx-auto w-full max-w-4xl px-5">
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
        <div class="pt-5 text-xl font-medium text-shark">
            Sometimes you want to use Eloquent, but without dealing with a
            database.
        </div>
    </div>

    {{-- Sushi Plate --}}
    <div class="grid place-items-center pt-24">
        <img
            src="{{ Vite::asset('resources/images/sushi-plate.webp') }}"
            alt=""
            class="w-96"
        />
    </div>

    {{-- Links --}}
    <div class="mx-auto flex max-w-3xl items-center gap-10 pt-14">
        {{-- Caleb --}}
        <div class="flex items-center gap-4">
            <img
                src="{{ Vite::asset('resources/images/caleb-porzio.webp') }}"
                alt="Caleb Porzio"
                class="aspect-square w-14 rounded-full"
            />
            <div class="space-y-1">
                <div class="text-shark">A project from</div>
                <div class="text-lg">
                    <strong>Caleb</strong>
                    <span class="font-medium">Porzio</span>
                </div>
            </div>
        </div>

        {{-- Divider --}}
        <div class="h-0.5 flex-1 rounded-full bg-shark/20"></div>

        {{-- Try Button --}}
        <a
            href="https://github.com/calebporzio/sushi"
            class="group/try-button relative flex w-60 items-center justify-center gap-5 rounded-full bg-[#FFDEBD] py-4 pr-8 transition duration-300 hover:bg-orange-200"
        >
            {{-- Try it --}}
            <div
                class="text-lg font-semibold transition duration-300 group-hover/try-button:translate-x-1"
            >
                Try it
            </div>

            {{-- Arrow Icon --}}
            <div
                class="transition duration-300 group-hover/try-button:translate-x-1"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="26"
                    height="26"
                    viewBox="0 0 24 24"
                >
                    <g fill="none">
                        <path
                            fill="currentColor"
                            d="M4 11.25a.75.75 0 0 0 0 1.5v-1.5Zm0 1.5h16v-1.5H4v1.5Z"
                            opacity=".5"
                        />
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.5"
                            d="m14 6l6 6l-6 6"
                        />
                    </g>
                </svg>
            </div>

            {{-- Sushi & Chopstick --}}
            <div class="absolute -right-3 bottom-0">
                <img
                    src="{{ Vite::asset('resources/images/sushi-chopstick.svg') }}"
                    alt=""
                    class="w-28 transition duration-300 group-hover/try-button:-translate-y-0.5 group-hover/try-button:scale-105"
                />
            </div>
        </a>
    </div>
</section>
