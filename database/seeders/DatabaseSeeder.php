<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        $this->call(ProductSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(TurnSeeder::class);
        $this->call(ProductionSeeder::class);
        $this->call(WorkSeeder::class);
        $this->call(TypeProductSeeder::class);
    }
}
