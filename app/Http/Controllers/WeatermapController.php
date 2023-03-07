<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Weathermap as Weathermap;
use App\Http\Requests\CityRequest;
use App\Models\City;
use Illuminate\Http\Request;

class WeatermapController extends Controller
{
   
     public function index(){

        $datamiami   = Weathermap::getApi('services.wf.miami');
        $datorlando  = Weathermap::getApi('services.wf.orlando');
        $datanewyork = Weathermap::getApi('services.wf.newyork');

        return view('index')->with([
            'datamiami'=>$datamiami,
            'dataorlando'=>$datorlando,
            'datanewyork'=>$datanewyork
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
