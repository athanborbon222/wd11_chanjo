@extends('pagelayout.master')
@section('content')
<div class="container-fluid mt-2 p-2">
    @if(session('status'))
    <h5 class="alert alert-warning">{{session('status')}}</h5>
    @endif
    </div>
<div class="d-flex">
    
    <div class="card ms-5 mt-5 Product-card">
        <form action="/products/{{$product->id}}" method="post">
            {!! csrf_field() !!}
            @method("PUT")
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
        <button class="btn btn-warning bg-light text-warning" type="submit"> Save </a>
        </div>
    </form>
    </div>
    </div>
@endsection