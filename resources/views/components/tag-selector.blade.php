@props([
    'tags' => [],
    'label' => null,
    'currentTagName' => null,
    'currentTagColor' => null,
    'form' => null,
])


@if($label)
    <div>
        <label class="text-lg text-neutral-200 font-normal block mb-2">{{ $label }}</label>
@endif
        <div x-data="{ open: false, selectedTag: '{{ $currentTagName ?? 'GER' }}', selectedColor: '{{ $currentTagColor ?? '#a3a3a3' }}' }" class="relative {{ $form ? 'flex items-center space-x-2' : ''}}">
            <div class="{{ $label ? 'min-w-[90px] w-fit' : 'w-[90px]' }} h-7 flex items-center justify-center rounded-md cursor-pointer px-2"
                :style="{ backgroundColor: selectedColor || '#171717' }"
                @click="open = ! open">
                <span class="text-neutral-800 text-xs font-bold uppercase whitespace-nowrap text-ellipsis overflow-hidden" x-text="selectedTag" :title="selectedTag"></span>
            </div>

            @if($form)
                <x-form x-ref="form" >
                    <input type="hidden" name="tag" :value="selectedTag" {{ $attributes }}>
                    <x-button type="submit" onlyIcon>
                        <x-svg model="search" w="4" h="4" />
                    </x-button>
                </x-form>
            @else
                <input type="hidden" name="tag" :value="selectedTag" {{ $attributes }}>
            @endif

            <div x-show="open" @click.outside="open = false" style="display: none" class="bg-neutral-800 absolute w-fit min-w-28 max-w-80 rounded-lg p-2 top-[105%]">
                <ul class="space-y-1.5 mb-2">
                    <li class="h-[34px] flex items-center text-neutral-800 rounded-md px-1 py-[3px]  text-xs font-bold cursor-pointer uppercase whitespace-nowrap" style="background-color: #a3a3a3"
                        @click="selectedTag = 'GER'; selectedColor = '#a3a3a3'; open = false">
                        GER
                    </li>
                    @foreach ($tags as $tag)
                        <li class="h-[34px] flex items-center justify-between gap-3 rounded-md px-1 py-[3px] text-xs font-bold cursor-pointer uppercase  whitespace-nowrap" style="background-color: {{ $tag->color }}"
                            @click="selectedTag = '{{ $tag->name }}'; selectedColor = '{{ $tag->color }}'; open = false">
                            {{ $tag->name }}
                            <x-button.link :href="route('tags.delete', $tag)" onlyIcon onclick="return confirm('{{ __('Are your sure?') }}')">
                                <x-svg model="x-mark" w="4" h="4" />
                            </x-button.link>
                        </li>
                    @endforeach
                </ul>
                <x-button.link :href="route('tags.create')" onlyIcon>
                    <x-svg model="plus" w="5" h="5" />
                </x-button.link>
            </div>
        </div>
@if($label)
    </div>
@endif
