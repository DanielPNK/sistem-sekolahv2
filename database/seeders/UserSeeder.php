<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userTeacherEmail = 'daniel@ski.sch.id';
        $userStudentEmail = 'andi@ski.sch.id';

        //User teacher
        User::updateOrCreate(
            ['email' => $userTeacherEmail],
            [
                'name' => 'Daniel',
                'password' => bcrypt('password'),
                'role' => 'teacher',
            ]
        );

        //User student
        User::updateOrCreate(
            ['email' => $userStudentEmail],
            [
                'name' => 'Andi',
                'password' => bcrypt('password'),
                'role' => 'student',
            ]
        );
    }
}
