@extends('admin.headadmin')
@section('content')
<br>
	{!!Form::open(['route'=>'promos.store', 'method'=>'POST','files' => true])!!}
@include('admin.fpromociones')
	<div style="padding-left:50px">
	{!!Form::submit('Anunciar',null,['class'=>'btn btn-primary'])!!}
	</div>
	{!!Form::close()!!}
@stop