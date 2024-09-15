@extends('mainCustomer')
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



<form action="{{route('customer.store')}}" method='post' enctype="multipart/form-data">
    @csrf
    @method('post')

    <label for="firstName">First Name:</label><br>
    <input type="text" id="fname" name="firstName"><br>

    <label for="lastName">Last Name:</label><br>
    <input type="text" id="lname" name="lastName"><br>

    <label for="address">Address:</label><br>
    <input type="text" id="address" name="address"><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>

    <label for="phone">Phone:</label><br>
    <input type="tel" id="phone" name="phone"><br>

    <input type="submit" value="Submit">
</form>
@endsection