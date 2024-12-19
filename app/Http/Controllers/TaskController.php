<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // if(request()->task_name){
        //     dd('comtaskname');
        // }

        if(! request()->task_name){
            $request['task_name'] = __('Task without a name...');
        }

        $data = $request->validate([
            'task_name' => ['required', 'min:3', 'max:50', 'string'],
            'tag' => ['required'],
            'start_time' => ['required'],
            'task_duration' => ['required'],
        ]);

        // dd(Carbon::now());

        $durationParts = explode(':', $data['task_duration']);
        $durationInSeconds = ($durationParts[0] * 3600) + ($durationParts[1] * 60) + $durationParts[2];

        Task::query()->create([
            'user_id' => auth()->user()->id,
            'tag_id' => Tag::query()->where('name', '=', $data['tag'])->first()->id,
            'name' => $data['task_name'],
            'start_time' => Carbon::parse($data['start_time'])->setTimezone('America/Sao_Paulo')->format('Y-m-d H:i:s'),
            'duration' => $data['task_duration'],
            'end_time' => Carbon::parse($data['start_time'])->setTimezone('America/Sao_Paulo')->addSeconds($durationInSeconds)->format('Y-m-d H:i:s')
        ]);

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        $currentTag = Tag::query()->where('id', '=', $task->tag_id)->first();

        return view('tasks.edit', [
            'tags' => Tag::all(),
            'task' => $task,
            'currentTag' => $currentTag,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $data = $request->validate([
            'name' => ['required', 'min:3', 'max:50', 'string'],
            'tag' => ['required'],
            'start_time' => ['required'],
            'end_time' => ['required']
        ]);

        $taskStart = Carbon::parse($data['start_time']);
        $taskEnd = Carbon::parse($data['end_time']);
        $diff = $taskEnd->diffInSeconds($taskStart);
        $duration =  Carbon::createFromTimestamp($diff)->format('H:i:s');
        

        $task->name = $data['name'];
        $task->tag_id = Tag::query()->where('name', '=', $data['tag'])->first()->id;
        $task->start_time = $data['start_time'];
        $task->end_time = $data['end_time'];
        $task->duration = $duration;

        $task->save();

        // dd($data, $taskStart, $taskEnd, $duration);
        return back()->with('message', __('Task successfully updated!'));
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return back();
    }
}
