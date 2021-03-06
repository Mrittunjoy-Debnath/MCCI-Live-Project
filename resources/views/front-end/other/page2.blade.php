@extends('layouts.app')

@section('content')
<div class="container bg-white text-dark">
    <div class="row">
        <p class="text-center font-weight-bold">Recharge</p>

        <div class="col-md-3"> <span class="font-weight-bold">Order ID :</span> 20210809165418645340 </div>
        <h5 class="font-weight-bold mb-4">Payment Method: BKash</h5>

        <!-- <div class="col-md-5 m-2" >
            <a href=""><img src="{{asset('images/Nogod.jpg')}}" class="img img-fluid" style="height:200px; width:100%; border:2px solid black;"> </a>
        </div> -->
        <div class="col-md-5 m-2">
            <a href=""><img src="{{asset('images/Bkash.jpg')}}" class="img img-fluid" style="height:200px; width:100%; border:2px solid black;"></a>
        </div>

        <!-- <div class="col-md-5 m-2">
        <a href=""><img src="{{asset('images/Rocket.jpg')}}" class="img img-fluid" style="height:200px; width:100%; border:2px solid black;"></a>
        </div>
        <div class="col-md-5 m-2">
        <a href=""><img src="{{asset('images/visa.jpg')}}" class="img img-fluid" style="height:200px; width:100%; border:2px solid black;"></a>
        </div> -->

        <div class="offset-md-5 col-md-7 mb-1"><b>Agent Number:</b> <h3>  01986-126112</h3> </div>
    </div>
    </br>



    <form class="form-horizontal"  action="{{ route('save-money')}}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="form-group row">

            <!-- <h6 class="font-weight-bold"> hello </h6><br><br> -->
            <lebel class="col-sm-12 text-center control-lebel col-form-lebel mb-2"><h4>Upload the screenshot of recharge</h4></lebel>
            <lebel class="offset-md-4 col-sm-4 m-1 text-right control-lebel col-form-lebel">Enter Amount</lebel>

            <div class="col-sm-4">
                <input type="integer" name="bikash" class="form-control m-1" placeholder="Enter Bikash Amount">
                <span class="text-danger"> {{$errors->has('bikash') ? $errors->first('bikash'):''}} </span>
            </div>


            <lebel class="offset-md-4 col-sm-4 m-1 text-right control-lebel col-form-lebel">Refferel Name</lebel>

            <div class="col-sm-4">
                <input type="string" name="r_name" class="form-control m-1" placeholder="Enter Reffer name">
                <span class="text-danger"> {{$errors->has('r_name') ? $errors->first('r_name'):''}} </span>
            </div>

            <lebel class="offset-md-4 col-sm-4 m-1 text-right control-lebel col-form-lebel">Bikash Number</lebel>

            <div class="col-sm-4">
                <input type="string" name="r_num" class="form-control m-1" placeholder="Enter Bikash Number">
                <span class="text-danger"> {{$errors->has('r_num') ? $errors->first('r_num'):''}} </span>
            </div>


        </div>

        <div class="form-group row">
            <lebel class="offset-md-4 col-sm-4 m-1 text-right control-lebel col-form-lebel">Sending screenshot</lebel>

            <div class="col-sm-4 m-1">
                <input type="file" size="100" name="product_image" >
                <span class="text-danger"> {{$errors->has('product_image') ? $errors->first('product_image'):''}} </span><br>

                <button type="submit" name="btn" class="btn btn-success mt-2">Submit</button>
            </div>

        </div>



    </form>

    <p>1. ??????????????????????????? ?????????????????? ?????????????????? ??????????????? ??????????????? ????????? ???????????????????????? ???????????? ????????? ????????????</p>
    <p>2 . ????????? ?????? ??????????????? ????????? ??????????????? ??????????????? ??????, ???????????????????????? ?????????????????????????????? ??????????????? ???????????? ???????????????</p>
</div>

@endsection
