<x-layouts.app>
    <div class="mt-8 px-5">
        <h2 class="block text-3xl text-left text-neutral-200 font-normal mb-5">{{ __('All Tasks') }}</h2>

        <div class="my-5 h-[60px] border-y-2 border-neutral-200/80 px-[10px] flex items-center justify-between">
            <div class="flex items-center gap-[10px]">
                <span class="text-base font-normal text-neutral-200/50 tracking-wide">Filter tag:</span>

                <x-input.select name="filter_tag" class="w-[200px]">
                    <option value="nice">nice</option>
                    <option value="not-nice">not-nice</option>
                    <option value="great">great</option>
                </x-input.select>
            </div>
            <form action="" class="flex items-center gap-2.5">
                <x-input name="search" :placeholder="__('Search the name of a task...')" search/>

                <x-input.check name="order_date_asc" :svgs="['calendar', 'arrow-up']" />
                <x-input.check name="order_date_desc" :svgs="['calendar', 'arrow-down']" />
                <x-input.check name="order_time_asc" :svgs="['clock', 'arrow-up']" />
                <x-input.check name="order_time_desc" :svgs="['clock', 'arrow-down']" />
            </form>
        </div>

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