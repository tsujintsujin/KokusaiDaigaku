<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SchoolYear;
use App\Models\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $sy = new SchoolYear();
        $sy->school_year = "2023-2024";
        $sy->semester = "1";
        $sy->save();
       
        $admin = new Admin();
        $admin->username = "admin";
        $admin->password = "admin";
        $admin->type= "admin";
        $admin->save();
    }
}
 