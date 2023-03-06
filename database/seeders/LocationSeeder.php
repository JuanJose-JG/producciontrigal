<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $location = new Location();
    
        $location->name = "Flores el trigal Rionegro";
        $location->save();

        $location2 = new Location();
    
        $location2->name = "Flores el trigal Llano Grande";
        $location2->save();

        $location3 = new Location();
    
        $location3->name = "Flores el trigal El Carmen";
        $location3->save();
    }
}
