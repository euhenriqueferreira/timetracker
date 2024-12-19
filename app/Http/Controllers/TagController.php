<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tags.create',[
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'min:3', 'max:30'],
            'color' => ['required', 'hex-color']
        ]);

        if($data['color'] < '#333333'){
            return back()->with('message', __('Choose a lighter color'));
        }

        if($data['color'] > '#aaaaaa'){
            return back()->with('message', __('Choose a darker color'));
        }

        Tag::query()->create($data);

        return to_route('dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();

        return back();
    }
}
