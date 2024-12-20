<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        
        return view('profile', [
            'user' => auth()->user(),
            'tags' => Tag::all(),
        ]);        
    }

    public function update(Request $request){
        $data = $request->validate([
            'name' => ['required', 'string', 'min:4','max:255'],
        ]);

        $user = auth()->user();
        $user->name = $data['name'];

        $user->save();

        return back()->with('message', __('Profile successfully updated!'));
    }
}
