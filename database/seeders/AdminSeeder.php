<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{

    public function run()
    {
        $Admin = Admin::create([

            'full_name' => 'Programmer',
            'username' => '1',
            'email' => '1@1',
            'password' => bcrypt('1'),

        ]);

    }
}
