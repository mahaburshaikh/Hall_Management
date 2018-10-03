<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class provost extends Model
{
	use Notifiable;

    public function faculty()
    {
    	return $this->belongsTo(faculty::class);
    }

    public function department()
    {
    	return $this->belongsTo(department::class);
    }
    


}
