@extends('pagelayout.master')
@section('content')
<div class="d-flex">
    
    <div class="card ms-5 mt-5 Product-card">
        <form action="/products/{{$product->id}}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
        <div class="card-header"><input type="text" class="form-control" name="productName" value="{{$product->productName}}"></div>
        <div class="card-body">
            <img src="/ProductImage/{{$product->productImage}}"  style="width:500px; height:400px" class="rounded img-fluid">
            <hr>
         <label>Product Description:</label>   
        <input type="text" class="form-control" name="productDescription" value="{{$product->productDescription}}">
        <label>Price:</label>
        <input type="text" class="form-control" name="productPrice" value="{{$product->productPrice}}"> 
        <p>Date Added:{{$product->created_at}} </p>
        </div>
        <div class="card-footer d-flex justify-content-between">
        <a href="" class="btn btn-warning bg-light text-warning"> Edit </a>
        <a href="" class="btn btn-danger bg-light text-danger"> Delete </a>
        </div>
    </form>
    </div>
    </div>
@endsection