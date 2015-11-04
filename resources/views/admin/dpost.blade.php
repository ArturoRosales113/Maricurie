@extends('admin.headadmin')
@section('content')
<table class="table">
		<thead>
			<th>Titulo</th>
			<th>Contenido</th>
			<th>Etiquetas</th>
			<th>Portada</th>
			<th>Opciones</th>
		</thead>
		@foreach($posts as $post)
		<tbody>
			<td>{{$post->titulo}}</td>
			<td style="max-width:300px, text-allign:center">{{$post->texto}}</td>
			<td>{{$post->tags}}</td>
			<td><img src="assets/{{$post->path}}" alt="" style="width:200px" /></td>
			<td>
			{!!link_to_route('post.edit',$title = 'Editar', $parameters = $post->id, $atributes = ['class'=>'btn btn-primary'])!!}
			</td>
		</tbody>
		@endforeach()
</table>
@stop