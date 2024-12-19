@props([
    'task',
])

<li class="h-[50px] flex items-center justify-between gap-[25px] px-5 border-b-2 border-white/10 hover:border-white/20 transition">
    <x-tag :tagColor="$task->tag_color" :tagName="$task->tag_name" />

    <h3 class="flex-1 text-base text-neutral-200 font-normal">{{ $task->name }}</h3>

    <div class="flex items-end gap-[10px]">
        <span class="text-base font-normal text-neutral-200/50">Duration:</span>
        <span class="text-base font-normal text-neutral-200">{{ $task->duration }}</span>
    </div>

    <div class="flex gap-[5px]">
        <x-button.link :href="route('tasks.edit', $task)" onlyIcon>
            <x-svg model="edit" w="4" h="4"/>
        </x-button.link>{{-- Edit --}}
        <x-form :action="route('tasks.delete', $task)" delete onsubmit="return confirm('{{ __('Are you sure') }}')">
            <x-button type="submit" onlyIcon>
                <x-svg model="delete" w="4" h="4"/>
            </x-button>
        </x-form>{{-- Delete --}}
    </div>
</li>