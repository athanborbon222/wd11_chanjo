@extends('pagelayout.app')

@section('pagecontent')
<h1 class="text-warning ms-5 mt-5">Products</h1>

<div class="d-flex  justify-content-around flex-wrap my-5">

    @foreach ($products as $proditem)
    

    <div class="card ms-5 my-3 Product-card">
    <div class="card-header"><h1>{{$proditem->productName}}</h1></div>
    <div class="card-body">
        <img src="/ProductImage/{{$proditem->productImage}}"  style="width:400px; height:400px" class="rounded img-fluid">
    </div>
    <div class="card-footer">
    <div class="my-1">
    <p class="my-1 me-1">Price: {{$proditem->productPrice}}</p>
    </div>
    <div class="d-flex flex-row justify-content-between">
    <button class="btn btn-warning bg-white text-warning">Buy</button>
    <button class="btn btn-danger bg-white text-danger">Add to Cart</button>
    </div>
    </div>
    </div>

@endforeach
</div>


@endsection