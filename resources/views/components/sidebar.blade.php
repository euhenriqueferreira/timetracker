@props([
    'title',
    'navs' => [],
    'logout' => true,
])

<div class="h-screen w-1/5 py-4 pl-4">
    <div class="bg-neutral-800 w-full h-full rounded-xl py-10 px-6 flex flex-col justify-between border border-neutral-200/60">
        <x-button.link logo>
            <h1 class="text-center text-neutral-200 text-3xl font-bold tracking-wide">{{ $title }}</h1>
        </x-button.link>
    
        @if($navs)
            <ul class="space-y-4">
                @foreach ($navs as $nav)
                    <li>
                        <x-button.link :href="route($nav['route'])" nav :isActiveInRoute="$nav['route']">
                            {{ $nav[0] }}
    
                            <x-svg model="{{ $nav['svg_name'] }}" w="6" h="6" />
                        </x-button.link>
                    </li>
                @endforeach
            </ul>
        @endif
    
        @if($logout)
            <x-button.link nav>
                {{ __('Logout') }}
                <x-svg model="logout" w="6" h="6" />
            </x-button.link>
        @endif
    </div>
</div>