<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use App\Models\Document;
use App\Models\Randonnee;
use App\Models\Notification;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        return $this->middleware('isActiveMember');
    }

    public function index()
    {
       
        // ON RECUPERE TOUT CE QUE L'ADMIN A BESOIN DE VOIR SUR SA PAGE
        $users = User::orderBy('nom', 'asc')->paginate(10, ['*'], 'users');
        $documents = Document::all();
        $randonnees = Randonnee::orderBy('date', 'desc')->paginate(10, ['*'], 'randonnees');
        $actualites = Actualite::all();
        // dd($actualites);
        $notifications = Notification::all();



        return view('admin.index', compact('users', 'documents', 'randonnees', 'actualites', 'notifications',));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
}
