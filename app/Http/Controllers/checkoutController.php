<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\checkout;

class checkoutController extends Controller
{
    public function checkout(Request $request){
        $data = array();
        if (session() -> has('loginId')) {
            $data = User::where('id', '=', session() -> get('loginId')) -> first();
        }
        return view('checkout', compact('data'));
    }

    public function checkout_data(Request $request) {
        $request -> validate([
            'phone_number' => 'required|max:11',
            'alternat_number' => 'required|max:11',
            'adress_1' => 'required',
            'adress_2' => 'required',
            'city' => 'required',
            'state' => 'required',
            'code_postal' => 'required'
        ]);

        $checkout = checkout::create([
            'first_name' => $request -> first_name,
            'last_name' => $request -> last_name,
            'phone_number' => $request -> phone_number,
            'alternat_number' => $request -> alternat_number,
            'adress_1' => $request -> adress_1,
            'adress_2' => $request -> adress_2,
            'city' => $request -> city,
            'state' => $request -> state,
            'code_postal' => $request -> code_postal
        ]);
        return redirect() -> route('checkout') -> with('success', 'We will contact you soon...');
    }
}
