<?php


namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Models\RiceInfoInPhil;

class RiceOfThePhilControllerAPI extends Controller
{
    public function index()
    {
        $riceInfo = RiceInfoInPhil::all();
        return response()->json(['riceInfo'=>$riceInfo],200);
    }
}
