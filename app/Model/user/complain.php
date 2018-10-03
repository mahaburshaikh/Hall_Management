<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class complain extends Model
{
    public function student()
    {
    	return $this->belongsTo(student::class);
    }
}
