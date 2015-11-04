@extends('admin.headadmin')
@section('content')
<br>
	{!!Form::model($promocion,['route'=>['promos.update',$promocion->id], 'method'=>'PUT','files' => true])!!}
@include('admin.fpromociones')
	<div style="padding-left:50px">
	{!!Form::submit('Actuaizar',null,['class'=>'btn btn-primary'])!!}
	</div>
	{!!Form::close()!!}
@stop