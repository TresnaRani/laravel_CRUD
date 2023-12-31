<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use App\Models\Student;

class UserSeeder extends Seeder
{
   
    public function run(): void
    {
        for($i=0;$i<105;$i++)
        {
            Student::create([
                'name'=> "Tresna rani",
                'address'=> Str::random(6),
                'mobile' => random_int(1000,9999)               
            ]);
        }
    }
}
