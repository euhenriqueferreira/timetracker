<x-layouts.app>
    <x-taskbar :tags="$tags" />

    <div class="mt-8 px-5">
        <h2 class="block text-3xl text-left text-neutral-200 font-normal mb-5">{{ __('Task') }} > {{ __('Taskname') }}</h2>

    
        @if(session()->get('message'))
            <span class="text-green-400 text-sm font-normal">{{ session()->get('message') }}</span>
        @endif

        <x-form :action="route('tasks.edit', $task)" class="mt-14 space-y-4" id="form-edit-task" put>
            <x-input type="text" name="name" :placeholder="__('Type the taskname here...')" :label="__('Task name')" :value="old('name', $task->name)"/>
            {{-- @dump($currentTag) --}}
            <x-tag-selector :tags="$tags" :label="__('Tag')" :currentTagName="$currentTag->name" :currentTagColor="$currentTag->color"/>

            <x-input.datetime name="start_time" :label="__('Start Time')" :value="old('start_time', $task->start_time)" />
            <x-input.datetime name="end_time" :label="__('End Time')" :value="old('end_time', $task->end_time)" />
        </x-form>

        <div class="flex gap-2.5 mt-4">
            <x-form :action="route('tasks.delete', $task)" delete onsubmit="return confirm('{{ __('Are you sure') }}')">
                <x-button type="submit" withIcon delete>
                    {{ __('Delete Task')}}
                    <x-svg model="trash" w="5" h="5" color="text-red-400" />
                </x-button>
            </x-form>{{-- Delete --}}
            
            <x-button type="submit" form="form-edit-task" withIcon>
                {{ __('Save Task')}}
                <x-svg model="bookmark" w="5" h="5" />
            </x-button>
        </div>
    </div>
</x-layouts.app>
