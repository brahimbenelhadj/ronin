<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function addComment($id,Request $request): JsonResponse
    {
        $stars = $request->get("stars");
        $comment = $request ->get("comment");

        if($stars>5){
            $stars = 5;
        }
        if ($stars<0){
            $stars = 0;
        }
        $created = Store::apiCall([
            "uri"=>"review",
            "token"=>env("api_token"),
            "filters"=>"",
            "data"=> [
                "stars"=>$stars,
                "comment"=>$comment,
                "product"=>$id
            ]
        ],"POST");

        return response()->json($created);

    }

}
