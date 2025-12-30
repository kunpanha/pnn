<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
            'name' => 'Kun Panha',
            'email' => 'kunpanha11@gmail.com',
            'type' => 'Admin',
            'status' => '1',
            'password' => Hash::make('12345678'),
        ]);
    }
}
