@extends('pagelayout.master')
@section('content')

<div class="container-fluid mt-2 px-5">
    @if(session('message'))
    <h5 class="alert alert-warning">{{session('message')}}</h5>
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
     <div class="card-header"> <h3 class="fs-4 mb-3">Edit User</h3></div>   
   
    <div class="card-body">
        <form action="{{ url('admin/users/'.$user->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row flex-wrap">

                <div class="col-md-6 mb-3">
                    <label>Name:</label>
                    <input type="text" name="name" id="form-control" class="px-5" value="{{$user->name}}">
                </div>

                <div class="col-md-6 mb-3">
                    <label>email:</label>
                    <input type="email" name="email" id="form-control" class="px-5" value="{{$user->email}}" readonly>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Password:</label>
                    <input type="password" name="password" id="form-control" class="px-5">
                </div>


                <div class="col-md-6 mb-3">
                    <label>Select Role:</label>
                   <select name="role_as" class="form-control">
                    <option value="">Select</option>
                    <option value="0" {{$user->role_as == '0' ? 'selected': ''}}>User</option>
                    <option value="1" {{$user->role_as == '1' ? 'selected': ''}}>Admin</option>
                   </select>
                </div>

                <div class="col-md-12">
                   <button type="submit" class="btn btn-warning px-5">Update</button>
                </div>
            </div>
        </form>
    </div>

</div>
</div>


</div>
</div>

@endsection