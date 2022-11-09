<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carte;

class CarteControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Carte $carte)
    {
        $this->authorize('update', $carte);

        return view('cartes.edit', compact('carte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carte $carte)
    {
        $this->authorize('update', $carte);

        $request->validate([
            'nom_fichier' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'rando_id' => 'required',

        ]);
        // on donne un nom à l'image : timestamp en temps unix + extension
        $imageName = time() . '.' . $request->image->extension();

        //on déplace l'image dans public/images
        $request->image->move(public_path('images/cartes'), $imageName);


        $carte->update($request->all());
        return redirect()->route('admin.index')->with('message', 'La carte a bien été modifié...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carte $carte)
    {
        $this->authorize('delete', $carte);

        $carte->delete();
        return redirect()->route('admin.index')->with('message', 'La carte a bien été supprimé...');
    }
}
