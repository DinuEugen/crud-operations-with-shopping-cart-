@extends('mainProduct')
@section('content')
<h1>Products page</h1>
@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif


<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-primary">
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>


            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->qty}}</td>

            <td><img src="{{asset('images/'.$product->image)}} " style="width:100px" alt="{{$product->name}}" /></td>
            <td><a href="{{route('product.edit',['product'=>$product])}}">Edit</a></td>
            <td>
                <form method="post" action="{{route('product.destroy',['product' => $product])}}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete" class="btn btn-danger">

                </form>
            </td>


        </tr>
        @endforeach


        @endsection