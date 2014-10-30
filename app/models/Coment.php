<?php

class Coment extends \Eloquent {
	protected $fillable = ['comentario','user_id','post_id'];


	public function post()
	{
		return $this->belongsTo('Post');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}
}