<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        
        $search = request()->search;

        $currentOrder = array_keys(array_filter(request()->all(), function($key) {
            return strpos($key, 'order') !== false;
        }, ARRAY_FILTER_USE_KEY));

        $tasks = Task::query()
        ->when($search, function($query) use($search) {
            $query->whereLike('tasks.name', "%$search%");
        })
        ->join('tags', 'tasks.tag_id', '=', 'tags.id')
        ->where('user_id', '=', auth()->user()->id)
        ->select('tasks.*', 'tags.name as tag_name', 'tags.color as tag_color') // Correção: o select está sendo chamado corretamente na query
        ->when(request()->has('order_date_asc'), fn($query) => $query->orderBy('end_time', 'asc'))
        ->when(request()->has('order_time_desc'), fn($query) => $query->orderBy('duration', 'desc'))
        ->when(request()->has('order_time_asc'), fn($query) => $query->orderBy('duration', 'asc'))
        ->when(request()->has('order_date_desc') || (!request()->has('order_date_asc') && !request()->has('order_time_desc') && !request()->has('order_time_asc')), fn($query) => $query->orderBy('end_time', 'desc'))
        ->get();

        $groupedTasks = $tasks->groupBy(function ($tag) {
            return Carbon::parse($tag->end_time)->format('Y-m-d');
        });

        return view('history', [
            'tags' => Tag::all(),
            'tasks' => $groupedTasks,
            'search' => $search,
            'currentOrder' => $currentOrder ? $currentOrder[0] : null,
        ]);
    }
}
