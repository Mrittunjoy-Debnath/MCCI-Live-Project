@extends('admin.master')

@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p class="font-weight-bold m-1">{{$message}}</p>
                </div>
            @endif
        </div>
        <div class="col-md-12">
        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Basic Datatable</h5>


                                <form class="form-horizontal" action="{{ route('invest-done') }}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <h4 class="card-title">Manage Invest & Income</h4>
                                        <div class="form-group row">
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">Invest Amount</lebel>
                                            
                                            <div class="col-sm-7">
                                                <input type="integer" name="investment" class="form-control" placeholder="Enter investment amount">
                                                <span class="text-danger"> {{$errors->has('investment') ? $errors->first('investment'):''}} </span>
                                            </div>
                                            
                                        </div>

                                        <div class="form-group row">
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">Daily Income</lebel>
                                            <div class="col-sm-7">
                                                <input type="integer" name="daily_income" class="form-control" placeholder="Enter daily income">
                                                <span class="text-danger"> {{$errors->has('daily_income') ? $errors->first('daily_income'):''}} </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border-top">
                                        <div class="card-body">
                                            <button type="submit" name="btn" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
</div>
</div>
</div>


    
@endsection