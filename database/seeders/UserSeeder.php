<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'testadam@gmail.com',
            'name' => 'Adam',
            'password' => \Hash::make('11122233'),
            'status' => 'inactive',
        ]);
    }
}