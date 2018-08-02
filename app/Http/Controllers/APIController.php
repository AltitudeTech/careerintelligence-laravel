<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class APIController extends Controller
{
    public function index()
    {
        $countries = DB::table("countries")->get();
        $title = 'Countries' ;
        return view('indexing',compact('countries','title'));
    }
    public function getStateList(Request $request)
    {
        $states = DB::table("states")
                    ->where("country_id",$request->country_id)
                    ->pluck("name","id");
        return response()->json($states);
    }
    public function getCityList(Request $request)
    {
        $cities = DB::table("cities")
                    ->where("state_id",$request->state_id)
                    ->pluck("name","id");
        return response()->json($cities);
    }
}
