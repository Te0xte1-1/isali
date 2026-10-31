<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        $User = User::create([

            'full_name' => 'Programmer',
            'username' => '1',
            'email' => '1@1',
            'password' => bcrypt('1'),

        ]);
        $User->attachRole('super_admin');
    }
}
