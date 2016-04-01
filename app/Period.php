<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    public function savings()
    {
    	return $this->hasMany('App\Saving');
    }
}
