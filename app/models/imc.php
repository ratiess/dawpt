<?php

use SleepingOwl\Models\SleepingOwlModel;

class imc extends SleepingOwlModel
{
	protected $fillable = [
		'numero',
		'texto'
	];
	
	protected $table = "imcs";

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
		return static::lists('numero', 'id');
	}
}