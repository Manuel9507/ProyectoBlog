<div>
{{ Form::model(new Coment,['route' => ['posts.coments.store', $post->id]]) }}

@include('coments/partials/_form', ['submit_text' => 'Comentar'])

{{ Form::close() }}

</div>

