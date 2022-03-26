<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function list(): Factory|View|Application
    {

        $categories = Store::apiCall([
            "uri" => "category",
            "token" => env("api_token"),
            "filters" => ""
        ]);
        $products = Store::apiCall([
            "uri" => "product",
            "token" => env("api_token"),
            "filters" => "fields=*,stocks.*,category.*"
        ]);

        return view("Store.store", compact("categories", "products"));
    }

    public function productsByCategory($category): Factory|View|Application
    {
        $categoryFound = Store::apiCall([
            "uri" => "category/$category",
            "token" => env("api_token"),
            "filters" => ""
        ]);
        $products = Store::apiCall([
            "uri" => "product",
            "token" => env("api_token"),
            "filters" => "fields=*,stocks.*,category.*&filter[category.id]=$category"
        ]);

        return view("Store.storeByCategory", compact("categoryFound", "products"));
    }

    public function productDetails($id): Factory|View|Application
    {
        $product = Store::apiCall([
            "uri" => "product/" . $id,
            "token" => env("api_token"),
            "filters" => "fields=*,stocks.*,category.*"
        ]);
        $stocks = $product->stocks;
        $tailles = [];
        foreach ($stocks as $stock) {
            if (!in_array($stock->taille, $tailles)) {
                $tailles[] = $stock->taille;
            }
        }
        $colors = [];
        foreach ($stocks as $stock) {
            if (!in_array($stock->color, $colors)) {
                $colors[] = $stock->color;
            }
        }

        return view("Store.details", compact("product", "tailles", "colors"));
    }


    public function gestionStock(int $id, Request $request): JsonResponse
    {
        $taille = $request->get("taille");
        $color = $request->get("color");
        $color = str_replace("#", "%23", $color);
        $stocks = Store::apiCall([
            "uri" => "stocks",
            "token" => env("api_token"),
            "filters" => "filter[taille]=$taille&filter[product]=$id&filter[color]=$color"
        ]);
        return response()->json($stocks);
    }

    public function addToCart(int $id, Request $request): JsonResponse
    {
        $taille = $request->get("taille");
        $color = $request->get("color");
        $color = str_replace("#", "%23", $color);
        $stock = Store::apiCall([
            "uri" => "stocks",
            "token" => env("api_token"),
            "filters" => "filter[taille]=$taille&filter[product]=$id&filter[color]=$color"
        ]);
        $stock = $stock[0];
        $created = Store::apiCall([
            "uri" => "cartItems",
            "token" => env("api_token"),
            "filters" => "",
            "data" => [
                "cart" => 2,
                "details" => $stock->id
            ]
        ], "POST");
        return response()->json($created);
    }

    public function removeFromCart(Request $request): JsonResponse
    {
        $item = $request->get("item");
        $deleted = Store::apiCall([
           "uri"=>"cartItems/$item",
            "token"=>env("api_token"),
            "filters"=>"",
        ],"DELETE");
        return response()->json($deleted);

    }

    public function cart(): Factory|View|Application
    {
        $items = Store::apiCall([
            "uri" => "cartItems",
            "token" => env("api_token"),
            "filters" => "fields=*,details.*,details.product.*,details.product.category.*"
        ]);
        return view("Store.cart", compact("items"));
    }

    public function pay(){

    }


}
