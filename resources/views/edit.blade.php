<x-layouts.app>
    <div class="mt-8 px-5">
        <h2 class="block text-3xl text-left text-neutral-200 font-normal mb-5">{{ __('Task') }} > {{ __('Taskname') }}</h2>

        <form action="" class="mt-14 space-y-4">
            <x-input type="text" name="name" :placeholder="__('Type the taskname here...')" :label="__('Task name')"/>

            <x-input.select name="tag" :label="__('Tag')">
                <option class="" value="nice">nice</option>
                <option value="not-nice">not-nice</option>
                <option value="great">great</option>
            </x-input.select>

            <x-input.datetime name="start_time" :label="__('Start Time')" />
            <x-input.datetime name="end_time" :label="__('End Time')" />

            <div class="flex gap-2.5">
                <x-button.link withIcon delete>
                    {{ __('Delete Task')}}
                    <x-svg model="trash" w="5" h="5" color="text-red-400" />
                </x-button.link>
                
                <x-button withIcon>
                    {{ __('Save Task')}}
                    <x-svg model="bookmark" w="5" h="5" />
                </x-button>
            </div>

        </form>
    </div>
</x-layouts.app>
