@extends('layouts.app')

@section('content')
<div class="container-fluid ">
    <div class="row">
    <div class="col-md-1"><img src="{{asset('images/person.jpg')}}" alt="Owner" style="height:80px; width:80px; border-radius:50%;"></div>
    <div class="col-md-2 mt-4">
        <h4 class="text-white">01830268311</h4>
        <h6 class="text-white">Balance</h6>
    </div>

    <h4 class="bg-danger mx-2 p-2">vip:     Member </h4>


    </div>
    <div class="row bg-white mx-4">
        <p>current Balance</p>

        <h4 class="text-warning"> 50 Tk = .58 $</h4>

        <p>Total Revenue</p>

        <h6>0 Tk</h6>

    <div class="col-md-6  mb-2">
    <!-- <a type="button" href="{{ route('invite.friends') }}" class="btn btn-primary btn-lg btn-block" >Invite Friends</a> -->
    <a class="btn btn-primary btn-lg btn-block" href="{{ route('invite.friends') }}" role="button">invite</a>
    </div>


<div class="col-md-6  mb-2">
    <button type="button" class="btn btn-info btn-lg btn-block">My Team</button>
    </div>
</div>

<div class="row bg-light mx-4">
<div class="col-md-6">
<div class="card mb-3 " style="border:5px solid pink; border-radius:10px;">
  <a class="#" href="{{ route('name.address') }}" style="text-decoration:none; color:skyblue; font-size:60px;position:relative; bottom:center;right:center;left:275px;"><i class="far fa-address-card"></i></a>
  <p class="text-center">Personal info</p>
</div>
</div>

<div class="col-md-6">
<div class="card mb-3 " style="border:5px solid pink; border-radius:10px;">
  <a class="#" href="{{ route('bank.account') }}" style="text-decoration:none; color:purple; font-size:60px;position:relative; bottom:center;right:center;left:275px;"><i class="far fa-address-book"></i></a>
  <p class="text-center">Bank account</p>
</div>
</div>

<div class="col-md-6">
<div class="card mb-3 " style="border:5px solid pink; border-radius:10px;">
  <a class="#" href="{{ route('task.withdraw') }}" style="text-decoration:none; color:yellow; font-size:60px;position:relative; bottom:center;right:center;left:275px;"><i class="fas fa-file-invoice-dollar"></i></a>
  <p class="text-center">Withdrawal</p>
</div>
</div>

<div class="col-md-6">
<div class="card mb-3 " style="border:5px solid pink; border-radius:10px;">
  <a class="#" href="{{route('total.income')}}" style="text-decoration:none; color:brown; font-size:60px;position:relative; bottom:center;right:center;left:275px;"><i class="fas fa-history"></i></a>
  <p class="text-center">Income details</p>
</div>
</div>

<div class="col-md-6">
<div class="card mb-3 " style="border:5px solid pink; border-radius:10px;">
  <a class="#" href="{{route('task')}}" style="text-decoration:none; color:brown; font-size:60px;position:relative; bottom:center;right:center;left:275px;"><i class="fas fa-cloud-download-alt"></i></a>
  <p class="text-center">APP Download</p>
</div>
</div>

<div class="col-md-6">
<div class="card mb-3 " style="border:5px solid pink; border-radius:10px;">
  <a class="#" href="{{route('logout')}}"
  onclick="event.preventDefault();
  document.getElementById('logout-form').submit();" style="text-decoration:none; color:green; font-size:60px;position:relative; bottom:center;right:center;left:275px;"><i class="fas fa-power-off"></i></a>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>

  <p class="text-center">Log out</p>
</div>
</div>
</div>

@endsection
