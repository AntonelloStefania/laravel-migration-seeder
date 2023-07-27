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
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_partenza = $faker->time();
            $train->orario_arrivo = $faker->time();
            $train->codice_treno = $faker->numberBetween(100, 99999);
            $train->numero_carrozze = $faker->numberBetween(6, 20);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->data_partenza = $faker->date();

            $train->save();
        }
        
    }
}
