<?php

use SleepingOwl\Models\SleepingOwlModel;

class accione extends SleepingOwlModel
{
protected $table = "acciones";
	protected $fillable = [
		'desc',
		'series',
		'rep',
		'dias',
		'rutinasrec_id',
		'rutinas_id'
	];
	
	

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
	public function rutinasrec (){
		return $this->belongsTo('rutinasrec','rutinasrec_id');
	}
	public function rutina (){
		return $this->belongsTo('rutina','rutinas_id');
	}

}