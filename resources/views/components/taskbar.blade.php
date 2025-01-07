@props([
    'tags' => []
])

<x-form :action="route('tasks.create')" post class="shadow-2xl relative z-30 bg-neutral-800 border border-neutral-200/60 h-[70px] rounded-lg px-5 py-2.5 flex items-center justify-between gap-5 hover:scale-[1.015] transition" id="form-timebar"
    x-data="{ 
        seconds: 0, 
        counter: false,
        startTime: '',
        formattedTime() { 
            const hrs = String(Math.floor(this.seconds / 3600)).padStart(2, '0');
            const mins = String(Math.floor((this.seconds % 3600) / 60)).padStart(2, '0');
            const secs = String(this.seconds % 60).padStart(2, '0');
            return `${hrs}:${mins}:${secs}`;
        },
        getStartTime(){
            return this.startTime;
        },
        getEndTime(){
            return this.endTime;
        },
        startCounter() { 
            this.counter = true;
            this.startTime = new Date().toLocaleString();
            console.log(new Date());
            this.interval = setInterval(() => { 
                this.seconds++; 
            }, 1000); 
        }, 
        stopCounter() { 
            counter = false;
            clearInterval(this.interval); 
        } 
    }" >
    
    <x-tag-selector :tags="$tags" />

    <input type="hidden" name="start_time" x-bind:value="getStartTime()">

    <div class="flex-1">
        <x-input name="task_name" :placeholder="__('Input the task name here...')" transparent/>
    </div>

    <div class="flex items-center gap-2.5">
        <x-input name="task_duration" x-bind:value="formattedTime()" disabled/>

        <x-button x-show="!counter"  @click.prevent="startCounter()">
            <x-svg model="play" w="12" h="12"/>
        </x-button>
        <x-button x-show="counter" type="submit" form="form-timebar" @click="startCounter()">
            <x-svg model="pause" w="12" h="12"/>
        </x-button>
    </div>
</x-form>

{{-- <div >

<p>Contador: <span x-text="formattedTime()"></span></p>

<button @click="startCounter()">Iniciar</button>
</div> --}}