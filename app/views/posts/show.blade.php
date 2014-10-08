@section('main')
	<h2>{{ $post->titulo }}</h2>
	<span>Por: {{ $post->user->nombre }}
	el {{ $post->created_at }}</span>
	<p>
		{{ $post->contenido }}
	</p>
	<p><strong> Tags: </strong> {{ $post->tags }}
	</p>

	<p>

		{{ link_to_route('posts.index', 'Volver a Posts')}}

	</p>
		
@stop