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
        User::create([
            'name' => 'Marco',
            'surname' => 'Paoli',
            'nickname' => 'marco0014',
            'email' => 'test@root',
            'type' => 'student',
            'password' => Hash::make('asdasdasd')
        ]);

        Course::create(['title' => 'Matematica']);
        Course::create(['title' => 'Italiano']);
        Course::create(['title' => 'Storia']);
        Course::create(['title' => 'Chimica']);
        Course::create(['title' => 'Fisica']);

        Lesson::create(['title' => 'Prima guerra mondiale', 'course_id' => 3, 'slug' => 'prima_guerra_mondiale', 'user_id' => 1]);
        Lesson::create(['title' => 'Guerra fredda', 'course_id' => 3, 'slug' => 'guerra_fredda']);
        Lesson::create(['title' => 'Divina Commedia', 'course_id' => 2, 'slug' => 'divina_commedia']);

        User::factory()->count(10)->create(['type' => 'teacher']);
        User::factory()->count(10)->create();
    }
}
