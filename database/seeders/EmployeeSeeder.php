<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            [
                'name' => 'João Silva',
                'document' => '12345678900',
                'birthday' => '1990-05-15',
                'phone' => '11999991234',
                'gender' => Employee::GENDER_MALE
            ],
            [
                'name' => 'Maria Oliveira',
                'document' => '98765432100',
                'birthday' => '1985-10-22',
                'phone' => '21988885678',
                'gender' => Employee::GENDER_FEMALE
            ],
            [
                'name' => 'Carlos Mendes',
                'document' => '45612378900',
                'birthday' => '1995-08-30',
                'phone' => '31977774321',
                'gender' => Employee::GENDER_MALE
            ],
            [
                'name' => 'Ana Souza',
                'document' => '78945612300',
                'birthday' => '1992-07-18',
                'phone' => '41966667890',
                'gender' => Employee::GENDER_FEMALE
            ],
            [
                'name' => 'Fernando Alves',
                'document' => '85274196300',
                'birthday' => '1988-04-25',
                'phone' => '51955551597',
                'gender' => Employee::GENDER_MALE
            ],
            [
                'name' => 'Beatriz Lima',
                'document' => '36925814700',
                'birthday' => '2000-12-05',
                'phone' => '61944447531',
                'gender' => Employee::GENDER_FEMALE
            ],
            [
                'name' => 'Ricardo Martins',
                'document' => '15935785200',
                'birthday' => '1997-02-14',
                'phone' => '71933333698',
                'gender' => Employee::GENDER_MALE
            ],
            [
                'name' => 'Gabriela Rocha',
                'document' => '75315985200',
                'birthday' => '1994-09-09',
                'phone' => '81922228547',
                'gender' => Employee::GENDER_FEMALE
            ]
        ];

        DB::table('employees')->insert($employees);
    }
}
