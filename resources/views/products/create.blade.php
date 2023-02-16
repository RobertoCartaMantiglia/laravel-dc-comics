<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{route('products.store')}}" method="POST">
                    @csrf
                    @if($errors->any())
                        <div class="alert alert-danger mt-3">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="title" class="form-label">
                            Titolo
                        </label>
                        <input type="text" name="title" value="{{old('title', "")}}" class="form-control">

                        {{-- @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror --}}      
                        {{-- MESSAGGIO PER SINGOLO INPUT (ALTERNATIVA) --}}

                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" name="description" value="{{old('description', "")}}" rows="3"></textarea>
                    </div> 
                    <div class="mb-3">
                        <label for="thumb" class="form-label">
                            Immagine
                        </label>
                        <input type="text" name="thumb" value="{{old('thumb', "")}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">
                            Prezzo
                        </label>
                        <input type="number" name="price" value="{{old('price', "")}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">
                            Serie
                        </label>
                        <input type="text" name="series" value="{{old('series', "")}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">
                            Data di Vendita
                        </label>
                        <input type="date" name="sale_date" value="{{old('sale_date', "")}}" class="form-control">
                    </div> 
                    <div class="mb-3">
                        <label for="type" class="form-label">
                            Tipologia
                        </label>
                        <input type="text" name="type" value="{{old('type', "")}}" class="form-control">
                    </div> 
                    <button>Aggiungi</button>
                </form>
                            
            </div>
        </div>
    </div>
</body>
</html>