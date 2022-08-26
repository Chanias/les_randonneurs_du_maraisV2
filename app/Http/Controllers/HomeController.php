<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adresse;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user() && !session()->has('adresse')){
            session()->put('adresse', Adresse::where('user_id', Auth::user()->id)->first());
        }
        return view('home');
    }
}
