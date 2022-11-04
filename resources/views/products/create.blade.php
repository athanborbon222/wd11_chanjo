@extends('pagelayout.master')
@section('content')

<div class="mt-2 p-2">
@if(session('status'))
<h5 class="alert alert-warning">{{session('status')}}</h5>
@endif
</div>

<h1>Add Products</h1>
<div class="d-flex flex-wrap">
<div class="card p-5  mt-5 mx-5" style="width: 600px; height: 400px;">
<form action="{{route('products.index')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label class="me-2">Product Image:</label>
    <input type="file" class="form-controll" name="productImage" id="productImage">
    <br><br>

    <label class="me-2">Product Name:</label>
    <input type="text" class="form-controll" name="productName"  style="width: 300px">
    <br><br>

    <label class="me-4">Description:</label>
    <input type="text" class="form-controll" name="productDescription" style="width: 300px">
    <br><br>
    <label class="me-2">Product Price:</label>
    <input type="text" class="form-controll" name="productPrice"  style="width: 300px">
    <br><br>
    <button type="submit" class="btn btn-primary">Add Product</button>
</form>
</div>
</div>

@endsection