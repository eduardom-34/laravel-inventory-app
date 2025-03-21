<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get("/test", function(){
  return "el backend funciona correctamente";
});

Route::get("/product", [ProductController::class, "get"]);