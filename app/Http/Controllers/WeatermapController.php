<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Weathermap as Weathermap;

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
}
