<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Auth;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actualites=Actualite::all();
      return view('actualites.index', compact('actualites'));
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
    public function store(Request $request, Actualite $actualite)
    {
        $this->authorize('create', $actualite);
        $request->validate([
            'titre'=> 'required',
            'content'=> 'required',
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // on donne un nom à l'image : timestamp en temps unix + extension
        $imageName = time() . '.' . $request->image->extension();

        //on déplace l'image dans public/images
        $request->image->move(public_path('images/actualites'), $imageName);

        Actualite::create($request->all());
        return redirect()->route('admin.index')->with('message', 'L\'actualité a bien été crée...');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function show(Actualite $actualite)
    {
        return view('actualites.show', compact('actualite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function edit(Actualite $actualite)
    {
        $this->authorize('update', $actualite);

        return view('actualites.edit', compact('actualite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actualite $actualite)
    {
        $this->authorize('update', $actualite);
        $request->validate([
            'titre'=> 'required',
            'content'=> 'required',
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
       
        // on donne un nom à l'image : timestamp en temps unix + extension
        $imageName = time() . '.' . $request->image->extension();

        //on déplace l'image dans public/images
        $request->image->move(public_path('images/actualites'), $imageName);

        $actualite->update($request->all());
        return redirect()->route('admin.index')->with('message', 'L\'actualité a bien été modifié...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actualite $actualite)
    {
        $this->authorize('delete', $actualite);
        $actualite->delete();
        return redirect()->route('admin.index')->with('message', 'L\'actualité a bien été supprimé...');
    }
}
