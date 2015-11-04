@extends('layouts.principal')
@section('content')
@include('layouts.navbar')
@foreach($promos as $promo)
		<tbody>
			<td>{{$promo->titulo}}</td>
			<td>{{$promo->descripcion}}</td>
			<td>{{$promo->iniciovigencia}}</td>
			<td>{{$promo->terminovigencia}}</td>
			<td><img src="asset/{{$promo->path}}" alt="" style="width:200px" />
			</td>
		</tbody>
		@endforeach()
</table>
@endsection()