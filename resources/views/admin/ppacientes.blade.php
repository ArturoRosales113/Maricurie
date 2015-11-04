@extends('admin.headadmin')
@section('content')
<br>
	{!!Form::open(['route'=>'paciente.store', 'Method'=>'POST'])!!}
@include('admin.fpacientes')
	<div style="padding-left:50px">
	{!!Form::submit('Registrar',null,['type'=>'button','class'=>'btn btn-primary'])!!}
	</div>
	{!!Form::close()!!}
@stop