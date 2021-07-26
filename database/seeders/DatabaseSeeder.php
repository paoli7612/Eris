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
            'surname' => 'Paoli',
            'nickname' => 'paoli7612',
            'email' => 'admin@root',
            'password' => Hash::make('asdasdasd')
        ]);

        Course::create(['title' => 'Matematica', 'slug' => 'mate']);
        Course::create(['title' => 'Italiano', 'slug' => 'ita']);

        Lesson::create(['title' => 'Equazioni', 'course_id' => 1]);
        Lesson::create(['title' => 'Proporzioni', 'course_id' => 1]);
        Lesson::create(['title' => 'Verismo', 'course_id' => 2]);
    }
}
