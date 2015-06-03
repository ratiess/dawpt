<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Usuario extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	
	protected $table = 'usuarios';

	protected $fillable = [
		'email',
		'dni',
		'nombre',
		'apellidos',
		'password',
		'remember_token'

	];

	protected $hidden = array('password', 'remember_token','created_at','updated_at');
	
	public function getAuthIdentifier() {
		return $this->id;
	}
	
	public function getAuthPassword() {
		return $this->password;
	}
}

