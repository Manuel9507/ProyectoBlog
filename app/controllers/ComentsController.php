<?php

class ComentsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /coments
	 *
	 * @return Response
	 */
	public function index()
	{
		$coments = Coment::all();
		$this->layout->content = View::make('coments.index', compact('coments')); 
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /coments/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('coments.create', compact ('coment'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /coments
	 * @param Post $post	 
	 * @return Response
	 */
	public function store(Post $post)
	{
		$input = Input::all();
		$input['post_id'] = $post->id;
		$input['user_id'] = 1; //Autor temporal
		Coment::create( $input );

		return Redirect::route('posts.show', $post->id)->with('Comentario Guardado.');
	}

	/**
	 * Display the specified resource.
	 * GET /coments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->layout->content = View::make('coments.show', compact('coments')); 
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /coments/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$this->layout->content = View::make('coments.edit', compact('coment'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /coments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /coments/{id}
	 *
	 * @param  Post $post
	 * @param  Coment $coment
	 * @return Response
	 */
	public function destroy(Post $post, Coment $coment)
	{
		$coment->delete();
		return Redirect::route('posts.show', $post->id)->with('message', 'Comentario Eliminado!!!');
	}

}