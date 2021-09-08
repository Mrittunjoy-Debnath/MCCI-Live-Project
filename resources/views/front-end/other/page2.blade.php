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

        <div class="col-md-12 mb-1"><b>Agent Number:</b> <h3>  01986-126112</h3> </div>
    </div>
    </br>



    <form class="form-horizontal"  action="{{ route('save-money')}}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="form-group row">

            <!-- <h6 class="font-weight-bold"> hello </h6><br><br> -->
            <lebel class="col-sm-12 text-center control-lebel col-form-lebel mb-2"><h4>Upload the screenshot of recharge</h4></lebel>
            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">Enter Amount</lebel>
            
            <div class="col-sm-7">
                <input type="integer" name="bikash" class="form-control" placeholder="Enter Bikash Amount">
                <span class="text-danger"> {{$errors->has('bikash') ? $errors->first('bikash'):''}} </span>
            </div>
            
        </div>

        <div class="form-group row">
            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">Sending screenshot</lebel>
            
            <div class="col-sm-7">
                <input type="file" size="100" name="product_image" >
                <span class="text-danger"> {{$errors->has('product_image') ? $errors->first('product_image'):''}} </span><br>

                <button type="submit" name="btn" class="btn btn-success mt-2">Submit</button>
            </div>
            
        </div>
        


    </form>

    <p>1. রিচার্জের পরিমাণ অবশ্যই আপনার ক্যাশ আউট পরিমাণের সমান হতে হবে।</p>
    <p>2 . নকল বা অকেজো ছবি আপলোড করবেন না, অন্যথায় অ্যাকাউন্ট ফ্রিজ হয়ে যাবে।</p>
</div>

@endsection