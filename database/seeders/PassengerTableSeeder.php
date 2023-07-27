<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Passenger;
use Faker\Generator as Faker;
use Faker\Provider\en_US\Person;


class PassengerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    { 
        for($i=0; $i<=50; $i++){
            $passenger= new Passenger();
            $passenger->nome = $faker->firstName();
            $passenger->cognome = $faker->lastName();
            $passenger->email = $faker->email();
            $passenger->n_telefonico = $faker->phoneNumber();
            $passenger->posto_prenotato = $faker->regexify('[A-D]{1}[1-50]{1}');
            $passenger->codice_biglietto = $faker->regexify('[A-Z]{2}[0-9]{4}[A-Z]{2}');
            $passenger->classe = $faker->boolean();
            $passenger->tariffa_ridotta = $faker->boolean();

            $passenger->save();
            
        }
        
    }
}
