<x-layouts.guest>
    <div class="bg-neutral-700 w-full max-w-[570px] p-7 rounded-lg space-y-10">
        <h1 class="text-center text-neutral-200 text-3xl font-bold tracking-wide">{{ config('app.name') }}</h1>

        <form action="" class="space-y-4" id="form-login">
            <x-input.text name="email" :placeholder="__('Type your email here...')" formInput :label="__('Email')"/>
            <x-input.text name="password" :placeholder="__('Type your password here...')" formInput password :label="__('Password')"/>
            <div class="flex justify-between">
                <x-button.link :href="route('register')" secondary>
                    Go to register
                    <x-svg.edit color="text-neutral-200/50" />
                </x-button.link>

                <x-button type="submit" form="form-login" primary>
                    Login
                    <x-svg.user color="text-neutral-200" />
                </x-button>
            </div>
        </form>
    </div>
</x-layouts.guest>