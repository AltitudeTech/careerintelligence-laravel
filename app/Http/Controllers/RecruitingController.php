<?php

namespace App\Http\Controllers;

use App\Recruiting;
use App\Admin\Sector;
use App\Admin\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\LocationController ;
use App\Http\Controllers\Admin\SectorController ;
use DB ;

class RecruitingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (isset($request->newR))
        {

        }
        else
        {    
            return redirect()->route('recruitment.create') ;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sector = Sector::with('categories')->get() ;
        $countries = $this->countryIndex() ;
        $title = 'Recruiting Now' ;
        return view('recruitingnow',compact(['sector','title','countries'])) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //return $request->all() ;
        if (isset($request->newR))
        {
            $this->newRecruit($request) ;
            return redirect()->route('recruitment.create')->with('status', 'Your submission to Career Intelligence is successfull. You will be contacted soon.');
            //return redirect()->route('recruitment.create', ['message' => 'success']) ;
        }
        else if (isset($request->searchJ))
        {
            return $this->searchJobs($request);
            return redirect(' recruitment/create')->with('status', 'success');
            //return redirect()->route('recruitment.create', ['message' => 'success']) ;
        }

    }

    public function message()
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recruiting  $recruiting
     * @return \Illuminate\Http\Response
     */
    public function show(Recruiting $recruiting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recruiting  $recruiting
     * @return \Illuminate\Http\Response
     */
    public function edit(Recruiting $recruiting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recruiting  $recruiting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recruiting $recruiting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recruiting  $recruiting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recruiting $recruiting)
    {
        //
    }
    
    public function countryIndex()
    {
        return $countries = DB::table("countries")->get();
    }

    public function searchJobs(Request $request)
    {
        //return $request->all() ;


    }

    public function newRecruit($request)
    {
        $recruiting = new Recruiting() ;
        $recruiting->jobTitle = $request->jobTitle ;
        $recruiting->organizationName = $request->organizationName ;
        $recruiting->contactName = $request->contactName ;
        $recruiting->email = $request->email ;
        $recruiting->mobileNumber = $request->mobileNumber ;
        $recruiting->salaryRange = $request->salaryRange ;
        $recruiting->empType = $request->empType ;
        $recruiting->sector_id = $request->sectorId ;
        $recruiting->country_id = $request->countryId ;
        $recruiting->state_id = $request->stateId ;
        $recruiting->city_id = $request->cityId ;
        $recruiting->basicInfo = $request->basicInfo ;
        $recruiting->moreInfo = $request->moreInfo ;
        $recruiting->save() ;
        return redirect()->route('recruitment.create', ['message' => 'success']) ;
    }

    public function searchJobIndex()
    {
        $locationController = new LocationController ;
        $cities = $locationController->getCitiesInState(230) ;
        $sectorController = new SectorController ;
        $sectors = $sectorController->getAllSectors() ;

        $cityAndJobCount =  $this->getCityAndJobCount() ;
        $sectorAndJobCount =  $this->getSectorAndJobCount() ;
        $empTypeCount =  $this->getEmpTypeCount() ;
        $title = 'Search' ;
        return view('search', compact('cities','title','sectors','cityAndJobCount','sectorAndJobCount','empTypeCount')) ;
    }
    
    public function getCityAndJobCount()
    {

        $cityAndJobCount = DB::table('recruitings')
                    ->join('cities', 'recruitings.city_id' , '=', 'cities.id')
                    ->join('states', 'recruitings.state_id', '=', 'states.id')
                    ->join('countries', 'recruitings.country_id',  '=', 'countries.id')
                    ->select('cities.name as cityName',
                            DB::raw("count(recruitings.city_id) as countJC"))
                    ->groupBy('cities.name')
                    ->where('recruitings.country_id',230)
                    ->get();

        return $cityAndJobCount ;
    }

    public function getSectorAndJobCount()
    {

        $sectorAndJobCount = DB::table('sectors')
                    ->join('recruitings', 'sectors.id' , '=', 'recruitings.sector_id')
                    ->select('sectors.name as sectorName',
                            DB::raw("count(recruitings.sector_id) as countSJ"))
                    ->groupBy('sectors.name')
                    ->where('recruitings.country_id',230)
                    ->get();

        return $sectorAndJobCount ;
    }

    public function getEmpTypeCount()
    {

        $empTypeCount = DB::table('recruitings')
                     ->select(DB::raw('count(*) as empTypeC, empType'))
                     ->where('recruitings.country_id', 230)
                     ->groupBy('empType')
                     ->get();

        return $empTypeCount ;
    }
   
}
