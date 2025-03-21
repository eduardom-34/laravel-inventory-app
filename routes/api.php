<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get("/test", function(){
  return "el backend funciona correctamente";
});

Route::get("/product", [ProductController::class, "getAll"]);

Route::get("/product/{id?}", [ProductController::class, "get"]);

Route::post("/product", [ProductController::class, "create"]);

Route::put("/product/{id}", [ProductController::class, "update"]);

Route::delete("/product/{id}", [ProductController::class, "delete"]);