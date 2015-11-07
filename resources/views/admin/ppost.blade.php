@extends('admin.headadmin')
@section('content')
<br>
	{!!Form::open(['route'=>'post.store', 'Method'=>'POST','files'=>true])!!}
@include('admin.fpost')
	<div style="padding-left:50px">
	{!!Form::submit('Publicar',null,['type'=>'button','class'=>'btn btn-primary'])!!}
	</div>
	{!!Form::close()!!}
@stop