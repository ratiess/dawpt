<?php

use SleepingOwl\Models\SleepingOwlModel;

class usuario extends SleepingOwlModel
{

	protected $fillable = [
		'email',
		'dni',
		'nombre',
		'apellidos',
		'password',
		];
	
	protected $table = "usuarios";

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
		return static::lists('dni', 'id');
	}
}