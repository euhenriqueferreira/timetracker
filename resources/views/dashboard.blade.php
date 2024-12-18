<x-layouts.app>
    <div class="bg-neutral-700 w-1/5 h-screen rounded-r-xl py-10 px-6 flex flex-col justify-between">
        <x-button.link>
            <h1 class="text-center text-neutral-200 text-3xl font-bold tracking-wide">Time Tracker</h1>
        </x-button.link>
        <ul class="space-y-4">
            <li>
                <x-button.link nav_link active_route='dashboard'>
                    {{ __('Dashboard') }}
                    <x-svg.list />
                </x-button.link>

            </li>
            <li>
                <x-button.link nav_link active_route='history'>
                    {{ __('History') }}
                    <x-svg.clock />
                </x-button.link>
            </li>
            <li>
                <x-button.link nav_link active_route='profile'>
                    {{ __('Profile') }}
                    <x-svg.user />
                </x-button.link>
            </li>
        </ul>

        <x-button.link nav_link active_route='profile'>
            {{ __('Logout') }}
            <x-svg.logout />
        </x-button.link>
    </div>
</x-layouts.app>
