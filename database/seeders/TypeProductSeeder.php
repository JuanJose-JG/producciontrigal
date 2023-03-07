<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeProduct;

class TypeProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeProduct = new TypeProduct();

        $typeProduct->name = 'Purple';
        $typeProduct->product_id = 4;
        $typeProduct->save();

        $typeProduct2 = new TypeProduct();

        $typeProduct2->name = 'White';
        $typeProduct2->product_id = 4;
        $typeProduct2->save();
    }
}
