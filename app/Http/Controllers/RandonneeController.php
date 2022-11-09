<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Randonnee;
use App\Models\User;

class RandonneeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $randonnees = Randonnee::all();
        return view('randonnees.index', compact('randonnees'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Randonnee $randonnee)
    {
        $this->authorize('create', $randonnee);

        $request->validate([
            'date' => 'required',
            'heure_rdv' => 'required',
            'heure_depart' => 'required',
            'point_de_depart' => 'required',
            'nom' => 'required',
            'commentaires' => 'required',
            'kilometres' => 'required',
            'lien_photos' => 'required',
           
        ]);
      
        // on donne un nom à l'image : timestamp en temps unix + extension
        $imageName = time() . '.' . $request->image->extension();

        //on déplace l'image dans public/images
        $request->image->move(public_path('images/cartes'), $imageName);

        // sauvegarde dans la base de données la nouvelle randonnée 
        $randonnee = Randonnee::create($request->all());
     
   


     

        return redirect()->route('admin.index')->with('message', 'La nouvelle randonnée a été créée avec succès');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Randonnee $randonnee)
    {
        $this->authorize('update', $randonnee);

        return view('randonnees.edit', compact('randonnee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Randonnee $randonnee)
    {
        $this->authorize('update', $randonnee);

        $request->validate([
            'date' => 'required',
            'heure_rdv' => 'required',
            'heure_depart' => 'required',
            'point_de_depart' => 'required',
            'nom' => 'required',
            'commentaires' => 'required',
            'kilometres' => 'required',
            'lien_photos' => 'nullable',
        ]);

        $randonnee->update($request->all());
        return redirect()->route('admin.index')->with('message', 'La randonnée a bien été modifié...');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Randonnee $randonnee)
    {
        $this->authorize('delete', $randonnee);

        $randonnee->delete();
        return redirect()->route('admin.index')->with('message', 'La randonnée a bien été supprimé...');
    }
}
