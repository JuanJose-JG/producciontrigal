<?php

namespace Database\Seeders;

use App\Models\Turn;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TurnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $turn = new Turn();

        $turn->name = "Mañana 1";
        $turn->start_time = "6:00";
        $turn->end_time = "14:00";
        $turn->save();

        $turn2 = new Turn();

        $turn2->name = "Mañana 2";
        $turn2->start_time = "8:00";
        $turn2->end_time = "16:00";
        $turn2->save();

        $turn3 = new Turn();

        $turn3->name = "Mañana 1";
        $turn3->start_time = "10:00";
        $turn3->end_time = "18:00";
        $turn3->save();
    }
}
