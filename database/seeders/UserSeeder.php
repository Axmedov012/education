<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
          'name'=>'doni',
          'email'=>'doni@mail.uz',
          'password'=>bcrypt('doni1234'),
          'role_id'=>1,
        ]);

        User::create([
            'name'=>'user',
            'email'=>'user@mail.uz',
            'password'=>bcrypt('user1234'),
            'role_id'=>2,
          ]);
    }
}
