<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('products.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate(
            [
                'title' => 'required|min:2|max:150|unique:comics,title',
                'description' => 'required|string|min:6',
                'thumb' => 'required|url',
                'price' => 'required|numeric',
                'series' => 'required|string|min:2|max:200',
                'sale_date' => 'required|date',
                'type' => 'required|string|min:2|max:100',
            ],
            [
                'title.required' => 'Il titolo è obblogatorio',
                'title.min' => 'Il titolo deve contere almeno 2 caratteri',
                'description.required' => 'La descrizione è necessaria',
                'description.min' => 'La descrizione deve contenere minimo 6 caratteri',
                'thumb.required' => 'L\'url della immagine è fondamentale',
                'price.numeric' => 'Il prezzo va scritto in numeri',
                'price.required' => 'Il prezzo va scritto',
                'series.required' => 'La serie del fumetto va inserita',
                'sale_date.required' => 'La data di vendita deve essere specificata',
                'type.required' => 'La tipologia è obbligatoria'
            ]
        );
        $newComic = new Comic();
        // $newComic->title = $data['title'];
        // $newComic->description = $data['description'];
        // $newComic->thumb = $data['thumb'];
        // $newComic->price = $data['price'];
        // $newComic->series = $data['series'];
        // $newComic->sale_date = $data['sale_date'];
        // $newComic->type = $data['type'];
        $newComic->fill($data);
        $newComic->save();
        return redirect()->route('products.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('products.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('products.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $request->validate(
            [
                'title' => 'required|min:2|max:150',
                'description' => 'required|string|min:6',
                'thumb' => 'required|url',
                'price' => 'required|numeric',
                'series' => 'required|string|min:2|max:200',
                'sale_date' => 'required|date',
                'type' => 'required|string|min:2|max:100',
            ],
            [
                'title.required' => 'Il titolo è obblogatorio',
                'title.min' => 'Il titolo deve contere almeno 2 caratteri',
                'description.required' => 'La descrizione è necessaria',
                'description.min' => 'La descrizione deve contenere minimo 6 caratteri',
                'thumb.required' => 'L\'url della immagine è fondamentale',
                'price.numeric' => 'Il prezzo va scritto in numeri',
                'price.required' => 'Il prezzo va scritto',
                'series.required' => 'La serie del fumetto va inserita',
                'sale_date.required' => 'La data di vendita deve essere specificata',
                'type.required' => 'La tipologia è obbligatoria'
            ]
        );

        //scriviamo $comic e non $newComic perché vogliamo modificare il dato che già abbiamo e non che vogliamo aggiungere
        $comic = Comic::findOrFail($id);
        // $comic->title = $data['title'];
        // $comic->description = $data['description'];
        // $comic->thumb = $data['thumb'];
        // $comic->price = $data['price'];
        // $comic->series = $data['series'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->type = $data['type'];
        // $comic->save();

        //FILLABLES
        $comic->update($data);
        return redirect()->route('products.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('products.index');
    }
}
