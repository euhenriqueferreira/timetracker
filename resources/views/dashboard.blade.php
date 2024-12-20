<x-layouts.app>
    <x-taskbar :tags="$tags" />

    <div class="mt-8 px-5">
        <h2 class="block text-3xl text-left text-neutral-200 font-normal mb-5">{{ __('Latest Tasks') }}</h2>

        <x-task-list :tasks="$tasks" />
    </div>        
</x-layouts.app>
