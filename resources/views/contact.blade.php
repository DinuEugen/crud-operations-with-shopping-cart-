<!DOCTYPE html>
<html>

<head>
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
    </div>
    <h1>Contact Us</h1>

    <form method="POST" action="{{ route('contact.submit') }}">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="phone">Phone:</label><br>
        <input type="tel" id="phone" name="phone" required><br>


        <label for="message">Message:</label><br>
        <textarea id="message" name="message" required></textarea><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>