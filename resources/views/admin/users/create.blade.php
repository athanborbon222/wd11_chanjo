@extends('pagelayout.master')
@section('content')

<div class="container-fluid mt-2 px-5">
    @if(session('message'))
    <h5 class="alert alert-warning text-success">{{session('message')}}</h5>
    @endif

    @if($errors->any())
    <ul class="alert alert-warning text-danger p-5">
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif        
</div>

<div class="d-flex flex-row my-5 px-5 flex-wrap">
<a href="{{ url('admin/users') }}" class="btn btn-success bg-white text-success my-1 float-end">Back</a>
<div class="col-sm-12">
    <div class="card">
     <div class="card-header"> <h3 class="fs-4 mb-3">Create User</h3></div>   
   
    <div class="card-body">
        <form action="{{ url('admin/users')}}" method="POST">
            @csrf
            <div class="row flex-wrap">

                <div class="col-md-6 mb-3">
                    <label>Name:</label>
                    <input type="text" name="name" id="form-control" class="px-5">
                </div>

                <div class="col-md-6 mb-3">
                    <label>email:</label>
                    <input type="email" name="email" id="form-control" class="px-5">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Password:</label>
                    <input type="password" name="password" id="form-control" class="px-5">
                </div>


                <div class="col-md-6 mb-3">
                    <label>Select Role:</label>
                   <select name="role_as" class="form-control">
                    <option value="">Select</option>
                    <option value="0">User</option>
                    <option value="1">Admin</option>
                   </select>
                </div>

                <div class="col-md-12">
                   <button type="submit" class="btn btn-warning px-5">Save</button>
                </div>
            </div>
        </form>
    </div>

</div>
</div>


</div>
</div>

@endsection