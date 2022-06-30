<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Illuminate\Support\Facades\Hash;
use Str;

use Illuminate\Validation\Rules\Password;
use App\Models\Message;
use App\Models\User;

class UserController extends Controller
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
    public function compte()
    {
        $user = Auth::user();
        return view('user.compte', compact('user'));
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
        //
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


    public function update(Request $request)
    {
        $request->validate([
            'email' => 'nullable|min:10|max:50',
            'num_telephone_fixe' => 'nullable|max:14',
            'num_telephone_portable' => 'nullable|max:14'
        ]);

        $user =  Auth::user();

        $user->update([
            'email' => $request->input('email'),
            'num_telephone_fixe' => $request->input('num_telephone_fixe'),
            'num_telephone_portable' => $request->input('num_telephone_portable'),
        ]);

        return redirect()->back()->with('message', 'Le profil a bien été modifié');
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            // 'token' => 'required',
            'Password' => 'required',    //mot de passe actuel
            'newPassword' => ['required', 'confirmed', Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()]
        ]);

        $user = Auth::user();
        //  $user->password = $request['token'];
        if (!Hash::check($request['Password'], $user->password)) { // si mdp et different du mdp acuel alors erreur sinon on continue dans le else

            return redirect()->back()->withErrors(['erreur' => 'erreur mot de passe actuel']);
        } else {

            if ($request['Password'] == $request['newPassword']) { // si mdp et pareil que le nouveau mdp alors erreur sinon on continue dans le else

                return redirect()->back()->withErrors(['erreur' => 'le mot de passe actuel et identique au nouveau mot de passe']);
            } else

                $user->password = Hash::make($request['newPassword']);
            $user->update();
            // ->setRememberToken(Str::random(60));
            return redirect()->route('compte')->with('message', 'Le mot de passe a bien été modifié');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('home')->with('message', 'Le compte a bien été supprimé');
    }
}
