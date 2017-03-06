<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	/*
    // normal query bulder
    // in this case we can only & only call this function with our model
    public static function incomplete(){
    	return static::where('completed', 0)->get();
    }
    */


    /*
		query scope
		usable with other queries at the end or in the begining
    	takes a query and other optinal parameters
    	no need to pass the query though.
    	returns a new query instead of an collection of objects
    	thats why we need to use get() at the end

    	$task = Task::incomplete()->where('id', '>=', 2)->get();
		$task = Task::where('id', '>=', 2)->incomplete()->get();

    */
	public function scopeIncomplete($query){ // just call as incomplete()
		return $query->where('completed', '=', 0);
	}
}
