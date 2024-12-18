@props([
    'title',
    'navs' => [],
    'logout' => true,
])

<div class="bg-neutral-700 w-1/5 h-screen rounded-r-xl py-10 px-6 flex flex-col justify-between">
    <x-button.link>
        <h1 class="text-center text-neutral-200 text-3xl font-bold tracking-wide">{{ $title }}</h1>
    </x-button.link>

    @if($navs)
        <ul class="space-y-4">
            @foreach ($navs as $nav)
                <li>
                    <x-button.link :href="route($nav['route'])" nav_link active_route='dashboard'>
                        {{ $nav[0] }}
                        
                        <x-svg model="{{ $nav['svg_name'] }}" w="6" h="6" />
                    </x-button.link>
                </li>
            @endforeach
        </ul>
    @endif

    @if($logout)
        <x-button.link nav_link active_route='profile'>
            {{ __('Logout') }}
            <x-svg model="logout" w="6" h="6" />
        </x-button.link>
    @endif
</div>