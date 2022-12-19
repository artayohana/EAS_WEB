<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();
        User::create([
            'name' => 'Admin2',
            'username' => 'adminyoh',
            'email' => 'admin2@gmail.com',
            'password' => bcrypt('kacamata')
        ]);
    }
}
