<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next) // je n'ai pas compris pour Closure et $next
    {
        if (Auth::user() && Auth::user()->role_id == 6) {
            return $next($request);
        }

        return redirect()->route('login')->with('message', 'Vous n avez pas la permission d accéder à cette page !! Veuillez contacter la personne qui gére le site.');
        //abort erreur 403
    }
}