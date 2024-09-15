<!DOCTYPE html>
<html>

<head>
    <title></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="d-grid gap-2">

        <div class="container">
            <div class="col-10">
                <a href="{{route('home')}}">
                    <button type="button" class="btn btn-outline-primary">Back to dashboard</button>

                </a>
            </div>
        </div>


        <div class="container">
            <div class="col-10">
                <a href="{{route('product.create')}}">
                    <button type="button" class="btn btn-outline-primary">Create a product</button>
                </a>
            </div>
        </div>


        <div class="container">
            <div class="col-10">
                <a href="{{route('product.index')}}">
                    <button type="button" class="btn btn-outline-primary">View all products</button>
            </div>
        </div>
    </div>

    @yield('content')

</body>

</html>