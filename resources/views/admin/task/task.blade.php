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
                                <h5 class="card-title">Add Task Here</h5>


                                <form class="form-horizontal" action="{{ route('add-task') }}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <h4 class="card-title">Write task and link</h4>
                                        <div class="form-group row">
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">Media Name</lebel>

                                            <div class="col-sm-7">
                                                <input type="string" name="media_name" class="form-control" placeholder="Facebook / youtube /twitter /other">
                                                <span class="text-danger"> {{$errors->has('media_name') ? $errors->first('media_name'):''}} </span>
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">Submit Link</lebel>
                                            <div class="col-sm-7">
                                                <input type="integer" name="media_link" class="form-control" placeholder="www.facebook.com">
                                                <span class="text-danger"> {{$errors->has('media_link') ? $errors->first('media_link'):''}} </span>
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
