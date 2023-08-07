<section
    x-cloak
    x-data
    x-ref="section"
    x-init="
        () => {
            gsap.fromTo(
                $refs.section,
                {
                    autoAlpha: 0,
                },
                {
                    autoAlpha: 1,
                    duration: 0.7,
                },
            )
        }
    "
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
            <span>driver</span>
        </header>
        <div class="pt-5 text-lg font-medium text-shark sm:text-xl">
            Sometimes you just want to use Laravel Eloquent without a database.
        </div>
    </div>

    {{-- Sushi Plate --}}
    <div class="grid place-items-center pt-24">
        <img
            src="{{ Vite::asset('resources/images/sushi-plate.webp') }}"
            alt=""
            width="384"
            height="240"
            class="w-96"
        />
    </div>

    {{-- Links --}}
    <div
        x-ref="leafTrigger"
        class="mx-auto flex max-w-3xl flex-col items-center gap-20 px-5 pt-14 sm:flex-row sm:gap-10"
    >
        {{-- Caleb --}}
        <div class="group/caleb flex items-center gap-4">
            <img
                src="{{ Vite::asset('resources/images/caleb-porzio.webp') }}"
                alt="Caleb Porzio"
                class="aspect-square w-14 rounded-full transition duration-300 group-hover/caleb:scale-110"
            />
            <div class="relative space-y-1">
                <div
                    class="text-shark transition duration-300 group-hover/caleb:opacity-0"
                >
                    A project from
                </div>
                <div
                    class="text-lg transition duration-300 group-hover/caleb:-translate-y-8"
                >
                    <strong>Caleb</strong>
                    <span class="font-medium">Porzio</span>
                </div>
                <div
                    class="absolute -bottom-1 left-0 flex -translate-x-2 items-center gap-2 text-stone-800 opacity-0 transition duration-300 group-hover/caleb:translate-x-0 group-hover/caleb:opacity-100"
                >
                    {{-- Twitter --}}
                    <a
                        href="https://twitter.com/calebporzio"
                        target="_blank"
                        aria-label="Twitter"
                        class="grid h-8 w-8 place-items-center rounded-full bg-[#FFDEBD] transition duration-300 will-change-transform hover:scale-110 hover:bg-orange-200"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="22"
                            height="22"
                            viewBox="0 0 24 24"
                        >
                            <path
                                fill="currentColor"
                                d="M22.46 6c-.77.35-1.6.58-2.46.69c.88-.53 1.56-1.37 1.88-2.38c-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29c0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15c0 1.49.75 2.81 1.91 3.56c-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07a4.28 4.28 0 0 0 4 2.98a8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56c.84-.6 1.56-1.36 2.14-2.23Z"
                            />
                        </svg>
                    </a>

                    {{-- Github --}}
                    <a
                        href="https://github.com/calebporzio"
                        target="_blank"
                        aria-label="Github"
                        class="grid h-8 w-8 place-items-center rounded-full bg-[#FFDEBD] transition duration-300 will-change-transform hover:scale-110 hover:bg-orange-200"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="22"
                            height="22"
                            viewBox="0 0 24 24"
                        >
                            <path
                                fill="currentColor"
                                d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33c.85 0 1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2Z"
                            />
                        </svg>
                    </a>
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
        class="absolute -left-10 top-20 hidden lg:block xl:-left-44"
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
        class="absolute left-0 top-80 hidden lg:block xl:-left-28"
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
                    yPercent: 200,
                    scrollTrigger: {
                        trigger: $refs.leafTrigger,
                        scrub: 1.5,
                    },
                })
            }
        "
        class="absolute -left-16 bottom-20 hidden lg:block xl:-left-40"
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
        class="absolute -right-10 top-20 hidden lg:block xl:-right-28"
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
        class="absolute -right-24 top-80 hidden lg:block xl:-right-44"
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
                    yPercent: 200,
                    scrollTrigger: {
                        trigger: $refs.leafTrigger,
                        scrub: 2,
                    },
                })
            }
        "
        class="absolute -right-14 bottom-20 hidden lg:block xl:-right-32"
    >
        <img
            src="{{ Vite::asset('resources/images/leaf-1.webp') }}"
            alt=""
            class="w-16"
        />
    </div>
</section>
