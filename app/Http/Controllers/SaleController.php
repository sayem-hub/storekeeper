<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    public function index()
    {
        $transactions = DB::table('sales')
            ->join('products', 'sales.product_id', '=', 'products.id')
            ->select('sales.*', 'products.name as product_name')
            ->get();
        return view('storekeeper.sales.index', ['transactions' => $transactions]);

    }

    public function create()
    {
        $products = DB::table('products')->get();
        return view('storekeeper.sales.create', ['products' => $products]);
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'product_id' => 'required',
            'unit_price' => 'required',
            'sale_qty' => 'required',
        ]);

        $data['total_price'] = $data['unit_price'] * $data['sale_qty'];

        $oldQuantity = DB::table('products')->where('id', $data['product_id'])->first();
        $newQuantity = $oldQuantity->quantity - $data['sale_qty'];

        DB::table('sales')->insert($data);

        //update the quantity
        DB::table('products')->where('id', $data['product_id'])->update([
            'quantity' => $newQuantity,
        ]);


        return redirect()->route('sales.index')->with('success', 'Transaction created successfully.');
    }


}


