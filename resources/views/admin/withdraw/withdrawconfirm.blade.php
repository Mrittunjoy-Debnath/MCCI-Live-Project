@extends('admin.master')

@section('body')
<div class="container">

    <div class="col-md-12">
        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p class="font-weight-bold m-1">{{$message}}</p>
            </div>
        @endif
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card"">

                <div class="card-body">
                    <h4 class="card-title text-center">Withdraw Amount</h4>

                  <h5 class="card-title">Name : {{ $users->name }}</h5>
                  <h5 class="card-title">Email : {{ $users->email }}</h5>
                  <h5 class="card-title">Phone : {{ $users->phone }}</h5>
                  <h5 class="card-title">Bikash : {{ $users->bikash }} </h5>
                  <h5 class="card-title">Invest :{{ $users->invest }} </h5>
                  <h5 class="card-title">Task : {{ $users->balance }}</h5>
                  <h5 class="card-title">Withdraw  : {{ $users->withdraw }}</h5>
                  <h5 class="card-title">Total :{{ $users->total_balance }} </h5>

                  <form class="form-horizontal" action="{{ route('withdraw-admin',$users->id) }}" method="post">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title text-center">Withdraw Amount</h4>


                        <div class="form-group row">
                            <p><small>Amount will be equal or less than your total income</small></p></br>
                            <lebel class="col-sm-12 text-left control-lebel col-form-lebel">Withdraw Money</lebel>
                            <div class="col-sm-7">
                                <input type="integer" name="w_taka_c" class="form-control" placeholder="Enter withdraw amount">
                                <span class="text-danger"> {{$errors->has('w_taka_c') ? $errors->first('w_taka'):''}} </span>
                            </div>
                        </div>


                        {{-- <div class="form-group row">
                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">Say Something </lebel>
                            <div class="col-sm-7">
                                <input type="string" name="w_msg" class="form-control" placeholder="Enter your message">
                                <span class="text-danger"> {{$errors->has('w_msg') ? $errors->first('w_msg'):''}} </span>
                            </div>
                        </div> --}}


                    </div>

                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" name="btn"  class="btn btn-primary alert-link">Submit</button>

                        </div>
                    </div>
                </form>

                </div>
              </div>
        </div>
    </div>
</div>
@endsection
