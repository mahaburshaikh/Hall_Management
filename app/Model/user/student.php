<?php

namespace App\Model\user;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


use Illuminate\Database\Eloquent\Model;

class student extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];


    public function faculty()
    {
    	return $this->belongsTo(faculty::class);
    }

    public function room()
    {
    	return $this->belongsTo(room::class);
    }

    public function session()
    {
    	return $this->belongsTo(session::class);
    }
}
