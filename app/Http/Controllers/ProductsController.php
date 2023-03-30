<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function Products(){

        $products = Products::all();

        return view('home') -> with([
            'products' => $products
        ]);
    }
}
