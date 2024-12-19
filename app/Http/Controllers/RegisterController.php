<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    // Call the view
    public function index(){
        return view('auth.register');
    }

    // Register an user
    public function register(Request $request){
        $data = $request->validate([
            'name' => ['required', 'string', 'min:4','max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Password::defaults()],
        ]);

        $user = User::query()->create($data);

        auth()->login($user);

        return to_route('dashboard');
    }
}
