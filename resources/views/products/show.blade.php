<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center mb-5">
                    <img src="{{$comic->thumb}}" class="w-50" alt="#">
                    <h2>{{$comic->title}}</h2>
                    <p>{{$comic->description}}</p>
                    <a href="{{route('products.index')}}" class=" btn btn-primary">Torna alla Home</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>