<?php

// database/seeders/DoctorsTableSeeder.php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DoctorsTableSeeder extends Seeder
{
    public function run()
    {
        $doctors = [
            [
                'name' => 'Dr. John Doe',
                'email' => 'john@example.com',
                'password' => bcrypt('password'),
                'role_id' => 2, // role_id for doctors
                'specialty' => 'Cardiologist',
            ],
            [
                'name' => 'Dr. Jane Smith',
                'email' => 'jane@example.com',
                'password' => bcrypt('password'),
                'role_id' => 2,
                'specialty' => 'Neurologist',
            ],
            [
                'name' => 'Dr. Emily Brown',
                'email' => 'emily@example.com',
                'password' => bcrypt('password'),
                'role_id' => 2,
                'specialty' => 'Pediatrician',
            ],
            [
                'name' => 'Dr. Michael Johnson',
                'email' => 'michael@example.com',
                'password' => bcrypt('password'),
                'role_id' => 2,
                'specialty' => 'Orthopedic Surgeon',
            ],
            [
                'name' => 'Dr. Sarah Lee',
                'email' => 'sarah@example.com',
                'password' => bcrypt('password'),
                'role_id' => 2,
                'specialty' => 'Dermatologist',
            ],
            [
                'name' => 'Dr. David Wilson',
                'email' => 'david@example.com',
                'password' => bcrypt('password'),
                'role_id' => 2,
                'specialty' => 'Gastroenterologist',
            ],
            [
                'name' => 'Dr. Laura Martinez',
                'email' => 'laura@example.com',
                'password' => bcrypt('password'),
                'role_id' => 2,
                'specialty' => 'Psychiatrist',
            ],
            [
                'name' => 'Dr. Robert Taylor',
                'email' => 'robert@example.com',
                'password' => bcrypt('password'),
                'role_id' => 2,
                'specialty' => 'Oncologist',
            ],
            [
                'name' => 'Dr. Maria Garcia',
                'email' => 'maria@example.com',
                'password' => bcrypt('password'),
                'role_id' => 2,
                'specialty' => 'Endocrinologist',
            ],
            [
                'name' => 'Dr. James Anderson',
                'email' => 'james@example.com',
                'password' => bcrypt('password'),
                'role_id' => 2,
                'specialty' => 'Rheumatologist',
            ],
        ];

        foreach ($doctors as $doctor) {
            User::create($doctor);
        }
    }
}
