<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Session;
use App\Models\User;

class addProduct extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId')) -> first();
        }
        $products = Products::all();

        return view('admin-dashbord', compact('data')) -> with([
            'products' => $products
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId')) -> first();
        }
        return view('admin.admin-create' ,compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId')) -> first();
        }
        $request -> validate([
            'name_product' => 'required',
            'category_product' => 'required',
            'price_product' => 'required',
            'image_product' => 'required',
        ]);

        if ($request -> has('image_product')) {
            $file = $request -> image_product;
            $file_name = time(). '_' .$file -> getClientOriginalName();
            $file -> move(public_path('cards'), $file_name);
        }
        $product = Products::create([
            'name_product' => $request -> name_product,
            'category_product' => $request -> category_product,
            'price_product' => $request -> price_product,
            'image_product' => $file_name,
        ]);
        return view('admin.admin-create',compact('data')) -> with('success', 'The product has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId')) -> first();
        }
        $product = Products::find($id);
        return view('admin.admin-edit', compact('data')) -> with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Products::find($id);
        if ($request -> has('image_product')) {
            $file = $request -> image_product;
            $file_name = time(). '_' .$file -> getClientOriginalName();
            $file -> move(public_path('cards'), $file_name);
        }
        $product -> update([
            'name_product' => $request -> name_product,
            'price_product' => $request -> price_product,
            'image_product' => $file_name,
        ]);
        return redirect() -> route('admin.edit', $product -> id) -> with('success', 'The product has been modified');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Products::find($id);
        $product -> delete();
        return redirect() -> route('admin-dashbord') -> with('success', 'The product has been removed');
    }
}
