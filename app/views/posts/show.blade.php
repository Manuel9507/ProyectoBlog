@section('main')
	<h2>{{ $post->titulo }}</h2>
	<span>Por: {{ $post->user->nombre }}
	el {{ $post->created_at }}</span>
	<p>
		{{ $post->contenido }}
	</p>
	<p><strong> Tags: </strong> {{ $post->tags }}
	</p>

	<div>
		@foreach($post->coments as $coment )
			 <div style="border: 1px solid #CCC; margin-bottom:4px;">
			 
				<span >		{{$coment->user->nombre}} el {{$coment->created_at}}
				<div class="list-inline">
				{{ Form::open(array('class' => 'form-horizontal pull-right', 'method' => 'DELETE', 'route' =>array('posts.coments.destroy', $post->id, $coment->id))) }}

				{{ Form::submit('Eliminar', array('class' => 'btn btn-sm btn-danger'))}}

				{{ Form::close() }}
				</span>
				<p align="left">{{$coment->comentario}}</p>
			</div>
			@endforeach
			</div>
			<!--Termina-->	

	</div>

		<div align="center"><h3><strong>Agregar nuevo comentario</strong></h3></div>

		<div align="center">
		@include('coments/partials/_comment')
			
		</div>


	<p align="center">
	{{ link_to_route('posts.index', 'Volver a Posts')}}
	</p>
		
		<p>
	{{link_to_route('posts.edit','Editar post', $post->id)}}
</p>

@stop





	