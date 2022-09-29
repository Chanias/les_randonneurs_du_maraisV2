<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Document $document)
    {
        $this->authorize('store', $document);
        $request->validate([
            'nom_document' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,tiff,svg|max:2048',

        ]);
        // on donne un nom à l'image : timestamp en temps unix + extension
        $imageName = time() . '.' . $request->image->extension();

        //on déplace l'image dans public/images et on instancie un nouveau document
        $request->image->move(public_path('images/documents'), $imageName);
        $document = new Document;

        $this->authorize('create', $document);

        $document->image = $imageName;
        $document->save();

        return redirect()->route('admin.index')->with('message', 'Le document a bien été ajouté...');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        $this->authorize('delete', $document);
        $document->delete();
        return redirect()->route('admin.index')->with('message', 'Le document a bien été supprimé...');
    }
}
