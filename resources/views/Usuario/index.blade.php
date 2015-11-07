@extends('layouts.principal')
@section('content')
@include('layouts.navbar')
	@foreach($promos as $promo)
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="assets/{{$promo->path}}" alt="Chania">
    </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <i class="fa fa-chevron-left" aria-hidden="true"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
 <i class="fa fa-chevron-right" aria-hidden="true"></i>
    <span class="sr-only">Next</span>
  </a>
</div>
	@endforeach()
	


@endsection()