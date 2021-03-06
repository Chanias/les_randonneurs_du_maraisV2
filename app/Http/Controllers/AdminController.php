<?php

namespace App\Http\Controllers;

use App\Models\Randonnee;
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
        $users = User::all();
        $randonnees = Randonnee::all();
        return view('admin.index', compact('users', 'randonnees'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
}
