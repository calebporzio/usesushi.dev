<section
    x-cloak
    x-data
    class="relative mx-auto w-full max-w-4xl px-5"
>
    {{-- Sushi Logo --}}
    <div class="grid place-items-center pt-10">
        <div class="grid w-72">
            <div
                class="relative -right-5 -top-1.5 self-start justify-self-end [grid-area:1/-1] sm:-right-7"
            >
                <x-assets.rice-piece />
            </div>
            <div
                class="relative -right-8 top-5 rotate-[40deg] scale-[.8] self-start justify-self-end [grid-area:1/-1] sm:-right-10"
            >
                <x-assets.rice-piece />
            </div>
            <div class="scale-90 sm:scale-100"><x-assets.sushi-title /></div>
        </div>
    </div>

    {{-- Header --}}
    <div class="pt-14 text-center">
        <header class="text-3xl sm:text-4xl">
            <strong>Eloquent’s</strong>
            <span>missing</span>
            <strong>“array”</strong>
            <span>driver.</span>
        </header>
        <div class="pt-5 text-lg font-medium text-shark sm:text-xl">
            Sometimes you want to use Eloquent, but without dealing with a
            database.
        </div>
    </div>

    {{-- Sushi Plate --}}
    <div
        x-ref="leafTrigger"
        class="grid place-items-center pt-24"
    >
        <img
            src="{{ Vite::asset('resources/images/sushi-plate.webp') }}"
            alt=""
            class="w-96"
        />
    </div>

    {{-- Links --}}
    <div
        class="mx-auto flex max-w-3xl flex-col items-center gap-20 pt-14 px-5 sm:flex-row sm:gap-10"
    >
        {{-- Caleb --}}
        <div class="group/caleb flex items-center gap-4">
            <img
                src="{{ Vite::asset('resources/images/caleb-porzio.webp') }}"
                alt="Caleb Porzio"
                class="aspect-square w-14 rounded-full transition duration-300 group-hover/caleb:scale-110"
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
        <div
            class="hidden h-0.5 flex-1 rounded-full bg-shark/20 sm:block"
        ></div>

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

            {{-- Sushi Steam --}}
            <div
                x-data
                x-ref="steam"
                x-init="
                    () => {
                        gsap.timeline().to($refs.steam, {
                            keyframes: {
                                y: [0, -20],
                                x: [-5, 5, 0],
                                autoAlpha: [0, 1, 0],
                            },
                            duration: 3,
                            repeat: -1,
                        })
                    }
                "
                class="absolute -top-12 right-[2.2rem]"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="26"
                    height="26"
                    viewBox="0 0 26 26"
                    fill="none"
                >
                    <g clip-path="url(#clip0_62_320)">
                        <path
                            d="M14.4791 14.5342C20.6611 9.17622 16.4535 2.58186 16.4535 2.58186C16.4535 2.58186 15.8864 7.68205 11.5209 11.4658C5.33897 16.8238 9.54654 23.4181 9.54654 23.4181C9.54654 23.4181 10.1136 18.318 14.4791 14.5342Z"
                            fill="#E8D3BF"
                        />
                        <path
                            d="M20.4744 18.6294C25.6033 14.1841 22.1125 8.71306 22.1125 8.71306C22.1125 8.71306 21.6421 12.9445 18.0202 16.0837C12.8913 20.529 16.3821 26 16.3821 26C16.3821 26 16.8526 21.7686 20.4744 18.6294Z"
                            fill="#E8D3BF"
                        />
                        <path
                            d="M7.97987 9.91634C13.1087 5.47106 9.61793 0 9.61793 0C9.61793 0 9.14749 4.2314 5.52559 7.3706C0.396664 11.8159 3.88753 17.2869 3.88753 17.2869C3.88753 17.2869 4.35797 13.0555 7.97987 9.91634Z"
                            fill="#E8D3BF"
                        />
                    </g>
                    <defs>
                        <clipPath id="clip0_62_320">
                            <rect
                                width="26"
                                height="26"
                                fill="white"
                            />
                        </clipPath>
                    </defs>
                </svg>
            </div>
        </a>
    </div>

    {{-- Leaf Top Left --}}
    <div
        x-data
        x-ref="leaf"
        x-init="
            () => {
                gsap.to($refs.leaf, {
                    yPercent: 100,
                    scrollTrigger: {
                        trigger: $refs.leafTrigger,
                        scrub: 1.5,
                    },
                })
            }
        "
        class="absolute hidden lg:block -left-44 top-20"
    >
        <img
            src="{{ Vite::asset('resources/images/leaf-1.webp') }}"
            alt=""
            class="w-16"
        />
    </div>

    {{-- Leaf Middle Left --}}
    <div
        x-data
        x-ref="leaf"
        x-init="
            () => {
                gsap.to($refs.leaf, {
                    yPercent: 150,
                    scrollTrigger: {
                        trigger: $refs.leafTrigger,
                        scrub: 1.5,
                    },
                })
            }
        "
        class="absolute hidden lg:block -left-28 top-80"
    >
        <img
            src="{{ Vite::asset('resources/images/leaf-2.webp') }}"
            alt=""
            class="w-16 -rotate-12 scale-x-[-1] blur-sm"
        />
    </div>

    {{-- Leaf Bottom Left --}}
    <div
        x-data
        x-ref="leaf"
        x-init="
            () => {
                gsap.to($refs.leaf, {
                    yPercent: 80,
                    scrollTrigger: {
                        trigger: $refs.leafTrigger,
                        scrub: 1.5,
                    },
                })
            }
        "
        class="absolute hidden lg:block -left-40 bottom-20"
    >
        <img
            src="{{ Vite::asset('resources/images/leaf-3.webp') }}"
            alt=""
            class="w-16"
        />
    </div>

    {{-- Leaf Top Right --}}
    <div
        x-data
        x-ref="leaf"
        x-init="
            () => {
                gsap.to($refs.leaf, {
                    yPercent: 100,
                    scrollTrigger: {
                        trigger: $refs.leafTrigger,
                        scrub: 1.5,
                    },
                })
            }
        "
        class="absolute hidden lg:block -right-28 top-20"
    >
        <img
            src="{{ Vite::asset('resources/images/leaf-3.webp') }}"
            alt=""
            class="w-14 blur-sm"
        />
    </div>

    {{-- Leaf Middle Right --}}
    <div
        x-data
        x-ref="leaf"
        x-init="
            () => {
                gsap.to($refs.leaf, {
                    yPercent: 150,
                    scrollTrigger: {
                        trigger: $refs.leafTrigger,
                        scrub: 1.7,
                    },
                })
            }
        "
        class="absolute hidden lg:block -right-44 top-80"
    >
        <img
            src="{{ Vite::asset('resources/images/leaf-2.webp') }}"
            alt=""
            class="w-16 -rotate-12"
        />
    </div>

    {{-- Leaf Bottom Right --}}
    <div
        x-data
        x-ref="leaf"
        x-init="
            () => {
                gsap.to($refs.leaf, {
                    yPercent: 80,
                    scrollTrigger: {
                        trigger: $refs.leafTrigger,
                        scrub: 2,
                    },
                })
            }
        "
        class="absolute hidden lg:block -right-32 bottom-20"
    >
        <img
            src="{{ Vite::asset('resources/images/leaf-1.webp') }}"
            alt=""
            class="w-16"
        />
    </div>
</section>
