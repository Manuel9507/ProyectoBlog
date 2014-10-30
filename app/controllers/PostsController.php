<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /posts
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();
		$this->layout->content = View::make('posts.index', compact('posts'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /posts/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('posts.create', compact ('post'));
		
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /posts
	 *
	 * @return Response
	 */
	public function store()
	{
		//almacenar el nuevo Post
		$input = Input::all();
		$input['user_id'] = 1; //autor temporal
		Post::create( $input );

		return Redirect::route('posts.index')->with('message', 'Post Se Ha Creado, Deje de Molestar :D');
	}

	/**
	 * Display the specified resource.
	 * GET /posts/{id}
	 *
	 * @param  Post  $post
	 * @return Response
	 */
	public function show(Post $post)
	{
		$this->layout->content = View::make('posts.show', compact('post'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /posts/{id}/edit
	 *
	 * @param Post  $post
	 * @return Response
	 */
	public function edit(Post $post)
	{
		$this->layout->content = View::make('posts.edit', compact('post'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /posts/{id}
	 *
	 * @param  Post  $post
	 * @return Response
	 */
	public function update(Post  $post)
	{
		$input = array_except(Input::all(), '_method');
		$post->update($input);

		$this->layout->content = View::make('posts.show', compact('post'))->with('message', 'Post Se ha Actualizo');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /posts/{id}
	 *
	 * @param  Post  $post
	 * @return Response
	 */
	public function destroy(Post  $post)
	{
		//
	}

}