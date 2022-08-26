<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Illuminate\Support\Facades\Hash;
use Str;

use Illuminate\Validation\Rules\Password;
use App\Models\Message;
use App\Models\Randonnee;


class RandonneeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.randonnees', compact('randonnee'));
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
    public function store(Request $request, Randonnee $randonnee)
    {
        $request->validate([
            'date_rando'=>'required',
            'heure_depart'=>'required',
            'depart_rando'=>'required',
            'circuit'=>'required',
            'kilometres'=>'required',
            'animateurs'=>'required'
        ]);
        // sauvegarde dans la base de données la nouvelle randonnée 
        $randonnee ->create($request->all()); 

        return redirect()->route('admin.index')->with('message', 'La nouvelle randonnée a été créée avec succès');
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
    public function edit(Randonnee $randonnee)
    {
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
        $request->validate([
            'date_rando'=>'required',
            'heure_depart'=>'required',
            'depart_rando'=>'required',
            'circuit'=>'required',
            'kilometres'=>'required',
            'animateurs'=>'required'
           
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
        $randonnee->delete();
        return redirect()->route('admin.index')->with('message', 'La randonnée a bien été supprimé...');
    }
}
