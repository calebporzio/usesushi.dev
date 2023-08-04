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
    class="relative mx-auto w-full max-w-2xl px-5 pt-36"
>
    {{-- Header --}}
    <div class="flex items-center gap-5">
        <div class="text-center text-3xl font-bold">My other projects</div>
        <div class="h-0.5 flex-1 rounded-full bg-shark/20"></div>
    </div>

    <div class="space-y-10 pt-8">
        {{-- Livewire --}}
        <div
            class="relative w-full rounded-xl bg-gradient-to-t from-[#10172A] to-[#1E2948] p-8 min-[500px]:p-10"
        >
            {{-- Logo --}}
            <div class="relative -left-3">
                <x-assets.livewire />
            </div>

            {{-- Falling Star --}}
            <div
                class="absolute right-0 top-0 scale-75 mix-blend-screen sm:right-12 sm:top-3 sm:scale-100"
            >
                <x-assets.falling-star />
            </div>

            {{-- Title --}}
            <div
                class="max-w-[26rem] pt-10 text-xl font-bold text-[#F1F5F9] min-[500px]:text-2xl sm:text-3xl"
            >
                The most productive way to build your next web app
            </div>

            {{-- Description --}}
            <div class="max-w-md pt-3 font-medium text-[#94A3B8]">
                Powerful, dynamic, front-end UIs without leaving PHP.
            </div>

            <div
                class="flex flex-wrap items-center justify-between gap-5 pt-10 text-sm"
            >
                <div class="font-medium text-[#94A3B8]">+20k Github Stars</div>
                <a
                    href="https://livewire.laravel.com/"
                    target="_blank"
                    class="group/card-link flex items-center gap-1 rounded-lg bg-[#e3538f] py-3.5 pl-6 pr-4 text-white transition duration-200 hover:bg-pink-600"
                >
                    <div
                        class="font-medium transition duration-200 group-hover/card-link:-translate-x-1"
                    >
                        Visit the website
                    </div>
                    <div class="relative -ml-0.5">
                        <div
                            class="absolute left-0.5 top-1/2 h-0.5 w-2 -translate-y-1/2 translate-x-1 rounded-full bg-white opacity-0 transition duration-200 group-hover/card-link:translate-x-0 group-hover/card-link:opacity-100"
                        ></div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="20"
                            height="20"
                            viewBox="0 0 48 48"
                            class="transition duration-200 group-hover/card-link:translate-x-1"
                        >
                            <path
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="4"
                                d="m19 12l12 12l-12 12"
                            />
                        </svg>
                    </div>
                </a>
            </div>
        </div>

        {{-- Livewire --}}
        <div
            class="relative z-0 w-full overflow-hidden rounded-xl bg-[#C9E5EA] p-8 min-[500px]:p-10"
        >
            {{-- Background Image --}}
            <img
                src="{{ Vite::asset('resources/images/alpine-sky.webp') }}"
                alt=""
                class="absolute inset-0 -z-10 h-full w-full object-cover opacity-30"
            />

            {{-- Logo --}}
            <div class="relative -left-1">
                <img
                    src="{{ Vite::asset('resources/svg/alpine.svg') }}"
                    alt="Alpine.js"
                    class="w-52"
                />
            </div>

            {{-- Title --}}
            <div
                class="max-w-[26rem] pt-10 text-2xl font-bold text-[#2D3441] sm:text-3xl"
            >
                Simple. Lightweight.
                <br />
                Powerful as hell.
            </div>

            {{-- Description --}}
            <div class="max-w-md pt-3 font-medium text-[#6A7790]">
                Your new, lightweight, JavaScript framework.
            </div>

            <div
                class="flex flex-wrap items-center justify-between gap-5 pt-10 text-sm"
            >
                <div class="font-medium text-[#6A7790]">+24k Github Stars</div>
                <a
                    href="https://alpinejs.dev/"
                    target="_blank"
                    class="group/card-link flex items-center gap-1 rounded-lg bg-[#242934] py-3.5 pl-6 pr-4 text-white transition duration-200 hover:bg-zinc-700"
                >
                    <div
                        class="font-medium transition duration-200 group-hover/card-link:-translate-x-1"
                    >
                        Visit the website
                    </div>
                    <div class="relative -ml-0.5">
                        <div
                            class="absolute left-0.5 top-1/2 h-0.5 w-2 -translate-y-1/2 translate-x-1 rounded-full bg-white opacity-0 transition duration-200 group-hover/card-link:translate-x-0 group-hover/card-link:opacity-100"
                        ></div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="20"
                            height="20"
                            viewBox="0 0 48 48"
                            class="transition duration-200 group-hover/card-link:translate-x-1"
                        >
                            <path
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="4"
                                d="m19 12l12 12l-12 12"
                            />
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
