<x-layouts.app>
    <div class="mt-8 px-5">
        <h2 class="block text-3xl text-left text-neutral-200 font-normal mb-5">{{ __('My Profile') }}</h2>

        <form action="" class="mt-14 space-y-4">
            <x-input type="text" name="name" :placeholder="__('Type your name here...')" formInput :label="__('Name')"/>
            <x-input type="text" name="email" :placeholder="__('Type your email here...')" formInput :label="__('Email')"/>
            <x-input type="password" name="password" :placeholder="__('Type your password here...')" formInput password :label="__('Password')"/>

            <div class="flex gap-2.5">
                <x-button.link withIcon>
                    {{ __('Recover password')}}
                    <x-svg model="recover" w="5" h="5" />
                </x-button.link>
                <x-button.link withIcon delete>
                    {{ __('Delete Account')}}
                    <x-svg model="trash" w="5" h="5" color="text-red-400" />
                </x-button.link>

                <x-button withIcon>
                    {{ __('Save Profile')}}
                    <x-svg model="bookmark" w="5" h="5" />
                </x-button>
            </div>
        </form>
    </div>
</x-layouts.app>
