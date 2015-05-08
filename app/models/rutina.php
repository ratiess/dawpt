<?php

use SleepingOwl\Models\SleepingOwlModel;

class rutina extends SleepingOwlModel
{
	protected $fillable = [
		'nota',
		'votos',
		'desc',
		'siguiendo',
		'clase',
		'usuarios_id'
	];
	
	protected $table = "rutinas";

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
}