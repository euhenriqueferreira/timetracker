<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->each(function($user){
            Task::factory()->count(3)->create([
                'user_id' => $user->id,
                'tag_id' => DB::table('tags')->inRandomOrder()->first()->id,
            ]);
        });
    }
}
