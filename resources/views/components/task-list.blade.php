@props([
    'tasks' => null,
])

<ul class="space-y-[10px]">
    @forelse ($tasks as $keyDate => $date)
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
    @empty
        <x-alert :value="__('Unable to find tasks.')" svg="info" info/>
    @endforelse
</ul>