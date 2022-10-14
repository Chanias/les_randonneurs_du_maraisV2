<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use App\Models\Document;
use App\Models\Randonnee;
use App\Models\Notification;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function __construct()
    {
        return $this->middleware('admin');
    }

    public function index()
    {
       
        // ON RECUPERE TOUT CE QUE L'ADMIN A BESOIN DE VOIR SUR SA PAGE
        $users = User::orderBy('nom', 'asc')->paginate(10);
        $randonnees = Randonnee::orderBy('date','desc')->paginate(5);
        $documents=Document::all();
        $notifications=Notification::all();
        $actualites=Actualite::all();

       

        return view('admin.index', compact('users', 'randonnees','documents','notifications', 'actualites'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
}
