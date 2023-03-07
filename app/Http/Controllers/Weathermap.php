<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
class Weathermap{

    public static function getApi($name ){
        $url_api = config($name);
        $response = Http::get($url_api);
        if($response['cod'] == "200" ){
            $json = $response->json();
            return $json;
        }
    }

    public static function getWeaterforName($city){
        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q=".$city."&appid=".config('services.key.keysecret'));
        if($response['cod'] == "200" ){
            $json = $response->json();
            return $json;
        }
    }
}