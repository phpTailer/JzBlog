<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WorkLog extends Model
{
    //
    public function getImageAttribute($key):array
    {
        return explode(';',$key);
    }

}
