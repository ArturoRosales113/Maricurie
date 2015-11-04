@extends('admin.headadmin')
@section('content')
<br>
	{!!Form::model($paciente,['route'=>['paciente.update',$paciente->id], 'method'=>'PUT'])!!}
@include('admin.fpacientes')
	<div style="padding-left:50px">
	{!!Form::submit('Actuaizar',null,['class'=>'btn btn-primary'])!!}
	</div>
	{!!Form::close()!!}
@stop