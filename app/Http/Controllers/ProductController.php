<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function get() {
        return response()->json([
            'success' => true,
            "message" => 'Hola'
        ]);
    }
}
