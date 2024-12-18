<form class="bg-neutral-700 h-[70px] rounded-lg px-5 py-2.5 flex items-center justify-between gap-5 hover:scale-[1.015] transition" id="form-timebar">
    
    <x-tag-selector />

    <div class="flex-1">
        <x-input.text name="task_name" :placeholder="__('Input the task name here...')" transparent/>
    </div>

    <div class="flex items-center gap-2.5">
        <x-input.text name="task_duration" value="00:00:00" disabled/>

        {{-- TODO: Se for iniciar a contagem, botão normal, se for terminar, botão submit --}}
        <button type="submit" form="form-timebar">
            <x-svg.play w="12" h="12"/>
        </button>
    </div>
</form>