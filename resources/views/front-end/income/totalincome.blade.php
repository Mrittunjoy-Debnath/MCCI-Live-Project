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

              <p class="card-text "> Invest  Bal : {{ $invest }}</p>
              <p class="card-text "> Task Bal: {{ $balance }}</p>

              <p class="card-text "> Withdraw Bal: {{ $w_draw }}</p>

              <p class="card-text font-weight-bold">Now your total balance is </p>
              <h4 class="text-center font-weight-bold">Total : {{ $total_balance }} Taka</h4>

            </div>
          </div>
    </div>
</div>

@endsection
