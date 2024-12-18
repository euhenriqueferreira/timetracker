<x-layouts.guest>
    <div class="bg-neutral-700 w-full max-w-[570px] p-7 rounded-lg space-y-10">
        <h1 class="text-center text-neutral-200 text-3xl font-bold tracking-wide">{{ config('app.name') }}</h1>

        <form action="" class="space-y-4" id="form-register">
            <x-input.text name="name" :placeholder="__('Type your name here...')" formInput :label="__('Name')"/>
            <x-input.text name="email" :placeholder="__('Type your email here...')" formInput :label="__('Email')"/>
            <x-input.text name="password" :placeholder="__('Type your password here...')" formInput password :label="__('Password')"/>
            <div class="flex justify-between">
                <x-button.link :href="route('login')" outline>
                    Go to login
                    <x-svg.user color="text-neutral-200/50" />
                </x-button.link>

                <x-button type="submit" form="form-register" withIcon>
                    Register
                    <x-svg.edit color="text-neutral-200" />
                </x-button>
            </div>
        </form>
    </div>
</x-layouts.guest>