<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Socio;

class SociosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i = 0; $i < 10; $i++){
        $socio = new Socio();
        $socio->nombre = $faker->firstNameMale;
        $socio->email = $faker->email;
        $socio->fechas = $faker->date($format = 'Y-m-d', $max = 'now');
        $socio->save();
        }
    }
}
