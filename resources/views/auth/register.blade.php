<x-layouts.guest>
    <div class="bg-neutral-700 w-full max-w-[570px] p-7 rounded-lg space-y-10">
        <h1 class="text-center text-neutral-200 text-3xl font-bold tracking-wide">{{ config('app.name') }}</h1>

        <x-form :action="route('register')" class="space-y-4" id="form-register" post>
            <x-input type="text" name="name" :placeholder="__('Type your name here...')" :label="__('Name')" :value="old('name')"/>
            <x-input type="text" name="email" :placeholder="__('Type your email here...')" :label="__('Email')" :value="old('email')"/>
            <x-input type="password" name="password" :placeholder="__('Type your password here...')" :label="__('Password')"/>

            <div class="flex justify-between">
                <x-button.link :href="route('login')" outline>
                    Go to login
                    <x-svg model="user" color="text-neutral-200/50" />
                </x-button.link>

                <x-button type="submit" form="form-register" withIcon>
                    Register
                    <x-svg model="edit" color="text-neutral-200" />
                </x-button>
            </div>
        </x-form>
    </div>
</x-layouts.guest>