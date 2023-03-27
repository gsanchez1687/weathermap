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
		$url_api = "https://api.openweathermap.org/data/2.5/weather?q=".$city."&lang=es&appid=".config('services.openweathermap.keysecret')."&units=metric";
        $response = Http::get($url_api);
       if( !empty($response) ){
			if($response['cod'] == "200" ){
				$json = $response->json();
				return $json;
			}
	   }
    }

    public static function getRealIP(){
    
	if (isset($_SERVER["HTTP_CLIENT_IP"]))
	{
		return $_SERVER["HTTP_CLIENT_IP"];
	}
	elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
	{
		return $_SERVER["HTTP_X_FORWARDED_FOR"];
	}
	elseif (isset($_SERVER["HTTP_X_FORWARDED"]))
	{
		return $_SERVER["HTTP_X_FORWARDED"];
	}
	elseif (isset($_SERVER["HTTP_FORWARDED_FOR"]))
	{
		return $_SERVER["HTTP_FORWARDED_FOR"];
	}
	elseif (isset($_SERVER["HTTP_FORWARDED"]))
	{
		return $_SERVER["HTTP_FORWARDED"];
	}
	else
	{
		return $_SERVER["REMOTE_ADDR"];
	}

}
}