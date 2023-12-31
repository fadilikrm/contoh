<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::create([
            'name'=> 'Admin',
            'level'=> 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt(12345),
        ]);
        User::create([
            'name'=> 'fadil',
            'level'=> 'editor',
            'email' => 'fadil@editor.com',
            'password' => bcrypt(12345),
        ]);
    }
}
