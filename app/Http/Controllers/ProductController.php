<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return view('storekeeper.product.index', ['products' => $products]);
    }


    public function create()
    {
        return view('storekeeper.product.create');

    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'product_img' => 'nullable',
        ]);

        DB::table('products')->insert([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'product_img' => $request->product_img,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }


    public function edit($id) {

        $product = DB::table('products')->find($id);

         return view('storekeeper.product.edit', ['product' => $product]);

        }

        public function update(Request $request, $id) {

                $data =  $request->validate([
                    'name' => 'required',
                    'price' => 'required',
                    'description' => 'required',
                    'quantity' => 'required',
                    'product_img' => 'nullable',
                ]);
     
       DB::table('products')->where('id', $id)->update($data);
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }
}
