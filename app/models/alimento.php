<?php

use SleepingOwl\Models\SleepingOwlModel;

class alimento extends SleepingOwlModel
{

	protected $fillable = [
		'desc',
		'dietas_id',
		'dietasrec_id'
	];
	
	protected $table = "alimentos";

	protected $hidden = [
		'created_at',
		'updated_at'
	];

	public function scopeDefaultSort($query)
	{
		return $query->orderBy('id', 'asc');
	}


	public static function getList()
	{
		return static::lists('desc', 'id');
	}
	public function dieta (){
		return $this->belongsTo('dieta','dietas_id');
	}
	public function dietasrec (){
		return $this->belongsTo('dietasrec','dietasrec_id');
	}
}