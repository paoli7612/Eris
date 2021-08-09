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

        User::factory()->count(80)->create(['type' => 'teacher']);
        User::factory()->count(20)->create();
        Course::factory()->count(10)->create();
        Lesson::factory()->count(100)->create();
    }
}
