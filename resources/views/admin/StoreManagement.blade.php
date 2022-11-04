@extends('pagelayout.master')

@section('content')

<h1 class="px-5 mx-1 mt-5">Store</h1>
<a href="/add-image" class="btn btn-primary px-2 mx-5">Add Store</a>
<div class="d-flex flex-row">
    @foreach ($imageData as $item)
    <div class="card  Logo-container mx-5  my-5 py-2 rounded">
        <img src="{{'ShopImage/' .  $item->storeImages}}"  style="width:600px; height:400px" class="rounded img-fluid">

    
            <a type="submit" class="btn btn-success text-dark bg-light mt-2 mx-2" href="/products/create">Manage</a>
   
    </div>

    @endforeach
</div>
    
@endsection



