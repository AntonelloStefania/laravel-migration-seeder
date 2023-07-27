<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use app\Models\Train;

use Faker\Provider\en_US\Address;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<6; $i++){
            $train = new Train();
            $train->azienda = $faker->word();
            $train->stazione_di_partenza->city();
            $train->stazione_di_arrivo->city();
            $train->orario_partenza-> 
            $train->orario_arrivo->
            $train->codice_treno->
        }
        
    }
}
