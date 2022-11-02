@extends('pagelayout.master')
@section('content')


<div class="d-flex flex-row my-5 px-5 flex-wrap">
<div class="col-sm-12">

    <div class="card">
     <div class="card-header"> <h3 class="fs-4 mb-3">Users List</h3></div>   
   
    <div class="card-body">

      <table class="table bg-white rounded shadow-sm table-hover">
        <thead>
          <tr>
      
            <th scope="col">User ID</th>
            <th scope="col">Email</th>
            <th scope="col">Name</th>
            <th scope="col">Role</th>
           
          </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @if($user->role_as == '0')
                                 <label for="badge btn-warning">user</label>
                            @elseif($user->role_as == '1')
                                <label for="badge btn-info">Admin</label>
                            @else
                                <label for="badge btn-pimary">None</label>
                            @endif
                        </td>
                    <td>
                        <a href="{{url('admin/users/' .$user->id.'/edit')}}" class="btn  btn-sm btn-warning bg-light text-warning">Edit</a>
                        <a href="{{url('admin/users/' .$user->id.'/delete')}}" class="btn btn-sm btn-danger bg-light text-danger" onclick="return confirm('Do you want to delete this data?')">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No Users Available</td>
                </tr>
            @endforelse
        </tbody>
      </table>  
           
    </div>

    </div>
    </div>


</div>
</div>

@endsection
