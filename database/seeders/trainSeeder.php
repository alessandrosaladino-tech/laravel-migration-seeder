<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class trainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {
            $train = new Train();
            $train->image = $faker->imageUrl(300, 300, 'train', true, null, false, 'png');
            $train->azienda = $faker->randomElement(['Freccia Rossa', 'Italo', 'SBB Cargo Italia S.r.l.', 'Trenitalia S.p.A.', 'Mercitalia Rail']);
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->price = $faker->randomFloat(2, 5, 200);
            $train->orario_di_partenza = $faker->dateTimeBetween('-30 years', 'now', null);
            $train->orario_di_arrivo =  $faker->dateTimeBetween('-30 years', 'now', null);;
            $train->codice_treno = $faker->numberBetween(0,200);
            $train->numero_carrozze = $faker->numberBetween(1, 60);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();

            $train->save();
        }
    }
}
