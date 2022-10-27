@extends('pagelayout.master')

@section('content')

<h1 class="px-5 mx-1 mt-5">Store</h1>
<a href="/add-image" class="btn btn-primary px-2 mx-5">Add Store</a>

    @foreach ($imageData as $item)
    <div class="card  Logo-container mx-5  my-5 py-2 rounded">
        <img src="{{'ShopImage/' .  $item->storeImages}}"  style="width:500px; height:400px" class="rounded img-fluid">

    <div class="d-flex justify-content-evenly">
        <form action="{{$item->id}}" method="post">
            {{method_field('DELETE')}}
            {!! csrf_field() !!}
           <input type="submit" class="btn btn-danger mt-2 mx-2" value="Delete ">
            </form> 
            <input type="submit" class="btn btn-success mt-2 mx-2" value="Manage">
    </div>  
    </div>
    @endforeach

    
@endsection



