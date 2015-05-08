<?php

use SleepingOwl\Models\SleepingOwlModel;

class rutinasrec extends SleepingOwlModel
{

	protected $fillable = [
		'desc',
		'clase',
		'usuarios_id',
		'imc_id'
		];
	
	protected $table = "rutinasrecs";

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
	public function usuario (){
		return $this->belongsTo('usuario','usuarios_id');
	}
	public function imc (){
		return $this->belongsTo('imc','imc_id');
	}

}