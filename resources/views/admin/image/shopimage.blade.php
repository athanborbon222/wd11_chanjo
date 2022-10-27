@extends('pagelayout.master')
    @section('content')
    <div class="container p-5">
    <h1 class="mx-5">Add Shop Logo</h1>
        <div class="card p-5 mx-5">
            <form action="{{route('image.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" class="form-controll" name="storeImages" id="storeImages">
                <br><br>
                <input type="submit" class="btn btn-primary" id="Add">
            </form>
        </div>
    </div>
    @endsection