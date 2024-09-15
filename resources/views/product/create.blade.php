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
<div class="container">
    <div class="col-10">
        <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
            @csrf

            @method('post')
            <div class="row">
                <div class="col"><label for="name">Name</label></div>
                <div class="col"> <input type="text" name="name" id="name"></div>
            </div>

            <div class="row">
                <div class="col"><label for="price">Price</label></div>
                <div class="col"><input type="text" name="price" id="price"></div>
            </div>

            <div class="row">
                <div class="col"><label for="description">Description</label></div>
                <div class="col"><textarea name="description" id="description"></textarea></div>
            </div>

            <div class="row">
                <div class="col"> <label for="qty">Quantity</label></div>
                <div class="col"><input type="text" name="qty" id="qty"></div>
            </div>

            <label for="image">Image</label>
            <input type="file" name="image" id="image">

            <input type="submit" value="Create">
        </form>
    </div>
</div>
@endsection