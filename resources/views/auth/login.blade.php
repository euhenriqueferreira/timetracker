<x-layouts.guest>
    <div class="border-2 border-neutral-200 w-full max-w-[570px] p-7 rounded-lg space-y-10">
        <h1 class="text-center text-neutral-200 text-3xl font-bold tracking-wide">{{ config('app.name') }}</h1>

        <x-form :action="route('login')" class="space-y-4" id="form-login"  post>
            <x-input type="text" name="email" :placeholder="__('Type your email here...')" :label="__('Email')" :value="old('email')" />
            <x-input type="password" name="password" :placeholder="__('Type your password here...')" password :label="__('Password')"/>

            @if(session()->get('message'))
                <span class="text-red-400 text-sm font-normal">{{ session()->get('message') }}</span>
            @endif

            <div class="flex justify-between">
                <x-button.link :href="route('register')" outline>
                    Go to register
                    <x-svg model="edit" color="text-neutral-200/50" />
                </x-button.link>

                <x-button type="submit" form="form-login" withIcon>
                    Login
                    <x-svg model="user" color="text-neutral-200" />
                </x-button>
            </div>
        </x-form>
        
        
    </div>
</x-layouts.guest>