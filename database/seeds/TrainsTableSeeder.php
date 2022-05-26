<?php

use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $train = new Train();

        $train->agency = 'Trenitalia';
        $train->departure_station = 'Roma';
        $train->arrival_station = 'Milano';
        $train->departure_time = '15:30:00';
        $train->arrival_time = '19:00:00';
        $train->train_Code = 'KKG458LEPW2X3LM';
        $train->number_of_carriages = 8;
        $train->in_time = false;
        $train->deleted = false;
        $train->price = 45;

        $train->save();
    }
}
