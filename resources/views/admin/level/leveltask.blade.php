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
                                <h5 class="card-title">Level && Task</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead class="bg-success">
                                            <tr>
                                                <th class="font-weight-bold">Sl No.</th>
                                                <th class="font-weight-bold">Username</th>
                                                <th class="font-weight-bold">User email/phone</th>
                                                <th class="font-weight-bold">Level</th>
                                                <th class="font-weight-bold">Task </th>
                                                <th class="font-weight-bold">Action </th>
                                                <!-- <th class="font-weight-bold">Created At</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php($i=1)
                                            @foreach($users as $user)
                                            
                                            <tr>   
                                               
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <form action="{{ route('level-done',$user->id)}}" method="post" class="form-control">
                                                    @csrf 
                                                <td>
                                                    <input type="string" name="level" placeholder="Enter level">
                                                </td>
                                                <td>
                                                    <input type="string" name="task" placeholder="Enter task">
                                                </td>
                                                <td>
                                                    <button type="submit" name="btn" class="btn btn-success">Submit</button>
                                                </td>
                                                
                                                <!-- <td>01-03-2021</td> -->
                                            </tr>
</form>
                                            @endforeach
                                        </tbody>
                                        <tfoot class="bg-success">
                                            <tr>
                                                <th class="font-weight-bold">Sl No.</th>
                                                <th class="font-weight-bold">Username</th>
                                                <th class="font-weight-bold">User email/phone</th>
                                                <th class="font-weight-bold">Level</th>
                                                <th class="font-weight-bold">Task </th>
                                                <th class="font-weight-bold">Action </th>
                                                <!-- <th class="font-weight-bold">Created At</th> -->
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div>
                            </div>
                </div>
        </div>
    </div>
</div>
@endsection