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
            'type' => 'teacher',
            'password' => Hash::make('asdasdasd')
        ]);

        Course::create(['title' => 'Matematica', 'slug' => 'mate']);
        Course::create(['title' => 'Italiano', 'slug' => 'ita']);
        Course::create(['title' => 'Storia', 'slug' => 'storia']);

        Lesson::create(['title' => 'Prima guerra mondiale', 'course_id' => 3, 'slug' => 'prima_guerra_mondiale']);
        Lesson::create(['title' => 'Guerra fredda', 'course_id' => 3, 'slug' => 'guerra_fredda']);
        Lesson::create(['title' => 'Divina Commedia', 'course_id' => 2, 'slug' => 'divina_commedia']);
    }
}
