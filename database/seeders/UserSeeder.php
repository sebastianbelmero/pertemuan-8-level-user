<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('pppppppp'),
            'level' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}