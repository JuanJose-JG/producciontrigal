<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Work;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $work = new Work();

        $work->name = 'Acondicionamiento';
        $work->general_time = '00:15';
        $work->save();

        $work2 = new Work();

        $work2->name = 'Destronque';
        $work2->general_time = '0';
        $work2->save();

        $work3 = new Work();

        $work3->name = 'Evacuacion';
        $work3->general_time = '00:30';
        $work3->save();

        $work4 = new Work();

        $work4->name = 'Preparacion';
        $work4->general_time = '01:07';
        $work4->save();
    }
}
