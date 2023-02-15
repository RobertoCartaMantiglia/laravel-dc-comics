<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{route('products.update', $comic->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">
                            Titolo
                        </label>
                        <input type="text" name="title" value="{{$comic->title}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" name="description" rows="3">
                            {{$comic->description}}
                        </textarea>
                    </div> 
                    <div class="mb-3">
                        <label for="thumb" class="form-label">
                            Immagine
                        </label>
                        <input type="text" name="thumb" value="{{$comic->thumb}}"  class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">
                            Prezzo
                        </label>
                        <input type="number" name="price" value="{{$comic->price}}"  class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">
                            Serie
                        </label>
                        <input type="text" name="series" value="{{$comic->series}}"  class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">
                            Data di Vendita
                        </label>
                        <input type="date" name="sale_date" value="{{$comic->sale_date}}"  class="form-control">
                    </div> 
                    <div class="mb-3">
                        <label for="type" class="form-label">
                            Tipologia
                        </label>
                        <input type="text" name="type" value="{{$comic->type}}"  class="form-control">
                    </div> 
                    <button>Aggiungi</button>
                </form>
                            
            </div>
        </div>
    </div>
</body>
</html>