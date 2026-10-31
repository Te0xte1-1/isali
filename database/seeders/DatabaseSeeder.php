<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(UnitSeeder::class);
        $this->call(ServicesSeeder::class);

    }
}
