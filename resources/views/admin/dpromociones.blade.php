@extends('admin.headadmin')
@section('content')
<table class="table">
		<thead>
			<th>Titulo</th>
			<th>Descripcion</th>
			<th>Inicio Vigencia</th>
			<th>Fin de vigencia</th>
			<th>Imagen</th>
			<th>Opciones</th>
		</thead>
		@foreach($promos as $promo)
		<tbody>
			<td>{{$promo->titulo}}</td>
			<td style="max-width:300px">{{$promo->descripcion}}</td>
			<td>{{$promo->iniciovigencia}}</td>
			<td>{{$promo->terminovigencia}}</td>
			<td><img src="assets/{{$promo->path}}" alt="" style="width:200px" /></td>
			<td>
			<a href="/Maricurie/public/promos/create"><button type="button" class="btn btn-success"><i class='fa fa-edit fa-fw'></i>Editar</button></a>
			<a href="/Maricurie/public/promos/delete"><button type="button" class="btn btn-danger"><i class='fa fa-trash-o fa-fw'></i>Eliminar</button></a> 
			</td>
		</tbody>
		@endforeach()
</table>
@stop()	