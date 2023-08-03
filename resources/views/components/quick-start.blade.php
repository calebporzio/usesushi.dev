<section
    x-cloak
    x-data
    class="relative mx-auto w-full max-w-3xl px-5 pt-36"
>
    {{-- Header --}}
    <div class="text-center text-3xl font-bold">Quick Start</div>

    {{-- Steps --}}
    <div class="space-y-5 pt-10">
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
                    class="relative left-5 top-1 mt-3 w-10 border-l-[1.5px] border-dashed border-shark/30"
                ></div>

                {{-- Content --}}
                <div class="w-full">
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
                            class="whitespace-pre rounded-bl-lg rounded-br-lg bg-[#1b1e28] p-5 font-fira-code font-medium text-[#a6accd] selection:bg-stone-500/30"
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
                    class="relative left-5 top-1 mt-3 w-10 border-l-[1.5px] border-dashed border-shark/30"
                ></div>

                {{-- Content --}}
                <div class="w-full">
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
                            class="whitespace-pre rounded-bl-lg rounded-br-lg bg-[#1b1e28] p-5 font-fira-code font-medium text-[#a6accd] selection:bg-stone-500/30"
                        >class <span class="text-sky-300">State</span> <span class="text-teal-400">extends</span> <span class="text-sky-300">Model</span>
{
    <span class="text-teal-400">use</span> \Sushi\<span class="text-sky-300">Sushi</span>;
}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
