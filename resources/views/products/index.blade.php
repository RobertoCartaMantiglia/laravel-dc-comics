<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
            <div class="row">
                <h1 class="text-center">Questa è La index dell'Admin</h1>
                @foreach ($comics as $comic)
                    <div class="col-3 text-center mb-4">
                        <div>
                            <img src="{{$comic->thumb}}" class="img-fluid" alt="#">
                        </div>
                        <h2>{{$comic->title}}</h2>  
                        <p>{{$comic->price}}€</p> 
                        <a href="{{route('products.show', $comic->id)}}" class="btn btn-primary">Dettagli</a>    
                        <form action="{{route('products.destroy', $comic->id)}}" class="mt-2">
                            <input type="submit" value="Cancella">
                        </form>                                            
                    </div>
                @endforeach  

                

                
            </div>

        </div>
    </main>

</body>

</html>
