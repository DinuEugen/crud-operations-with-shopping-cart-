@extends('mainCustomer')

@section('content')


@if ($message=Session::get("success"))

<div class="alert alert-success">
    {{$message}}
</div>
@endif
<table class="table table-striped table-bordered  table-hover">
    <thead>
        <tr class="bg-primary">
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $customer)
        <tr class="bg-primary">
            <td> {{$customer->id}}</td>
            <td> {{$customer->firstname}}</td>
            <td> {{$customer->lastName }}</td>
            <td> {{$customer->address}}</td>
            <td> {{$customer->email}}</td>
            <td> {{$customer->phone}}</td>



            <td><a href="{{route('customer.edit',$customer->id)}}" class="btn btn-primary btn-sm mt-2">Edit</a></td>
            <td>
                <form method="post" action="{{route('customer.destroy',$customer->id)}}">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger btn-sm mt-2">Delete</button>
                </form>
            </td>
        </tr>




        @endforeach
    </tbody>
</table>

@endsection