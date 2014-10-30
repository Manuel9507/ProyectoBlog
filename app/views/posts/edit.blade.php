@section('main')
<h2>Editar Post</h2>
<!--
{{Form::model(new Post, ['route'=>['posts.edit']]) }}
@include('posts/partials/_edit',['submit_text'=>'Actualizar'])
{{Form::close()}}-->

{{ Form::model($post, array('method' => 'PATCH', 'route' => ['posts.update', $post->id],'role' => 'form', 'class' => 'form-horizontal') ) }}
		
		@include('posts/partials/_form', ['submit_text' => 'Actualizar'])
	
	{{ Form::close()}}

@stop