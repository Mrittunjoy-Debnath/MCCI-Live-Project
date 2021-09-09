@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

{{--
        <div class="col-md-6">

        <button type="button" class="btn btn-info" id="info" onclick="myFunction()">Add Information</button>

            <div class="card " id="card" style="visibility:hidden;">
                            <div class="card-body">
                                <h5 class="card-title">Personal Information</h5>


                                <form class="form-horizontal" action="{{ route('save-address') }}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <h4 class="card-title">Information</h4>


                                        <div class="form-group row">
                                            <p><small>Another Contact without login Email or Phone</small></p>
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">Email/Phone </lebel>
                                            <div class="col-sm-7">
                                                <input type="string" name="phone" class="form-control" placeholder="Enter Email/phone">
                                                <span class="text-danger"> {{$errors->has('phone') ? $errors->first('phone'):''}} </span>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">Bikash no </lebel>
                                            <div class="col-sm-7">
                                                <input type="string" name="bikash" class="form-control" placeholder="Enter Bikash no">
                                                <span class="text-danger"> {{$errors->has('bikash') ? $errors->first('bikash'):''}} </span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">Address </lebel>
                                            <div class="col-sm-7">
                                                <input type="text" name="address" class="form-control" placeholder="Enter address">
                                                <span class="text-danger"> {{$errors->has('address') ? $errors->first('address'):''}} </span>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="border-top">
                                        <div class="card-body">
                                            <button type="submit" name="btn" id="personalBtnId"  class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
        </div>
</div> --}}

        <div class="col-md-6">
            <div class="card bg-info">
                            <div class="card-body">
                                <h5 class="card-title">Personal Information</h5>

                                    @foreach($addresses as $address)
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Information</h4>

                                        <div class="form-group row">
                                            <div class="col-sm-5 c-res1">
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">Username </lebel>
                                            </div>

                                            <div class="col-sm-7 c-res2">
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">{{ $address->name }}</lebel>
                                            </div>

                                        </div>


                                        <div class="form-group row">
                                            <div class="col-sm-5 c-res1">
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">Email/phone </lebel>
                                            </div>
                                            <div class="col-sm-7 c-res2">
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">{{ $address->email }}</lebel>
                                            </div>

                                        </div>



                                        <div class="form-group row">
                                            <div class="col-sm-5 c-res1"
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">Email/Phone </lebel>
                                            </div>
                                            <div class="col-sm-7 c-res2">
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">{{ $address->phone }}</lebel>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-sm-5 c-res1">
                                            <lebel class="col-sm-3 c-res text-right control-lebel col-form-lebel">Bikash no </lebel>
                                            </div>
                                            <div class="col-sm-7 c-res2">
                                            <lebel class="col-sm-3 c-res text-right control-lebel col-form-lebel">{{ $address->bikash }}</lebel>
                                            </div>
                                        </div>

                                        {{-- <div class="form-group row">
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">Address </lebel>
                                            <div class="col-sm-7">
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">{{ $address->address }}</lebel>
                                            </div>
                                        </div> --}}

                                        <a class="btn btn-outline-primary text-center" href="{{ route('home') }}" role="button">Go Home</a>
                                    </div>

                                    @endforeach

                            </div>
        </div>
</div>


    </div>
</div>

@endsection
