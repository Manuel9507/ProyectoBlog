@section('main')
	<h2>Posts</h2>
	@if ( !$posts->count() )
		Aún no se han creado Posts en este blog.
	@else
		<ul>
			@foreach( $posts as $post )
			 <li>
				<a href="{{ route('posts.show', $post->id) }}">
				<strong>{{ $post-> titulo }}</strong></a>
				<p>{{ $post->descripcion }}</p>
				</li>
			@endforeach
		</ul>
	@endif
		<p>{{ link_to_route('posts.create', 'Crear un Nuevo Post')}}</p>
@stop