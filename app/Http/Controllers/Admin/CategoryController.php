<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Category;
use App\Admin\Sector;
use App\Http\Controllers\Controller ;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sector = Sector::all() ;
        $category = Category::with('sector')->get() ;
        $title = 'Category' ;
        return view('admin.category.index',compact(['category','title','sector'])) ;
    }

    public function userDisplay()
    {
        $category = Category::all() ;
        $title = 'Specialization' ;
        return view('specialization',compact(['category','title'])) ;
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
        //return $request->all() ;
        $category = new Category() ;
        $category->name = $request->categoryName ;
        $category->sector_id = $request->sectorId ;
        $category->description = $request->categoryDescription ;
        $category->save() ;
        return 'done' ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id) ;
        return $category ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        $category = Category::find($id) ;
        $category->name = $request->name ;
        $category->description = $request->description ;
        $category->save() ;

        return 'success fully updated' ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::where('id' , $id)->delete() ;
        return $id ;
    }
}
