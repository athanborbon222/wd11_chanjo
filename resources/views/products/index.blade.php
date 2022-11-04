@extends('pagelayout.master')

@section('content')
<h1 class="text-warning ms-5 mt-5">Products</h1>

<div class="d-flex  justify-content-around flex-wrap">

@foreach ($products as $proditem)
    

    <div class="card ms-5 my-2 Product-card">
    <div class="card-header"><h1>{{$proditem->productName}}</h1></div>
    <div class="card-body">
        <img src="{{'ProductImage/' .  $proditem->productImage}}"  style="width:400px; height:400px" class="rounded img-fluid">
    </div>
    <div class="card-footer">
    <p>Price: {{$proditem->productPrice}}</p>
    <a href="/products/{{$proditem->id}}" class="btn btn-warning text-light"> View Product </a>
    </div>
    </div>

@endforeach
</div>


@endsection