<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SchoolYear;
use App\Models\User;
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
        $sy = new SchoolYear();
        $sy->school_year = "2023-2024";
        $sy->semester = "1";
        $sy->save();

        $sy = new SchoolYear();
        $sy->school_year = "2023-2024";
        $sy->semester = "2";
        $sy->save();
        
        $admin = new User();
        $admin->role="admin";
        $admin->name="admin";
        $admin->email="admin@gmail.com";
        $admin->password=Hash::make('123123123');
        $admin->save();
        
        $student = new User();
        $student->role="student";
        $student->name="student";
        $student->email="student@gmail.com";
        $student->password=Hash::make('123123123');
        $student->save();
        
        $teacher = new User();
        $teacher->role="teacher";
        $teacher->name="teacher";
        $teacher->email="teacher@gmail.com";
        $teacher->password=Hash::make('123123123');
        $teacher->save();
    }
}
 