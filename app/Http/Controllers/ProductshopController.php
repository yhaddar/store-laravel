<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\categories;
use App\Models\User;

class ProductshopController extends Controller
{
    // public function nav () {
    //     $data = array();
    //     if (Session::has('loginid')) {
    //         $data = User::where('id', '=', Session::get('loginid')) -> first();
    //     }
    //     return view('layouts.navbar', compact('data'));
    // }

    public function ProductShop(){
        $productShop = Products::all();
        return view('shop') -> with([
            'productShop' => $productShop
        ]);
    }

    public function search(Request $request){
        $search = $request['search'] ?? "";
        if ($search != "") {
            $productShop = Products::where('name_product', 'LIKE', "%$search%") -> get();
        }else {
            $productShop = Products::all();
        }
        $product = compact('productShop', 'search');
        return view('shop') -> with($product, ['product', $product]);
    }
}
