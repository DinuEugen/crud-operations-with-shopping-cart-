<!DOCTYPE html>
<html>

<head>
    <title></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-10">
            <a href="{{route('product.show')}}">

                <h1>Return to products</h1>
            </a>
        </div>
    </div>



    @yield('content')

</body>

</html>