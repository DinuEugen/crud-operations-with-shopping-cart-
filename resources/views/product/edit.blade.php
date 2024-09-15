@extends('mainProduct')
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="post" action="{{route('product.update',['product'=>$product])}}" enctype="multipart/form-data">
    @csrf

    @method('put')
    <input type="hidden" name="hidden_id" value="{{$product->id}}">
    <div class="container">

        <div class="row">
            <div class="col"><label for="name">Name</label></div>
            <div class="col"> <input type="text" name="name" id="name" value="{{$product->name}}"></div>
        </div>

        <div class="row">
            <div class="col"><label for="price">Price</label></div>
            <div class="col"><input type="text" name="price" id="price" value="{{$product->price}}"></div>
        </div>

        <div class="row">
            <div class="col"><label for="description">Description</label></div>
            <div class="col"><textarea name="description" id="description" value="{{$product->description}}"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col"> <label for="qty">Quantity</label></div>
            <div class="col"><input type="text" name="qty" id="qty" value="{{$product->qty}}"></div>
        </div>



        <label for="image">Image</label>
        <input type="file" name="image" id="image">
    </div>
    <input type="submit" value="Update">
</form>
@endsection