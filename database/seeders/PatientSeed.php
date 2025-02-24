<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Patient::create([
            'name' => 'Juan Carlos Martinez', 
            'date_of_birth' => '1990-01-01',
            'email'=> 'juancarlos22@gmail.com',
            'phone_number' => '1234567890',
            'blood_group' => 'A+',
        ]);
        Patient::create([
            'name' => 'Maria Lopez',
            'date_of_birth' => '1992-11-03',
            'email'=> 'marialopez3@gmail.com',
            'phone_number' => '1234567890',
            'blood_group' => 'O+',
        ]);
        Patient::create([
            'name' => 'John Smith',
            'date_of_birth' => '1997-06-21',
            'email'=> 'jhon33@gmail.com',
            'phone_number' => '1234567890',
            'blood_group' => 'A+',
        ]);
    }
}
