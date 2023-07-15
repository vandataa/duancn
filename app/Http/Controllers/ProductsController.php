<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    function index()  {
        $products = Products::all();
        $products->load('brand');
        return view('listproduct',['products'=>$products]);
    }
}
