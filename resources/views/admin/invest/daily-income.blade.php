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
                                <h5 class="card-title">Invest and Income</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead class="bg-success">
                                            <tr>
                                                <th class="font-weight-bold">Sl No.</th>
                                                <th class="font-weight-bold">Invest Amount</th>
                                                <th class="font-weight-bold">Daily Income</th>
                                                <th class="font-weight-bold">Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($i=1)
                                            @foreach($invests as $invest)
                                            <tr>
                                                
                                                <td>{{$i++}}</td>
                                                <td>{{$invest->investment}}</td>
                                                <td>{{$invest->daily_income}}</td>
                                                <td>

                                                <form method="POST" action="{{ route('invest.destroy',$invest->id) }}">
                                                    <!-- <a href="#" class="btn btn-success">
                                                        <span><i class="fa fa-edit"></i></span>
                                                    </a> -->
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <!-- <a href="" class="btn btn-danger">
                                                        <span><i class="fa fa-trash"></i></span>
                                                    </a> -->
                                                    <input type="submit" class="btn btn-danger delete-user" value="Delete">
                                                </form>
                                                </td>
                                                
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot class="bg-success">
                                            <tr>
                                                <th class="font-weight-bold">SL No</th>
                                                <th class="font-weight-bold">Invest Amount</th>
                                                <th class="font-weight-bold">Daily Income</th>
                                                <th class="font-weight-bold">Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>

                            </div>
                        </div>
</div>
</div>
</div>

<script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
    
@endsection