<?php

class Post extends \Eloquent {
	//Para que permita la insercion de datos 
	protected $fillable = ['titulo', 'descripcion', 'imagen', 'contenido', 'tags', 'user_id'];

	/**
	* One Post belongs to one User 
	*/

	public function user()
	{
		return $this->belongsTo('User');
	}

	/**
	* One Post has Many comments
	*/

	public function coments()
	{
		return $this->hasMany('Coment');
	}

	/**
	* One Post has Many logs
	*/

	public function logs()
	{
		return $this->hasMany('Log');
	}
}