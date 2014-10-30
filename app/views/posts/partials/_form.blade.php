<div>
	<div >
	{{ Form::label('titulo', 'Titulo:') }}
	{{ Form::text('titulo') }}
	</div>
	<div >
	{{ Form::label('descripcion', 'Descripcion:') }}
	{{ Form::text('descripcion') }}
	</div>
	<div >
	{{ Form::label('imagen', 'Imagen:') }}
	{{ Form::text('imagen') }}
	</div>
	<div >
	{{ Form::label('contenido', 'Contenido:') }}
	{{ Form::textarea('contenido') }}
	</div>
	<div >
	{{ Form::label('tags', 'Tags:') }}
	{{ Form::text('tags') }}
	</div>

	<div >
	{{ Form::submit($submit_text)}}
	</div> 

</div>
	