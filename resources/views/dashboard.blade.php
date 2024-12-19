<x-layouts.app>
    <x-taskbar :tags="$tags" />

    <div class="mt-8 px-5">
        <h2 class="block text-3xl text-left text-neutral-200 font-normal mb-5">{{ __('Latest Tasks') }}</h2>
        
        <div class="space-y-[10px]">
            <ul class="space-y-[10px]">
                <li class="h-[50px] flex items-center justify-between gap-[25px] px-5 border-b-2 border-white/10">
                    <x-tag-selector />

                    <h3 class="flex-1 text-base text-neutral-200 font-normal">Task name</h3>

                    <div class="flex items-end gap-[10px]">
                        <span class="text-base font-normal text-neutral-200/50">Time:</span>
                        <span class="text-base font-normal text-neutral-200">00:00:00</span>
                    </div>

                    <div class="flex gap-[5px]">
                        <form action="">
                            <x-button.link onlyIcon>
                                <x-svg model="edit" w="4" h="4"/>
                            </x-button.link>
                        </form>{{-- Edit --}}
                        <form action="">
                            <x-button type="submit" onlyIcon>
                                <x-svg model="delete" w="4" h="4"/>
                            </x-button>
                        </form>{{-- Delete --}}
                    </div>
                </li>
                <li class="h-[50px] flex items-center justify-between gap-[25px] px-5 border-b-2 border-white/10">
                    <x-tag-selector />

                    <h3 class="flex-1 text-base text-neutral-200 font-normal">Task name</h3>

                    <div class="flex items-end gap-[10px]">
                        <span class="text-base font-normal text-neutral-200/50">Time:</span>
                        <span class="text-base font-normal text-neutral-200">00:00:00</span>
                    </div>

                    <div class="flex gap-[5px]">
                        <form action="">
                            <x-button.link onlyIcon>
                                <x-svg model="edit" w="4" h="4"/>
                            </x-button.link>
                        </form>{{-- Edit --}}
                        <form action="">
                            <x-button type="submit" onlyIcon>
                                <x-svg model="delete" w="4" h="4"/>
                            </x-button>
                        </form>{{-- Delete --}}
                    </div>
                </li>
                <li class="h-[50px] flex items-center justify-between gap-[25px] px-5 border-b-2 border-white/10">
                    <x-tag-selector />

                    <h3 class="flex-1 text-base text-neutral-200 font-normal">Task name</h3>

                    <div class="flex items-end gap-[10px]">
                        <span class="text-base font-normal text-neutral-200/50">Time:</span>
                        <span class="text-base font-normal text-neutral-200">00:00:00</span>
                    </div>

                    <div class="flex gap-[5px]">
                        <form action="">
                            <x-button.link onlyIcon>
                                <x-svg model="edit" w="4" h="4"/>
                            </x-button.link>
                        </form>{{-- Edit --}}
                        <form action="">
                            <x-button type="submit" onlyIcon>
                                <x-svg model="delete" w="4" h="4"/>
                            </x-button>
                        </form>{{-- Delete --}}
                    </div>
                </li>
            </ul>
            <div class="flex items-center justify-between gap-[10px]">
                <p class="text-lg font-normal text-neutral-200/70">Today</p>
                <div class="h-[1px] flex-1 bg-neutral-200/70 mt-1"></div>
            </div>

            <ul class="space-y-[10px]">
                <li class="h-[50px] flex items-center justify-between gap-[25px] px-5 border-b-2 border-white/10">
                    <x-tag-selector />

                    <h3 class="flex-1 text-base text-neutral-200 font-normal">Task name</h3>

                    <div class="flex items-end gap-[10px]">
                        <span class="text-base font-normal text-neutral-200/50">Time:</span>
                        <span class="text-base font-normal text-neutral-200">00:00:00</span>
                    </div>

                    <div class="flex gap-[5px]">
                        <form action="">
                            <x-button.link onlyIcon>
                                <x-svg model="edit" w="4" h="4"/>
                            </x-button.link>
                        </form>{{-- Edit --}}
                        <form action="">
                            <x-button type="submit" onlyIcon>
                                <x-svg model="delete" w="4" h="4"/>
                            </x-button>
                        </form>{{-- Delete --}}
                    </div>
                </li>
                <li class="h-[50px] flex items-center justify-between gap-[25px] px-5 border-b-2 border-white/10">
                    <x-tag-selector />

                    <h3 class="flex-1 text-base text-neutral-200 font-normal">Task name</h3>

                    <div class="flex items-end gap-[10px]">
                        <span class="text-base font-normal text-neutral-200/50">Time:</span>
                        <span class="text-base font-normal text-neutral-200">00:00:00</span>
                    </div>

                    <div class="flex gap-[5px]">
                        <form action="">
                            <x-button.link onlyIcon>
                                <x-svg model="edit" w="4" h="4"/>
                            </x-button.link>
                        </form>{{-- Edit --}}
                        <form action="">
                            <x-button type="submit" onlyIcon>
                                <x-svg model="delete" w="4" h="4"/>
                            </x-button>
                        </form>{{-- Delete --}}
                    </div>
                </li>
            </ul>
            <div class="flex items-center justify-between gap-[10px]">
                <p class="text-lg font-normal text-neutral-200/70">Yesterday</p>
                <div class="h-[1px] flex-1 bg-neutral-200/70 mt-1"></div>
            </div>
        </div>
    </div>
</x-layouts.app>
