<?php

class Post extends \Eloquent {
	protected $fillable = [];

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