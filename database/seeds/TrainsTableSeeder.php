<?php

use App\House;
use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10 ; $i++) {
            $train = new Train();
            $train->azienda = 'Trenitalia';
            $train->stazione_di_partenza = 'Firenze';
            $train->stazione_di_arrivo = 'Milano';
            $train->orario_di_partenza = '15:00:00';
            $train->orario_di_arrivo = '17:00:00';
            $train->codice_treno = '4M5M6N2JFJ';
            $train->numero_carrozze = 20;
            $train->in_orario = 'Sì';
            $train->cancellato = 'No';
            $train->save();
        }
    }
}
