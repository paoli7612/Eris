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
        User::create([
            'name' => 'Tommaso',
            'email' => 'admin@root',
            'password' => Hash::make('asdasdasd')
        ]);
        Course::create(['name' => 'Matematica','slug' => 'matematica']);
        Course::create(['name' => 'Storia','slug' => 'storia']);
        Course::create(['name' => 'Italiano','slug' => 'italiano']);
        Course::create(['name' => 'Chimica','slug' => 'chimica']);
        Course::create(['name' => 'Fisica','slug' => 'fisica']);
        Course::create(['name' => 'Informatica','slug' => 'informatica']);
        Course::create(['name' => 'Educazione civica','slug' => 'education-civica']);
        Lesson::factory(10)->create();
    }
}
