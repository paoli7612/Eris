<?php

namespace Database\Seeders;

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
            'email' => 'paoli7612@gmail.com',
            'slug' => 'tomaoli',
            'password' => ''
        ]);
        User::factory(10)->create(['type' => 'student']);
    }
}
