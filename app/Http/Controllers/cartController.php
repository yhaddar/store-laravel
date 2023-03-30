<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class cartController extends Controller
{
    public function cart(){
        return  view('cart');
    }

    public function AddToCart($id){
        $products = Products::findOrFail($id);

        $cart = session() -> get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }else {
            $cart[$id] = [
                "name_product"  => $products -> name_product,
                "image_product"  => $products -> image_product,
                "price_product"  => $products -> price_product,
                "quantity" => 1
            ];
        }
        session() -> put('cart', $cart);
        return redirect() -> back() -> with('success', "product added");
    }

    public function Remove(Request $request){
        if ($request -> id) {
            $cart = session() -> get('cart');
            if (isset($cart[$request -> id])) {
                unset($cart[$request -> id]);
                session() -> put('cart', $cart);
            }
            session() -> flash('success', "product removed");
        }
    }

    public function update(Request $request){
        if ($request -> id && $request -> quantity) {
            $cart = session() -> get('cart');
            $cart[$request -> id]['quantity'] = $request -> quantity;
            session() -> put('cart', $cart);
            session() -> flash('success', "Product Updated");
        }
    }


}
