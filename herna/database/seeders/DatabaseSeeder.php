<?php

namespace Database\Seeders;

use App\Models\Record;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 1,
        ]);

        // Создаём 5 тестовых записей. Если не нужно – закомментируйте.
        Record::factory(5)->create();
    }
}