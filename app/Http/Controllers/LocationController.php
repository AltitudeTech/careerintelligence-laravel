<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB ;

class LocationController extends Controller
{
    //
    public function searchLocation(Request $request)
    {
    	$loc = strtolower($request->term) ;
    	$locations = DB::table('countries')
		            ->join('states', 'countries.id', '=', 'states.country_id')
		            ->join('cities', 'states.id', '=', 'cities.state_id')
		            ->select('countries.name as countryName',
		            		'countries.id as countryId',
		            		'states.name as stateName',
		            		'states.id as stateId',
		            		'cities.name as cityName',
		            		'cities.id as cityId')
                    ->where(strtolower('countries.name') , 'LIKE', '%'.$loc.'%')
                    ->orWhere(strtolower('states.name') , 'LIKE', '%'.$loc.'%')
                    ->orWhere(strtolower('cities.name') , 'LIKE', '%'.$loc.'%')
                    ->where('countries.id' , '=', 230)
		            ->take(10)
		            ->get();
//$locations = DB::table('countries') ->select('countries.name')
//		            ->where(strtolower('countries.name') , 'LIKE', $loc.'%')
//		            ->get();

        if (count($locations) == 0) 
        {
        	$uniqueSearchResult[] = 'No Item Found' ;
        }
        else
        {
        	foreach ($locations as $key => $value)
        	{
        		$searchResult[] = $value->countryName . ', ' . $value->stateName . ', ' . $value->cityName ;
        	}

        	$uniqueSearchResult = array_unique($searchResult) ;
        }
        return $uniqueSearchResult ;
    }

    public function getCitiesInState($country_id)
    {
        $locations = DB::table('states')
                    ->join('cities', 'states.id', '=', 'cities.state_id')
                    ->select('states.name as stateName',
                            'states.id as stateId',
                            'cities.name as cityName',
                            'cities.id as cityId')
                    ->where('states.country_id' , $country_id)
                    ->orderBy('cityName')
                    ->take(20)
                    ->get();

        return $locations ;
    }

}
