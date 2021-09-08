@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-6">
            <div class="card bg-info">
                            <div class="card-body">
                                <h5 class="card-title">Bank Information</h5>

                                    @forelse($addresses as $address)
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Information</h4>

                                        <div class="form-group row">
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">Username</lebel>

                                            <div class="col-sm-7">
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">{{ $address->name }}</lebel>
                                            </div>

                                        </div>


                                        <div class="form-group row">
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">Email/phone </lebel>

                                            <div class="col-sm-7">
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">{{ $address->email }}</lebel>
                                            </div>

                                        </div>



                                        <div class="form-group row">
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">Bikash </lebel>
                                            <div class="col-sm-7">
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">{{ $address->bikash }}</lebel>
                                            </div>
                                        </div>


                                        @empty
                                        <p class="bg-info">First, Update your personal information</p>

                                    @endforelse

                            </div>
        </div>
</div>


    </div>
</div>

@endsection
