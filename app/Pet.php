<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table = 'pets';

    public function user() {
    	return $this->belongsTo('App\User', 'owner_id');
    }
}
