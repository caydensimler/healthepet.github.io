<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table = 'pets';

    public function user() {
    	return $this->belongsTo('App\User', 'owner_id');
    }

    public function shots() {
    	return $this->belongsToMany('App\Shot', 'shotRecords', 'pet_id', 'shot_id')
    		->withPivot('date_administered', 'date_renewal');
    }
}
