<?php

class User extends \Eloquent {
	protected $fillable = [];

	public function post()
	{
		return $this->hasMany('Post');
	}
                      
	public function coments()
	{
		return $this->hasMany('Coment');
	}

	public function logs()
	{
		return $this->hasMany('Log');
	}
}