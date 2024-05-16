<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\NewEducation;
use App\Models\Teacher;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
        ]);

        // User::factory(10)->create();

       // User::factory()->create([
//'name' => 'Test User',
         //  'email' => 'test@example.com',
       // ]);
    }
}
