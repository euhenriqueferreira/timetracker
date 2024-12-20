<x-layouts.app>
    <x-taskbar :tags="$tags" />

    <div class="mt-8 px-5">
        <h2 class="block text-3xl text-left text-neutral-200 font-normal mb-5">{{ __('All Tasks') }}</h2>

        <div class="my-5 h-[60px] border-y-2 border-neutral-200/80 px-[10px] flex items-center justify-between">
            <div class="flex items-center gap-[10px]">
                <span class="text-base font-normal text-neutral-200/50 tracking-wide">Filter tag:</span>
                
                @if($tagFilter)
                    <x-tag-selector :tags="$tags" :currentTagName="$tagFilter->name" :currentTagColor="$tagFilter->color" form />
                    <x-form>
                        <x-button type="submit" onlyIcon>
                            <x-svg model="x-mark" w="4" h="4" />
                        </x-button>
                    </x-form>
                @else
                    <x-tag-selector :tags="$tags" form />
                @endif
            </div>
            <div class="flex items-center gap-2.5">
                <x-form>
                    <x-input name="search" :placeholder="__('Search the name of a task...')" :value="old('search', $search)" search/>
                </x-form>

                {{-- @dump($currentOrder) --}}
                <x-form x-data x-ref="form">
                    <x-input.check name="order_date_desc" :svgs="['calendar', 'arrow-down']" @click="$refs.form.submit()" :active="$currentOrder === 'order_date_desc' ? true : false" />
                </x-form>

                <x-form x-data x-ref="form">
                    <x-input.check name="order_date_asc" :svgs="['calendar', 'arrow-up']" @click="$refs.form.submit()" :active="$currentOrder === 'order_date_asc' ? true : false" />
                </x-form>

                <x-form x-data x-ref="form">
                    <x-input.check name="order_time_desc" :svgs="['clock', 'arrow-down']" @click="$refs.form.submit()" :active="$currentOrder === 'order_time_desc' ? true : false" />
                </x-form>

                <x-form x-data x-ref="form">
                    <x-input.check name="order_time_asc" :svgs="['clock', 'arrow-up']" @click="$refs.form.submit()" :active="$currentOrder === 'order_time_asc' ? true : false" />
                </x-form>
            </div>
        </div>{{-- Filters --}}

        <x-task-list :tasks="$tasks" />
    </div>
</x-layouts.app>