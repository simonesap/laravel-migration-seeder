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

        $trainsArray = [
            [
                'agency' => 'Trenitalia',
                'departure_station' => 'Roma',
                'arrival_station' => 'Milano',
                'departure_time' => '15:30:00',
                'arrival_time' => '19:00:00',
                'train_Code' => 'KKG458LEPW2X3LM',
                'number_of_carriages' => 8,
                'in_time' => false,
                'deleted' => false,
                'price' => 45,
            ],

            [
                'agency' => 'Trenitalia',
                'departure_station' => 'Bari',
                'arrival_station' => 'Napoli',
                'departure_time' => '12:30:00',
                'arrival_time' => '14:00:00',
                'train_Code' => 'KKG456LEPWLK3LM',
                'number_of_carriages' => 5,
                'in_time' => false,
                'deleted' => false,
                'price' => 35,
            ],

            [
                'agency' => 'Trenitalia',
                'departure_station' => 'Firenze',
                'arrival_station' => 'Genova',
                'departure_time' => '19:30:00',
                'arrival_time' => '21:00:00',
                'train_Code' => 'K5PDF58LEPO2R3LM',
                'number_of_carriages' => 7,
                'in_time' => false,
                'deleted' => false,
                'price' => 40,
            ],
        ];


        foreach( $trainsArray as $item) {
            $train = new Train();

            $train->agency = $item['agency'];
            $train->departure_station = $item['departure_station'];
            $train->arrival_station = $item['arrival_station'];
            $train->departure_time = $item['departure_time'];
            $train->arrival_time = $item['arrival_time'];
            $train->train_Code = $item['train_Code'];
            $train->number_of_carriages = $item['number_of_carriages'];
            $train->in_time = $item['in_time'];
            $train->deleted = $item['deleted'];
            $train->price = $item['price'];

            $train->save();
        }


        // $train = new Train();

        // $train->agency = 'Trenitalia';
        // $train->departure_station = 'Roma';
        // $train->arrival_station = 'Milano';
        // $train->departure_time = '15:30:00';
        // $train->arrival_time = '19:00:00';
        // $train->train_Code = 'KKG458LEPW2X3LM';
        // $train->number_of_carriages = 8;
        // $train->in_time = false;
        // $train->deleted = false;
        // $train->price = 45;

        // $train->save();
    }
}
