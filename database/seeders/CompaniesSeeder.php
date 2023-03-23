<?php

namespace Database\Seeders;

use App\Models\Companies;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        for($i = 1; $i <= 50; $i++)
        {
            Companies::create([
                'name' => $faker->firstName,
                'email' => $faker->email,
                'image' => 'company-images/1.jpg',
                'website' => 'www.engrjakirul.com',
            ]);
        }
    }
}
