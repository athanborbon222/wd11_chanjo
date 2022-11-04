@extends('pagelayout.app')
@section('pagecontent')

<div class="py-5 m-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3>My Account</h3>
                <hr>
            </div>

            <div class="col-md-10">
                @if(session('message'))
                    <p class="alert alert-warnig text-success">{{session('message')}}</p>
                @endif

                @if($errors->any())
                <ul class="alert alert-warning text-danger p-5">
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
                @endif    

                <div card>
                    <div class="card-header"><h2>Account Information</h2></div>
                    <div class="card-body">
                        <form action="{{url('profile')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Name</label>
                                        <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" name="email" readonly value="{{ Auth::user()->email }}" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Phone Number</label>
                                        <input type="text" name="phone" value="{{ Auth::user()->userDetail->phone ?? ''}}" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Address</label>
                                        <textarea  name="address"  class="form-control" rows="3">{{ Auth::user()->userDetail->address ?? ''}}</textarea>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                        <button type="text"  value="" class="form-control btn btn-dark bg-warning"> Save </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection