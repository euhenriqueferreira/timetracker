<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard', [
            'tags' => Tag::all(),
        ]);
    }
}
