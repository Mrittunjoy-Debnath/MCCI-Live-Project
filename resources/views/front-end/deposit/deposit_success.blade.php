@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-8" style="margin:auto;">
                <div class="card bg-info" id="card" >
                            <div class="card-body">
                                <h5 class="card-title ">Diposit Success</h5>


                                <form class="form-horizontal" action="{{ route('total.income') }}" method="get">

                                    <div class="card-body">
                                        <h4 class="card-title">Remember</h4>


                                        <div class="form-group row">
                                            <h3>We accepted your request for Diposit money.</h3>
                                            <p>Please ,See your Balance </p>


                                        </div>


                                    </div>

                                    <div class="border-top">
                                        <div class="card-body">
                                            <button type="submit"  class="btn btn-primary">Balance Here</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                </div>
            </div>
        </div>
    </div>
@endsection
