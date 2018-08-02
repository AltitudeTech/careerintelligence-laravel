<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    
    public function categories()
    {
    	return $this->hasMany('App\Admin\Category') ;
    }
}
