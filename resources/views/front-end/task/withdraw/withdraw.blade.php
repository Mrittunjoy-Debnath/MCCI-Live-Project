@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8" style="margin:auto;">
                <div class="card" >
                            <div class="card-body">
                                <h5 class="card-title">Withdraw Balance</h5>


                                <form class="form-horizontal" action="{{ route('withdraw-amount') }}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <h4 class="card-title">Withdraw Amount</h4>


                                        <div class="form-group row">
                                            <p><small>Amount will be equal or less than your total income</small></p>
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">Withdraw Money</lebel>
                                            <div class="col-sm-7">
                                                <input type="integer" name="w_taka" class="form-control" placeholder="Enter Amount of BD taka">
                                                <span class="text-danger"> {{$errors->has('w_taka') ? $errors->first('w_taka'):''}} </span>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">Say Something </lebel>
                                            <div class="col-sm-7">
                                                <input type="string" name="w_msg" class="form-control" placeholder="Enter your message">
                                                <span class="text-danger"> {{$errors->has('w_msg') ? $errors->first('w_msg'):''}} </span>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="border-top">
                                        <div class="card-body">
                                            <button type="submit" name="btn" id="btnShow"  class="btn btn-primary alert-link">Submit</button>

                                        </div>
                                    </div>
                                </form>

                            </div>
                </div>
            </div>
        </div>
    </div>
@endsection
