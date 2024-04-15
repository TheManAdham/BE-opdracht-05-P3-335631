<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')
        ->join('stores', 'products.id', '=', 'stores.product_id')
        ->select('products.*', 'stores.unit', 'stores.amount')
        ->orderBy('products.barcode', 'asc')
        ->get();

        return view('dashboard', ['products' => $products]);
    }
}
