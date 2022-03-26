<?php


use App\Http\Controllers\Store\StoreController;
use Illuminate\Support\Facades\Route;

Route::get("/produits", [StoreController::class, 'list'])->name("products");

Route::get("/produits/category/{category}", [StoreController::class, "productsByCategory"])->name("products.category.list");
Route::get("/produits/{id}", [StoreController::class, "productDetails"])->name("products.details");


Route::post("/api/produits/{id}/getColors", [StoreController::class, "gestionStock"])->name("product.details.checkStock");


Route::post("/api/produits/{id}/addToCart", [StoreController::class, 'addToCart'])->name("product.addToCart");
Route::post("/api/produits/removeFromCart", [StoreController::class, 'removeFromCart'])->name("product.removeFromCart");


Route::get("/cart", [StoreController::class, "cart"])->name("cart.view");

