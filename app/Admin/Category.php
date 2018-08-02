<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	
    public function sector()
    {
    	return $this->belongsTo('App\Admin\Sector','sector_id') ;
    }
}
