<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        return view('comics.index',  compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Stessi dati del seeder solo la variabile é $data

        $data = $request->all();
        $new_comic = new Comic();
        // $new_comic->title = $data['title'];
        // $new_comic->slug = Str::slug($data['title'], '-');
        // $new_comic->thumb = $data['thumb'];
        // $new_comic->description = $data['description'];
        // $new_comic->price = $data['price'];
        // $new_comic->series = $data['series'];
        // $new_comic->sale_date = $data['sale_date'];
        // $new_comic->type = $data['type'];
        // $new_comic->save();


        // Invece di passare ogni dato a mano usiamo questa funzione che lo fa in automatico con tutti i campi del form 
        //In providers dentro Comic.php dobbiamo creare una variabile con tutti i campi del form 
        // In questo caso lo slug lo facciamo perché non é presente nel form
        $data['slug'] = Str::slug($data['title'], '-');
        $new_comic->fill($data);
        $new_comic->save();

        // al salvataggio dei dati nel db facciamo un redirect su comic.show passando il nuovo dato 
        return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comics)
    {
        if($comics) {
            return view('comics.show', compact('comics'));
        }
        abort(404, 'Prodotto inesistente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
