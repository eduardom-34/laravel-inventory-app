<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Product;


class ProductController extends Controller
{
    
    public function get() {
        $products = Product::all();
        return response()->json($products);
    }

    
}
