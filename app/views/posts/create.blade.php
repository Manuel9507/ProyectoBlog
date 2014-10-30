@section('main')
	<h2>Nuevo Post</h2>

	{{ Form::model(new Post, ['route' => ['posts.store'], 'role' => 'form', 'class' => 'form-horizontal']) }} 
		@include('posts/partials/_form', ['submit_text' => 'Registrar Post']) 
	{{ Form::close() }} 
	
@stop