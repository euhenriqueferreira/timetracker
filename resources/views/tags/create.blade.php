<x-layouts.app>
    <x-taskbar :tags="$tags" />

    <div class="mt-8 px-5">
        <h2 class="block text-3xl text-left text-neutral-200 font-normal mb-5">{{ __('Create tag') }}</h2>

        <x-form :action="route('tags.create')" class="mt-14 space-y-4" id="form-create-tag" post>
            <x-input type="text" name="name" :placeholder="__('Type the tag name here...')" formInput :label="__('Tag Name')" :value="old('name')"/>
            <x-input type="color" name="color" :label="__('Tag Color')"  :value="old('color')"/>
            
            @if(session()->get('message'))
                <span class="text-red-400 text-sm font-normal">{{ session()->get('message') }}</span>
            @endif

            <div class="flex gap-2.5">
                <x-button.link :href="route('dashboard')" withIcon>
                    {{ __('Cancel')}}
                    <x-svg model="x-mark" w="5" h="5" />
                </x-button.link>

                <x-button type="submit" form="form-create-tag" withIcon>
                    {{ __('Create Tag')}}
                    <x-svg model="bookmark" w="5" h="5" />
                </x-button>
            </div>
        </x-form>
    </div>
</x-layouts.app>

