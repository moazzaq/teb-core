<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'moaz',
             'email' => 'moazzaq@gmail.com',
             'password' => Hash::make('123456'),
         ]);

         \App\Models\Admin::create([
             'name' => 'admin',
             'email' => 'admin@admin.com',
             'password' => Hash::make('123456'),
         ]);
    }
}
