<x-layouts.app>
    <x-taskbar :tags="$tags" />

    <div class="mt-8 px-5">
        <h2 class="block text-3xl text-left text-neutral-200 font-normal mb-5">{{ __('Latest Tasks') }}</h2>
        
        <div class="space-y-[10px]">
            <ul class="space-y-[10px]">
                @foreach ($tasks as $keyDate => $date)
                    @foreach ($date as $index => $task)
                        <x-task :task="$task" />
                    @endforeach                 
                        
                    @if($keyDate == now()->toDateString())
                        <x-date-divisor :value="__('Today')" />
                    @elseif($keyDate == now()->subDay()->toDateString())
                        <x-date-divisor :value="__('Yesterday')" />
                    @else
                        <x-date-divisor :value="$keyDate" />
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</x-layouts.app>
