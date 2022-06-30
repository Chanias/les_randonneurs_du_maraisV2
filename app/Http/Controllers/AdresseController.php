<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdresseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            'adresse'=>'required',
            'code_postal'=>'required',
            'ville'=>'required',
        ]);
        // sauvegarde dans la base de données les nouvelles campagnes et je stock la variable
        $campagne = Campagne::create($request->all()); //$campagne est une instance de la table Campagne

        //insertion des articles associés via un eager loading dans campagne_article
        $articles = Article::all();
        for ($i = 1; $i < count($articles); $i++) {
            if (isset($request['article' . $i])) {
                $campagne->articles()->attach([$i]); // attach = insert into ...
            }
        }
        return redirect()->route('admin.index')->with('message', 'Campagne a été créée avec succès');
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
