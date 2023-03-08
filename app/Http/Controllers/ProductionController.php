<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Production;
use App\Models\Product;
use App\Models\Work;
use App\Models\TypeProduct;
use App\Models\Location;

class ProductionController extends Controller
{
    public function create(){
        $productions = Production::select('id')
                                    ->orderBy('id', 'DESC')
                                    ->first();

        $products = Product::all();

        $works = Work::all();

        $typeProducts = TypeProduct::all();

        $locations = Location::all();

        return view('production', compact('productions', 'products', 'works', 'typeProducts', 'locations'));
    }

    public function store(Request $request){
        $production = new Production;
    }
}
