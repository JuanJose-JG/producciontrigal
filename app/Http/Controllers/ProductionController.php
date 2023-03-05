<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Production;

class ProductionController extends Controller
{
    public function create(){

        $productions = Production::all();

        return view('production', compact('productions'));
    }

    public function store(Request $request){
        $production = new Production;
    }
}
