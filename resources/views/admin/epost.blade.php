@extends('admin.headadmin')
@section('content')
<br>
	{!!Form::model($post,['route'=>['post.update',$post->id], 'method'=>'PUT','files' => true])!!}
@include('admin.fpost')
	<div style="padding-left:50px">
	{!!Form::submit('Actuaizar',null,['class'=>'btn btn-primary'])!!}
	</div>
	{!!Form::close()!!}
@stop