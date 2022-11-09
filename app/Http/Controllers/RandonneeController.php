<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Randonnee;
use App\Models\User;
use App\Models\Carte;

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
            'carte' => 'required|image|mimes:jpeg,png,jpg,gif,tiff,svg|max:2048',

        ]);

        // on donne un nom à l'image : nom rando + extension
        $nomCarte = $request->nom . '.' . $request->carte->extension();

        //on déplace l'image dans public/images
        $request->carte->move(public_path('images/cartes'), $nomCarte);

        // sauvegarde dans la base de données la nouvelle randonnée 
        $randonnee = Randonnee::create($request->all());

        // sauvegarde de la carte dans la base de données
        Carte::create([
            'randonnee_id' => $randonnee->id,
            'nom_fichier' => $nomCarte
        ]);

        //insertion des animateurs associés via un eager loading dans randonnee
        $users = User::all();
        for ($i = 1; $i < count($users); $i++) {
            if (isset($request['user' . $i])) {
                $randonnee->animateurs()->attach([$i]); // attach = insert into ...
            }
        }

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

        $animateurs = User::where('role_id', 3)->get();

        return view('randonnees.edit', compact('randonnee', 'animateurs'));
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


        // on enlève les animateurs de la table intermédiaire
        foreach ($randonnee->animateurs as $animateur) {
            $randonnee->animateurs()->detach($animateur);
        }

        // On récupère la liste des animateurs
        $animateurs = User::where('role_id', 3)->get();


        //On réinplante les nouveaux animateurs dans la base de données
        foreach($animateurs as $animateur){
       
            if (isset($request['animateur' . $animateur->id])) {
                $randonnee->animateurs()->attach([$animateur->id]); // attach = insert into ...
            }
        }
        return redirect()->route('admin.index')->with('message', 'La randonnée a bien été modifiée...');
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
