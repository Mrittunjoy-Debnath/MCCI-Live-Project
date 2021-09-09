@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="card bg-info" style="width: 18rem;">
            <div class="card-body ">
                <p> Name :<small> {{ $name }} </small></p>
                <p class="mb-5"> Email :<small> {{ $email }} </small></p>
              <h5 class="card-title text-center font-weight-bold"><u> Total Income </u></h5>
              <p class="card-text">You can increase income by complete task</p>

              <p class="card-text text-center"> Invest  Bal : {{ $invest }}</p>
              <p class="card-text text-center"> Task Bal: {{ $balance }}</p>

              <p class="card-text text-center"> Withdraw Bal: {{ $w_draw }}</p>

              <p class="card-text font-weight-bold text-center">Now your total balance is </p>
              <h4 class="text-center font-weight-bold">Total : {{ $balance }} Taka</h4>

              <a class="btn btn-outline-primary text-center" href="{{ route('home') }}" role="button">Go Home</a>

            </div>
          </div>
    </div>
</div>

@endsection
