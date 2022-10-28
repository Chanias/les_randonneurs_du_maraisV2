<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Adresse;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'date_de_naissance' => ['required', 'string', 'max:255'],
            'adresse' => ['required', 'string', 'max:255'],
            'code_postal' => ['required', 'string', 'max:5'],
            'ville' => ['required', 'string', 'max:255'],
            'num_telephone_fixe' => ['nullable', 'string', 'max:14'],
            'num_telephone_portable' => ['nullable', 'string', 'max:14'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     * @return \App\Models\Adresse
     */
    protected function create(array $data)
    {
        return User::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'date_de_naissance' => $data['date_de_naissance'],
            'num_telephone_fixe' => $data['num_telephone_fixe'],
            'num_telephone_portable' => $data['num_telephone_portable'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        return Adresse::create([
            'adresse' => $data['adresse'],
            'code_postal' => $data['code_postal'],
            'ville' => $data['ville'],
        ]);
    }

    
    protected function reglementAccepte(Request $request)
    {
        if ($request->checkbox == 'on') {
            session()->put('reglementAccepte', true); // pour stocker l'acceptation de la checkbox dans la session
            return view('auth.register')->with('message', 'La case du réglement a bien été cochée...');
        } else {
            session()->put('reglementAccepte', false);
            return redirect::back()->withErrors(['Attention !', 'Vous n\'avez pas coché la case']);
        }
    }
}
