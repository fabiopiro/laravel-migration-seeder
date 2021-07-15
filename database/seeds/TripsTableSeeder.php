<?php

use Illuminate\Database\Seeder;

// !
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // ...da trips.php
        $arrayTrips = config('trips');

        foreach ($arrayTrips as $item) {
            # code...
            // 1) Creo un nuovo oggetto, istanza della classe Trip
            $trip = new Trip();

            // 2) Valorizzo le proprietà dell'oggetto
            // ...da trips.php
            $trip->country = $item['country'];
            $trip->region = $item['region'];
            $trip->city = $item['city'];
            $trip->price = $item['price'];

            // 3) Salvo l'oggetto
            $trip->save();
        }
    }
}
