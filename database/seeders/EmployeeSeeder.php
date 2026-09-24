<?php

namespace Database\Seeders;

use App\Models\Employee;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'name' => 'TJ',
            'email' => 'tj88@gmail.com',
            'phone' => '01800000000',
            'designation' => 'Software Developer',
            'salary' => 22000,
        ]);

        Employee::create([
            'name' => 'Zayan Kabir',
            'email' => 'zayan.k@gmail.com',
            'phone' => '01755555555',
            'designation' => 'DevOps Engineer',
            'salary' => 65000,
        ]);

        Employee::create([
            'name' => 'Fariha Zaman',
            'email' => 'fariha.z@gmail.com',
            'phone' => '01866666666',
            'designation' => 'Data Analyst',
            'salary' => 42000,
        ]);

        Employee::create([
            'name' => 'Tanvir Hasan',
            'email' => 'tanvir.h@gmail.com',
            'phone' => '01977777777',
            'designation' => 'Backend Developer',
            'salary' => 45000,
        ]);

        Employee::create([
            'name' => 'Sadia Islam',
            'email' => 'sadia.i@gmail.com',
            'phone' => '01588888888',
            'designation' => 'HR Manager',
            'salary' => 40000,
        ]);

        Employee::create([
            'name' => 'Imran Khan',
            'email' => 'imran.k@gmail.com',
            'phone' => '01699999999',
            'designation' => 'Full Stack Developer',
            'salary' => 70000,
        ]);

        Employee::create([
            'name' => 'Anika Tahsin',
            'email' => 'anika.t@gmail.com',
            'phone' => '01700112233',
            'designation' => 'Digital Marketer',
            'salary' => 25000,
        ]);

        Employee::create([
            'name' => 'Rakib Ahsan',
            'email' => 'rakib.a@gmail.com',
            'phone' => '01811223344',
            'designation' => 'System Administrator',
            'salary' => 48000,
        ]);

        Employee::create([
            'name' => 'Tasnim Ara',
            'email' => 'tasnim.a@gmail.com',
            'phone' => '01922334455',
            'designation' => 'Content Writer',
            'salary' => 20000,
        ]);

        Employee::create([
            'name' => 'Mahdi Alom',
            'email' => 'mahdi.a@gmail.com',
            'phone' => '01533445566',
            'designation' => 'Mobile App Developer',
            'salary' => 50000,
        ]);

        Employee::create([
            'name' => 'Nusrat Jahan',
            'email' => 'nusrat.j@gmail.com',
            'phone' => '01644556677',
            'designation' => 'Product Designer',
            'salary' => 38000,
        ]);

    }
}
