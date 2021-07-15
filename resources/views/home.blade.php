    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Trips</title>
    </head>
    <body>
        <h1>Trips</h1>
        @foreach ($trips as $trip)
            <div class="card">
                <p>{{ $trip->country }}</p>
                <p>{{ $trip->region }}</p>
                <p>{{ $trip->city }}</p>
                <p>{{ $trip->price }}</p>
                <hr>
            </div>
        @endforeach
        <p></p>
    </body>
</html>