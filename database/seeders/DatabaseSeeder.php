<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'username' => 'dimaschronicles',
            'name' => 'Dimas Chronicles',
            'email' => 'dimaschronicles@gmail.com',
            'password' => Hash::make('admin123'),
        ]);
    }
}
