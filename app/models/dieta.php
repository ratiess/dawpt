<?php

use SleepingOwl\Models\SleepingOwlModel;

class dieta extends SleepingOwlModel
{
	protected $fillable = [
		'desc',
		'votos',
		'nota',
		'siguiendo',
		'clase',
		'usuarios_id',
		'dietasrec_id'
	];
	
	protected $table = "dietas";

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
	public function dietasrec (){
		return $this->belongsTo('dietasrec','dietasrec_id');
	}

}