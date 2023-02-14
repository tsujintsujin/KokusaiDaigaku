<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SchoolYear;
use App\Models\User;

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
       
        $admin = new User();
        $admin->role="admin";
        $admin->name="admin";
        $admin->email="admin@gmail.com";
        $admin->password="123123123";
        $admin->save();
        
        $student = new User();
        $admin->role="student";
        $admin->name="student";
        $admin->email="student@gmail.com";
        $admin->password="123123123";
        $admin->save();
        
        $student = new User();
        $admin->role="teacher";
        $admin->name="teacher";
        $admin->email="teacher@gmail.com";
        $admin->password="123123123";
        $admin->save();
    }
}
 