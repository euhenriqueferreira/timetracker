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
        ->join('tags', 'tasks.tag_id', '=', 'tags.id')
        ->where('user_id', '=', auth()->user()->id)
        ->select('tasks.*', 'tags.name as tag_name', 'tags.color as tag_color') // Correção: o select está sendo chamado corretamente na query
        ->limit(7)
        ->get();

        $groupedTasks = $tasks->groupBy(function ($tag) {
            return Carbon::parse($tag->end_time)->format('Y-m-d');
        })->sortKeysDesc()
          ->map(function ($group) {
              return $group->sortByDesc('end_time'); 
          });

        return view('dashboard', [
            'tags' => Tag::all(),
            'tasks' => $groupedTasks,
        ]);
    }
}
