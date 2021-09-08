@extends('layouts.app')

@section('content')
<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-success">Click Here</button>



<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-scrollable modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Header</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi hic in iure magni maiores non nostrum obcaecati placeat quasi, qui, repellat sunt vitae, voluptatem. At beatae dolore neque quis veniam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi hic in iure magni maiores non nostrum obcaecati placeat quasi, qui, repellat sunt vitae, voluptatem. At beatae dolore neque quis veniam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi hic in iure magni maiores non nostrum obcaecati placeat quasi, qui, repellat sunt vitae, voluptatem. At beatae dolore neque quis veniam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi hic in iure magni maiores non nostrum obcaecati placeat quasi, qui, repellat sunt vitae, voluptatem. At beatae dolore neque quis veniam!</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection