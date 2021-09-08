@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-8" style="margin:auto;">
                <div class="card bg-info" id="card" >
                            <div class="card-body">
                                <h5 class="card-title ">Withdraw Success</h5>


                                <form class="form-horizontal" action="{{ route('home') }}" method="get">

                                    <div class="card-body">
                                        <h4 class="card-title">Remember</h4>


                                        <div class="form-group row">
                                            <h3>We accepted your request for Withdraw money.</h3>
                                            <p>Please ,wait Sometime.We will confirm you later.</p>


                                        </div>


                                    </div>

                                    <div class="border-top">
                                        <div class="card-body">
                                            <button type="submit"  class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                </div>
            </div>
        </div>
    </div>
@endsection
