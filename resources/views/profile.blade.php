<x-layouts.app>

    <x-taskbar :tags="$tags" />

    <div class="mt-8 px-5">
        <h2 class="block text-3xl text-left text-neutral-200 font-normal mb-5">{{ __('My Profile') }}</h2>

        <x-form :action="route('profile.update')" class="mt-14 space-y-4" id="form-update-profile" put>
            <x-input type="text" name="name" :placeholder="__('Type your name here...')" formInput :label="__('Name')" :value="old('name', $user->name)" />
            <x-input type="text" readonly name="email" :placeholder="__('Type your email here...')" formInput :label="__('Email')" :value="$user->email" />
            <x-input type="password" readonly name="password" :placeholder="__('Type your password here...')" formInput password :label="__('Password')" :value="$user->password" />

            <div class="flex gap-2.5">
                <x-button.link outline>
                    {{ __('Recover password')}}
                    <x-svg model="recover" w="5" h="5" color="text-neutral-200/50" />
                </x-button.link>
                <x-button.link outline>
                    {{ __('Change password')}}
                    <x-svg model="key" w="5" h="5" color="text-neutral-200/50" />
                </x-button.link>
                <x-button.link withIcon delete>
                    {{ __('Delete Account')}}
                    <x-svg model="trash" w="5" h="5" color="text-red-400" />
                </x-button.link>

                <x-button type="submit" form="form-update-profile" withIcon>
                    {{ __('Save Profile')}}
                    <x-svg model="bookmark" w="5" h="5" />
                </x-button>
            </div>
        </x-form>
        
        @if(session()->get('message'))
            <x-alert :value="session()->get('message')" svg="check" success />
        @endif
    </div>
</x-layouts.app>
