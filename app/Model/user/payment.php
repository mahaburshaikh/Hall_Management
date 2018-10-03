<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    public function student()
    {
    	return $this->belongsTo(student::class);
    }
}
