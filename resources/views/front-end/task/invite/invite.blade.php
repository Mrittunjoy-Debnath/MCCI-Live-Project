@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <p class="font-weight-bold">Please,copy this link.</p>
                <p class="font-weight-bold">&&</p>
                <p class="font-weight-bold">Invite your friends</p>
                {{-- <p><small><a href="http://www.mcc-i.com/">http://www.mcc-i.com/</a><small></p> --}}

                     <!-- The text field -->
                <input type="text" value="http://www.mcc-i.com/" id="myInput">

<!-- The button used to copy the text -->
                <button onclick="myFunction()">Copy text</button>


                <p ><small> share in</small></p>
                <div class="col-md-12">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-7x fa-facebook-square mr-4" style="color:#005cbf"></i></a>
                    <a href="https://twitter.com/" target="_blank"><i class="fab fa-7x fa-twitter mr-4" style="color:#7abaff"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-7x fa-instagram mr-4" style="color:#16181b"></i></a>
                    <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-7x fa-youtube mr-4" style="color:#b21f2d"></i></a>
                    <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-7x fa-linkedin" style="color:#0056b3"></i></a>

                </div>
            </div>
        </div>


    </div>


</div>
@endsection
