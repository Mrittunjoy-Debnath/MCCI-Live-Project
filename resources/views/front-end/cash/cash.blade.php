@extends('layouts.app')

@section('content')
<div class="container-fluid bg-dark py-4">
    <div class="row  py-2">
        <div class="col-md-2"><h4 class="text-white fw-bold ml-4">iCash</h4></div>
        <div class="col-md-8"></div>
        <div class="col-md-2"><h4 class="text-white">My Records</h4></div>
<div class="col-md-1"><img src="{{asset('images/person.jpg')}}" alt="Owner" style="height:80px; width:80px; border-radius:50%;"></div>
<div class="col-md-2 mt-4">
    <h4 class="text-secondary">50</h4>
    <h6 class="text-secondary">Balance</h6>
</div>        
    </div>

    <div class="row bg-danger mx-1">
<h1 class="text-white fw-bold pt-4">Choose your plan</h1>
</div>

<div class="row pt-5 bg-light  mx-1" >
    <div class="col-md-1"><button type="button" class="btn btn-danger px-1">10 days</button></div>
    <div class="col-md-9"></div>
    <div class="col-md-2  text-right"><button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-danger px-3 py-2 fw-bold " style="border-radius:20px;font-size:20px;" >deposit</button></div>
<p style="color:black; font-weight:bold;" >The interest rate is 8.00%</p>
<hr>
</div>
<div class="row bg-light mx-1" style="height:600px;">
</div>
</div>

<div class="modal fade" id="myModal">
    <div class="modal-dialog  modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h6>Deposit amount</h6>
            </div>
            <div class="modal-body">
                <input type="text" placeholder="input deposit amount">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">cancel</button>
                <button type="button" class="btn btn-success px-4" data-dismiss="modal">ok</button>
            </div>
        </div>
    </div>
</div>

@endsection