<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Weathermap as Weathermap;
use App\Http\Requests\CityRequest;

class WeatermapController extends Controller
{
   
     public function index(){
        if( config('services.local.local') != 'local' ){
            $ip = Weathermap::getRealIP();
            $city = geoip()->getLocation($ip);
            $response = Weathermap::getWeaterforName($city['city']);
        }

        return view('index')->with([
            'data'=>@$response
        ]);
    }

    public function search(CityRequest $request){

        $city = trim($request['city']);
        $response = Weathermap::getWeaterforName($city);
        return view('index')->with([
            'data'=>$response
        ]);
    }
}
