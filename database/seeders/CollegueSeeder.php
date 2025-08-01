<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Collegue;

class CollegueSeeder extends Seeder
{
    public function run(): void
    {
        Collegue::insert([
            [
                'name' => 'Amit Shah',
                'email' => 'amitshah70326@gmail.com',
                'phone' => '9825378236',
                'age' => 30,
                'gender' => 'Male',
                'address' => 'Kathmandu',
                'position' => 'Manager',
                'department' => 'Sales'
            ],
            [
                'name' => 'Aman Shah',
                'email' => 'amanshah5985@gmail.com',
                'phone' => '9825378247',
                'age' => 27,
                'gender' => 'Male',
                'address' => 'Lalitpur',
                'position' => 'Developer',
                'department' => 'IT'
            ],
            [
                'name' => 'Prabin Mandal',
                'email' => 'prabinmandal007@gmail.com',
                'phone' => '9862052687',
                'age' => 26,
                'gender' => 'Male',
                'address' => 'Biratnagar',
                'position' => 'Analyst',
                'department' => 'Finance'
            ],
            [
                'name' => 'Rupesh Thakur',
                'email' => 'rupace789@gmail.com',
                'phone' => '9829315565',
                'age' => 28,
                'gender' => 'Male',
                'address' => 'Janakpur',
                'position' => 'Engineer',
                'department' => 'Production'
            ],
            [
                'name' => 'Salok Khadka',
                'email' => 'Salokkhadka69@gmail.com',
                'phone' => '9807086526',
                'age' => 25,
                'gender' => 'Male',
                'address' => 'Pokhara',
                'position' => 'Designer',
                'department' => 'UI/UX'
            ],
            [
                'name' => 'Suhana Shrestha',
                'email' => 'suhanashrestha777@gmail.com',
                'phone' => '9847788014',
                'age' => 24,
                'gender' => 'Female',
                'address' => 'Bhaktapur',
                'position' => 'HR',
                'department' => 'Human Resources'
            ],
            [
                'name' => 'Rohan Prasad Shah',
                'email' => 'rohanshah2090@gmail.com',
                'phone' => '9807901823',
                'age' => 29,
                'gender' => 'Male',
                'address' => 'Chitwan',
                'position' => 'Marketer',
                'department' => 'Marketing'
            ],
            [
                'name' => 'Adish Dahal',
                'email' => 'adishdahal@ratoguras.com',
                'phone' => '9844622904',
                'age' => 31,
                'gender' => 'Male',
                'address' => 'Butwal',
                'position' => 'Consultant',
                'department' => 'Business'
            ],
            [
                'name' => 'Ranjit Rajbanshi',
                'email' => 'rajbsndhiranjit@gmail.com',
                'phone' => '9824301087',
                'age' => 33,
                'gender' => 'Male',
                'address' => 'Dharan',
                'position' => 'Assistant',
                'department' => 'Admin'
            ],

            [
                'name' => 'Nikita Karki',
                'email' => 'nikitakarki99@gmail.com',
                'phone' => '9812345678',
                'age' => 23,
                'gender' => 'Female',
                'address' => 'Hetauda',
                'position' => 'Intern',
                'department' => 'IT'
            ],
        ]);
    }
}
