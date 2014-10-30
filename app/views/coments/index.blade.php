@section('main')
	<h2>Comentarios</h2>
	@if ( !$coments->count() )
		Aún no se han creado Comentarios en este blog.
	@else
		<ul>
			@foreach( $coments as $coment )
			 <li>
				<a href="{{ route('coments.show', $coment->id) }}">
				<strong>{{ $coment-> titulo }}</strong></a>
				<p>{{ $coment->comentario }}</p>
				<p>{{ $coment->id }}</p>
				</li>
			@endforeach
		</ul>
	@endif
@stop