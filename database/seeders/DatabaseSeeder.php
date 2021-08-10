<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'type' => 'admin',
            'email' => 'admin@root',
            'password' => Hash::make('asdasdasd')
        ]);
        Course::factory(4)->create();
        Lesson::factory(10)->create();
    }
}
