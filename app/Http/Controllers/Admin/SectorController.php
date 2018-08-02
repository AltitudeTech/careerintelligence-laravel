<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Sector;
use App\Http\Controllers\Controller ;
use Exception ;
use Illuminate\Http\Request;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sector = $this->getAllSectors() ;
        $title = 'Sector' ;
        return view('admin.sector.index',compact(['sector','title'])) ;
    }

    public function userDisplay()
    {
        $sector = Sector::with('categories')->get() ;
        $title = 'Sector' ;
        return view('sector',compact(['sector','title'])) ;
    }
    public function specCat($specCat)
    {
        $sector = Sector::with('categories')->get() ;
        //return $sector ;
        $title = 'Recruitment' ;
        return view('recruitment',compact(['sector','title'])) ;
    }

    public function sectorDisplay($id)
    {
        try
        {
            $sector = $this->getAllSectors() ;
            $findsector = Sector::findorFail($id) ;
            //return $sector ;
            $title = $findsector->name ;
            $view = 'sectors.'. $id ;   
            return view($view ,compact(['findsector','title','sector'])) ; 
        }
        catch(Exception $e)
        {
            $error = $e->getMessage() ;
            return view('errors.404' ,compact(['error'])) ;  ;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sector = new Sector() ;
        $sector->name = $request->sectorName ;
        $sector->description = $request->sectorDescription ;
        $sector->save() ;
        return 'done' ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Sector  $sector
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sector = Sector::find($id) ;
        return $sector ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Sector  $sector
     * @return \Illuminate\Http\Response
     */
    public function edit(Sector $sector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Sector  $sector
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        $sector = Sector::find($id) ;
        $sector->name = $request->name ;
        $sector->description = $request->description ;
        $sector->save() ;

        return 'success fully updated' ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Sector  $sector
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sector::where('id' , $id)->delete() ;
        return $id ;
    }
    public function getAllSectors()
    {
        return Sector::all() ;
    }
}
