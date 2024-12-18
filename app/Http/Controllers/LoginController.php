<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        $data = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', Password::defaults()],
        ]);
        
        $user = User::query()->where('email', '=', $data['email'])->first();

        if(Hash::check($data['password'], $user->password)){
            auth()->login($user);
            
            return to_route('dashboard');
        }

        return back()->with('message', __('Something go wrong'));
    }
}
