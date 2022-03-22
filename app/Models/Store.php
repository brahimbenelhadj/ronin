<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;


    public static function apiCall($data, $method = "GET")
    {
        $link = self::buildLink($data, $method);
        $curl = curl_init();
        $config = array(
            CURLOPT_URL => $link,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,

            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Accept: application/json'
            )
        );
        if ($method == "POST") {
            $config[CURLOPT_HTTPHEADER] = array(
                'Content-Type: application/json',
                'Accept: application/json',
                'Authorization: Bearer ' . $data['token']
            );
            $config[CURLOPT_POSTFIELDS] = json_encode($data['data']);
        }
        curl_setopt_array($curl, $config);

        $response = curl_exec($curl);
        $datas = (json_decode($response))->data;
        curl_close($curl);
        return $datas;
    }

    private static function buildLink($data, $method): string
    {
        $uri = $data["uri"];
        $token = $data["token"];
        $filters = $data["filters"];
        if (strlen($filters) > 0) $filters .= "&";
        $link = env("API_BASE") . '/items/' . $uri . '?' . $filters;
        if ($method == "GET") $link .= 'access_token=' . $token;
        return $link;
    }


}
