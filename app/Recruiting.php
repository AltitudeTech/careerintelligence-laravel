<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruiting extends Model
{
    //
    public function scopeSearch($query, $job , $location)
    {
    	return $query->where('jobTitle' , 'like' , '%' .$job. '%')
    				->orWhere('country_id' , 'like' , '%' .$location. '%') ;
    }
}
