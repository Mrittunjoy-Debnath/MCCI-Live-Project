@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row bg-light">
        <div class="col-md-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="height: 200px;" src="{{asset('images/11.png')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img style="height: 200px;" src="{{asset('images/33.png')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img style="height: 200px;" src="{{asset('images/34.png')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>
</div>

<div class="container-fluid">
    <div class="row bg-light text-center p-1">
      <div class="col-md-1"></div>
        <div class="col-md-2  p-3">
            <a class="ml-2" href="{{route('task')}}"  style="text-decoration:none; color:black; font-size:40px; line-height:10px;"><span style="font-size:14px;">Facebook</span></a>
</div>
<div class="col-md-2 ml-5 p-3">
            <a class="ml-2" href="{{route('youtube')}}"  style="text-decoration:none; color:black; font-size:40px; line-height:10px;"><span style="font-size:14px;">Youtube</span></a>
</div>
<div class="col-md-2 ml-5 p-3">
            <a class="ml-2" href="{{route('twitter')}}"  style="text-decoration:none; color:black; font-size:40px; line-height:10px;"><span style="font-size:14px;">Twitter</span></a>
</div>
<div class="col-md-2 ml-5 p-3">
            <a class="ml-3" href="{{route('others')}}"  style="text-decoration:none; color:black; font-size:40px; line-height:10px;"><span style="font-size:14px;">Others</span></a>
</div>
</div>
<hr>

<p class="text-center text-white">-- Opps, this is the bottom --</p>

</div>
@endsection