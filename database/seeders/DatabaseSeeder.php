<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


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
            'name' => 'gerr',
            'email' => 'gerr@gmail.com',
            'password' => bcrypt('gerr'),
            'role' => 'admin',
           ]);

           User::create([
            'name' => 'petugas',
            'email' => 'petugas@gmail.com',
            'password' => bcrypt('petugas'),
            'role' => 'petugas',
           ]);
    }
}
