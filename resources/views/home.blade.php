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
      <img style="height: 200px;" src="{{asset('images/l.png')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img style="height: 200px;" src="{{asset('images/software-developer-6521720.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img style="height: 200px;" src="{{asset('images/application-1883452.jpg')}}" class="d-block w-100" alt="...">
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
    <div class="row bg-info text-center p-1">
      <div class="col-md-1"></div>
        <div class="col-md-2  p-3 f-res">
            <a class="ml-2" href="{{route('deposit')}}"  style="text-decoration:none; color:black; font-size:40px; line-height:10px;"><i class="far fa-file-alt"></i><br><span style="font-size:14px;">Deposit</span></a>
</div>
<div class="col-md-2 ml-5 p-3 f-res">
            <a class="ml-2" href="{{route('vip')}}"  style="text-decoration:none; color:black; font-size:40px; line-height:10px;"><i class="far fa-gem"></i></i><br><span style="font-size:14px;">VIP</span></a>
</div>
{{-- <div class="col-md-2 ml-5 p-3">
            <a class="ml-2" href="{{route('cash')}}"  style="text-decoration:none; color:black; font-size:40px; line-height:10px;"><i class="fas fa-money-check-alt"></i><br><span style="font-size:14px;">ICash</span></a>
</div>
<div class="col-md-2 ml-5 p-3">
            <a class="ml-3" href="{{route('service')}}"  style="text-decoration:none; color:black; font-size:40px; line-height:10px;"><i class="fa fa-envelope"></i><br><span style="font-size:14px;">Service</span></a>
</div> --}}
</div>
<br>

<div class="row bg-light">
  <div class="col-md-4 border border-2" style="background-color:Violet;">
    <p class="text-center">Available Balance</p>
    <p class="text-center">{{ $bal }}</p>
  </div>
  <div class="col-md-4 border border-2" style="background-color:Violet;">
    <p class="text-center">Yesterday's income</p>
    <p class="text-center">0</p>
  </div>
  <div class="col-md-4 border border-2" style="background-color:Violet;">
    <p class="text-center">Today's income</p>
    <p class="text-center">0</p>
  </div>
</div>

{{-- <div class="row bg-light">
  <div class="col-md-4 border border-2" >
    <p class="text-center">This week's income</p>
    <p class="text-center">0</p>
  </div>
  <div class="col-md-4 border border-2" >
    <p class="text-center">This month's income</p>
    <p class="text-center">0</p>
  </div>
  <div class="col-md-4 border border-2" >
    <p class="text-center">Last month's income</p>
    <p class="text-center">0</p>
  </div>
</div>

<div class="row bg-light ">
  <div class="col-md-4 border border-2" >
    <p class="text-center">Total revenue</p>
    <p class="text-center">0</p>
  </div>
  <div class="col-md-4 border border-2" >
    <p class="text-center">Task received</p>
    <p class="text-center">0</p>
  </div>
  <div class="col-md-4 border border-2" >
    <p class="text-center">Remaining Task</p>
    <p class="text-center">3</p>
  </div>
</div> --}}
<br>
<div class="row " style="background-color:SlateBlue;">
<h6 class="fw-bold">Task Hall</h6>
<div class="col-md-2"></div>
<div class="col-md-2" >
<div class="card mb-3 border border-4">

  <div class="card-body">
    <h5 class="card-title fw-bold">Facebook</h5>
    <p class="card-text">Like/follow</p>
    <br>
  </div>

  <a class="ml-3" href="{{route('task')}}" style="text-decoration:none; color:green; font-size:60px;position:absolute; bottom:0;right:0;"><i class="fab fa-facebook-square"></i></a>
</div>
</div>

<div class="col-md-2">
<div class="card mb-3 border border-4">

  <div class="card-body">
    <h5 class="card-title fw-bold">Youtube</h5>
    <p class="card-text">Like/follow</p>
    <br>
  </div>

  <a class="ml-3" href="{{route('youtube')}}" style="text-decoration:none; color:green; font-size:60px;position:absolute; bottom:0;right:0;"><i class="fab fa-youtube"></i></a>
</div>
</div>

<div class="col-md-2">
<div class="card mb-3 border border-4">

  <div class="card-body">
    <h5 class="card-title fw-bold">Twitter</h5>
    <p class="card-text">Like/follow</p>
    <br>
  </div>

  <a class="ml-3" href="{{route('twitter')}}"  style="text-decoration:none; color:green; font-size:60px;position:absolute; bottom:0;right:0;"><i class="fab fa-twitter"></i></a>
</div>
</div>

<div class="col-md-2">
<div class="card mb-3 border border-4">

  <div class="card-body">
    <h5 class="card-title fw-bold">Others</h5>
    <p class="card-text">Like/follow</p>
    <br>
  </div>

  <a class="ml-3" href="{{route('others')}}" style="text-decoration:none; color:green; font-size:60px;position:absolute; bottom:0;right:0;"><i class="fa fa-heart"></i></a>
</div>
</div>

<div class="col-md-2">

</div>
</div>

<hr>
<hr>
<div class="row bg-info fixed-bottom pt-1">
  <div class="col-md-1"></div>
  <div class="col-md-2 col-sm-2 col-xs-2 text-center f-res">
  <a class="ml-1" href="{{url('/home')}}"  style="text-decoration:none; color:black; font-size:40px;line-height:10px;"><i class="fas fa-home"></i> <br> <span style="font-size:14px;">Home</span></a>
</div>

<div class="col-md-2 col-sm-2 col-xs-2 text-center f-res">
  <a class="ml-1" href="{{url('/vip')}}"  style="text-decoration:none; color:black; font-size:40px;line-height:10px;"><i class="far fa-gem"></i> <br> <span style="font-size:14px;">VIP</span></a>
</div>

<div class="col-md-2 col-sm-2 col-xs-2 text-center f-res">
  <a class="ml-1" href="{{url('/task')}}" style="text-decoration:none; color:black; font-size:40px;line-height:10px;"><i class="fab fa-wpforms"></i> <br> <span style="font-size:14px;">Tasks</span></a>
</div>

<div class="col-md-2 col-sm-2 col-xs-2 text-center f-res">
  <a class="ml-1" href="{{url('/home')}}"  style="text-decoration:none; color:black; font-size:40px;line-height:10px;"><i class="fas fa-clock"></i> <br> <span style="font-size:14px;">Records</span></a>
</div>

<div class="col-md-2 col-sm-2 col-xs-2 text-center f-res">
  <a class="ml-1" href="{{url('/me')}}"  style="text-decoration:none; color:black; font-size:40px;line-height:10px;"><i class="far fa-user"></i><br> <span style="font-size:14px;">Me</span></a>
</div>
</div>
</div>
@endsection
