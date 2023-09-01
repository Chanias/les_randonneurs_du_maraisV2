<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Randonnee;

class RandonneeController extends Controller
{
    public function index()
    {
         $randonnees = Randonnee::where('categorie', 'randonnees')->get();
       
         return view('randonnees.index', compact('randonnees'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view(Request $request, Randonnee $randonnee)
    {
       $this->authorize('create', $randonnee);
      
        $request->validate([
            'nom' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,tiff,svg|max:2048',
            'categorie' => 'required',

        ]);
        // on donne un nom à l'image : timestamp en temps unix + extension
        $imageName = time() . '.' . $request->image->extension();

        //on déplace l'image dans public/images et on instancie un nouveau document
        $request->image->move(public_path('images/documents'), $imageName);
        $randonnee = new Randonnee;

        $randonnee->image = $imageName;
        $randonnee->nom = $request->nom;
        $randonnee->categorie = $request->categorie;
        $randonnee->save();

        return redirect()->route('admin.index')->with('message', 'Le document a bien été ajouté...');
    }

    public function store(Request $request, Randonnee $randonnee)
    {
       $this->authorize('create', $randonnee);
      
        $request->validate([
            'nom' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,tiff,svg|max:2048',
            'categorie' => 'required',

        ]);
        // on donne un nom à l'image : timestamp en temps unix + extension
        $imageName = time() . '.' . $request->image->extension();

        //on déplace l'image dans public/images et on instancie un nouveau document
        $request->image->move(public_path('images/documents'), $imageName);
        $randonnee = new Randonnee;

        $randonnee->image = $imageName;
        $randonnee->nom = $request->nom;
        $randonnee->categorie = $request->categorie;
        $randonnee->save();

        return redirect()->route('admin.index')->with('message', 'Le document a bien été ajouté...');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Randonnee $randonnee)
    {
       // $this->authorize('delete', $document);
        $randonnee->delete();
        return redirect()->route('admin.index')->with('message', 'Le document a bien été supprimé...');
    }
}
