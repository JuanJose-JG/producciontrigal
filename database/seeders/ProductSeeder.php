<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();

        $product->name = "Pompón";
        $product->save();

        $product2 = new Product();

        $product2->name = "Micropompón";
        $product2->save();

        $product3 = new Product();

        $product3->name = "Snapdragon";
        $product3->save();

        $product4 = new Product();

        $product4->name = "Aster";
        $product4->save();

        $product5 = new Product();

        $product5->name = "Solidago";
        $product5->save();
    }
}
