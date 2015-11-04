@extends('admin.headadmin')
@section('content')
<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Teléfono</th>
			<th>E-mail</th>
			<th>Opciones</th>
		</thead>
		@foreach($pacientes as $paciente)
		<tbody>
			<td>{{$paciente->nombre}}</td>
			<td>{{$paciente->apellido}}</td>
			<td>{{$paciente->telefono}}</td>
			<td>{{$paciente->email}}</td>
			<td>
			{!!link_to_route('paciente.edit',$title = 'Editar', $parameters = $paciente->id, $atributes = ['class'=>'btn btn-primary'])!!}
			</td>
		</tbody>
		@endforeach()
</table>
@stop()	