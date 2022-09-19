<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function mobiles()
    {
        return $this->hasMany('App\Mobile','brand_id');
    }
}
