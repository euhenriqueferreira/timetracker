<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $tasks = Task::query()
        ->where('user_id', '=', auth()->user()->id)
        ->get();

        $groupedTasks = $tasks->groupBy(function($tag) {
            return Carbon::parse($tag->end_time)->format('Y-m-d');
        });
        

        // dd($groupedTasks);

        return view('dashboard', [
            'tags' => Tag::all(),
            'tasks' => $groupedTasks,
        ]);
    }
}
