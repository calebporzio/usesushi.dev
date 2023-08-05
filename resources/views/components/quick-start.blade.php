<section
    x-cloak
    x-data
    x-ref="section"
    x-init="
        () => {
            gsap.fromTo($refs.section, {
                autoAlpha: 0,
            }, {
                autoAlpha: 1,
                duration: 0.7,
            })
        }
    "
    class="relative mx-auto w-full max-w-2xl px-5 pt-36"
>
    {{-- Header --}}
    <div class="text-center text-3xl font-bold">Quick Start</div>

    {{-- Steps --}}
    <div class="space-y-5 pt-14">
        {{-- Step 1 --}}
        <div>
            <div class="flex items-center gap-5 font-semibold">
                {{-- Number Circle --}}
                <div
                    class="grid h-10 w-10 place-items-center rounded-full bg-wasabi text-lg"
                >
                    1
                </div>

                {{-- Title --}}
                <div class="text-2xl">Install</div>
            </div>
            <div class="flex items-stretch gap-5">
                {{-- Line --}}
                <div
                    class="shrink-0 relative left-5 top-1 mt-3 w-10 border-l-[1.5px] border-dashed border-shark/30 hidden sm:block"
                ></div>

                {{-- Content --}}
                <div class="w-full pt-5 sm:pt-0">
                    <div class="text-lg font-medium text-shark">
                        Require the composer package in your Laravel project.
                    </div>

                    {{-- Code --}}
                    <div class="max-w-lg py-7 pl-1">
                        <div
                            class="flex h-12 items-center gap-2 rounded-tl-lg rounded-tr-lg bg-[#282b36] px-5 pt-0.5"
                        >
                            <div
                                class="h-2.5 w-2.5 rounded-full bg-rose-500"
                            ></div>
                            <div
                                class="h-2.5 w-2.5 rounded-full bg-yellow-500"
                            ></div>
                            <div
                                class="h-2.5 w-2.5 rounded-full bg-emerald-500"
                            ></div>
                        </div>
                        <div
                            class="sm:whitespace-pre rounded-bl-lg rounded-br-lg bg-[#1b1e28] p-5 font-fira-code font-medium text-[#a6accd] selection:bg-slate-500/30"
                        >composer <span class="text-teal-400">require</span> <span class="text-white/80">calebporzio</span>/sushi</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Step 2 --}}
        <div>
            <div class="flex items-center gap-5 font-semibold">
                {{-- Number Circle --}}
                <div
                    class="grid h-10 w-10 place-items-center rounded-full bg-wasabi text-lg"
                >
                    2
                </div>

                {{-- Title --}}
                <div class="text-2xl">Add the trait</div>
            </div>
            <div class="flex items-stretch gap-5">
                {{-- Line --}}
                <div
                    class="shrink-0 relative left-5 top-1 mt-3 w-10 border-l-[1.5px] border-dashed border-shark/30 hidden sm:block"
                ></div>

                {{-- Content --}}
                <div class="w-full pt-5 sm:pt-0">
                    <div class="text-lg font-medium text-shark">
                        Add the Sushi trait to your Eloquent model.
                    </div>

                    {{-- Code --}}
                    <div class="max-w-lg py-7 pl-1">
                        <div
                            class="flex h-12 items-center gap-2 rounded-tl-lg rounded-tr-lg bg-[#282b36] px-5 pt-0.5"
                        >
                            <div
                                class="h-2.5 w-2.5 rounded-full bg-rose-500"
                            ></div>
                            <div
                                class="h-2.5 w-2.5 rounded-full bg-yellow-500"
                            ></div>
                            <div
                                class="h-2.5 w-2.5 rounded-full bg-emerald-500"
                            ></div>
                        </div>
                        <div
                            class="whitespace-pre rounded-bl-lg rounded-br-lg bg-[#1b1e28] p-5 font-fira-code font-medium text-[#a6accd] selection:bg-slate-500/30"
                        >class <span class="text-sky-300">State</span> <span class="text-teal-400">extends</span> <span class="text-sky-300">Model</span>
{
    <span class="text-teal-400">use</span> \Sushi\<span class="text-sky-300">Sushi</span>;
}</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Step 3 --}}
        <div>
            <div class="flex items-center gap-5 font-semibold">
                {{-- Number Circle --}}
                <div
                    class="grid h-10 w-10 place-items-center rounded-full bg-wasabi text-lg"
                >
                    3
                </div>

                {{-- Title --}}
                <div class="text-2xl">Add property</div>
            </div>
            <div class="flex items-stretch gap-5">
                {{-- Line --}}
                <div
                    class="shrink-0 relative left-5 top-1 mt-3 w-10 border-l-[1.5px] border-dashed border-shark/30 hidden sm:block"
                ></div>

                {{-- Content --}}
                <div class="w-full pt-5 sm:pt-0">
                    <div class="text-lg font-medium text-shark">
                        Add a $rows property to the model.
                    </div>

                    {{-- Code --}}
                    <div class="max-w-lg py-7 pl-1">
                        <div
                            class="flex h-12 items-center gap-2 rounded-tl-lg rounded-tr-lg bg-[#282b36] px-5 pt-0.5"
                        >
                            <div
                                class="h-2.5 w-2.5 rounded-full bg-rose-500"
                            ></div>
                            <div
                                class="h-2.5 w-2.5 rounded-full bg-yellow-500"
                            ></div>
                            <div
                                class="h-2.5 w-2.5 rounded-full bg-emerald-500"
                            ></div>
                        </div>
                        <div
                            class="whitespace-pre rounded-bl-lg rounded-br-lg bg-[#1b1e28] p-5 font-fira-code font-medium text-[#a6accd] selection:bg-slate-500/30 overflow-x-auto"
                        >class <span class="text-sky-300">State</span> <span class="text-teal-400">extends</span> <span class="text-sky-300">Model</span>
{
    <span class="text-teal-400">use</span> \Sushi\<span class="text-sky-300">Sushi</span>;

    <span class="text-teal-400">protected</span> $<span class="text-sky-300">rows</span> = [
        [
            '<span class="text-teal-400">abbr</span>' => '<span class="text-teal-400">NY</span>',
            '<span class="text-teal-400">name</span>' => '<span class="text-teal-400">New York</span>',
        ],
        [
            '<span class="text-teal-400">abbr</span>' => '<span class="text-teal-400">CA</span>',
            '<span class="text-teal-400">name</span>' => '<span class="text-teal-400">California</span>',
        ],
    ];
}</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Step 4 --}}
        <div>
            <div class="flex items-center gap-5 font-semibold">
                {{-- Number Circle --}}
                <div
                    class="grid h-10 w-10 place-items-center rounded-full bg-wasabi text-lg"
                >
                    4
                </div>

                {{-- Title --}}
                <div class="text-2xl">Done!</div>
            </div>
            <div class="flex items-stretch gap-5">
                {{-- Line --}}
                <div
                    class="shrink-0 relative left-5 top-1 mt-3 w-10 hidden sm:block"
                ></div>

                {{-- Content --}}
                <div class="w-full pt-5 sm:pt-0">
                    <div class="text-lg font-medium text-shark">
                        Now, you can use this model anywhere you like, and it will behave as if you created a table with the rows you provided.
                    </div>

                    {{-- Code --}}
                    <div class="max-w-lg py-7 pl-1">
                        <div
                            class="flex h-12 items-center gap-2 rounded-tl-lg rounded-tr-lg bg-[#282b36] px-5 pt-0.5"
                        >
                            <div
                                class="h-2.5 w-2.5 rounded-full bg-rose-500"
                            ></div>
                            <div
                                class="h-2.5 w-2.5 rounded-full bg-yellow-500"
                            ></div>
                            <div
                                class="h-2.5 w-2.5 rounded-full bg-emerald-500"
                            ></div>
                        </div>
                        <div
                            class="sm:whitespace-pre rounded-bl-lg rounded-br-lg bg-[#1b1e28] p-5 text-sm font-fira-code font-medium text-[#a6accd] selection:bg-slate-500/30"
                        >$<span class="text-white/80">stateName</span> = <span class="text-sky-300">State</span>::whereAbbr('<span class="text-teal-400">NY</span>')->first()-><span class="text-white/80">name</span>;</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
