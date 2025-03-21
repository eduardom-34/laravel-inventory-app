<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function get(int $id = 0) {
        return response()->json([
            'id' => $id,
            'success' => true,
            "message" => 'Hola'
        ]);
    }
}
