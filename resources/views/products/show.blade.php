@extends('pagelayout.master')
@section('content')
<div class="d-flex">
<div class="card ms-5 mt-5 Product-card">
    <div class="card-header"><h1>{{$product->productName}}</h1></div>
    <div class="card-body">
        <img src="/ProductImage/{{$product->productImage}}"  style="width:500px; height:400px" class="rounded img-fluid">
        <hr>
    <p>Product Desc: {{$product->productDescription}}</p>
    <p>Price: {{$product->productPrice}}</p>
    <p>Date Added:{{$product->created_at}} </p>
    </div>
    <div class="card-footer d-flex justify-content-between">
    <a href="/products/{{$product->id}}/edit" class="btn btn-warning bg-light text-warning"> Edit </a>

    <form action="/products/{{$product->id}}" method="post">
        {{method_field('DELETE')}}
        {!! csrf_field() !!}
       <input type="submit" class="btn btn-danger w-100" value="Delete">
        </form>
    </div>
</div>
</div>
@endsection


