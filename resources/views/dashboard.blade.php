<x-layouts.app>
    <div class="p-8 h-screen flex-1">
        <form class="bg-neutral-700 h-[70px] rounded-lg px-5 py-2.5 flex items-center justify-between gap-5 hover:scale-[1.015] transition" id="form-timebar">
            
            <div class="bg-neutral-800 w-[70px] h-7 flex items-center justify-center rounded-md">
                <span class="text-neutral-200/50 text-xs font-normal uppercase">GER</span>
                {{-- TODO: Sistema de Tags --}}
            </div>

            <div class="flex-1">
                <input type="text" name="task_name" class="bg-transparent w-full text-xl font-normal text-neutral-200 focus:outline-none placeholder:text-neutral-200/50" placeholder="{{ __('Input the task name here...') }}">
            </div>

            <div class="flex items-center gap-2.5">
                <input type="text" name="task_duration" class="w-28 bg-transparent text-2xl text-center font-normal text-neutral-200/50 tracking-widest pointer-events-none" value="00:00:00">
                {{-- Se for iniciar a contagem, botão normal, se for terminar, botão submit --}}
                <button type="submit" form="form-timebar">
                    <x-svg.play w="12" h="12"/>
                </button>
            </div>
        </form>
    </div>


</x-layouts.app>
