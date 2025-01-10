<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\patient;
use App\Models\Pays;
use App\Models\Quatier;
use App\Models\telephone;
use App\Models\User;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    function create()
    {

        return view('Users.Register.Register');
    }

    // #######################################################################################
    function store(Request $request)
    {
        $request->validate([

            "nom" => "required",
            "prenom" => "required",
            "password" => 'required|min:8',
            "email" => "required|email",
            "telephone" => "required",
            "Confirmationpassword" => 'required|min:8'

        ]);


        if ($request->password == $request->Confirmationpassword) {

            try {
                //code...
                $User = User::create(
                    [
                        'email' => $request->email,
                        'name' => $request->nom,
                        'lastname' => $request->prenom,
                        'password' => Hash::make($request->password),
                        'role' => 'patient',
                        'status' => 'actif',
                        'identifiant' => $identifiant = date('Y') . 'PA' . mt_rand(1000000, 9999999),
                    ]
                )->id;

                telephone::create(
                    [
                        'user_id' => $User,
                        'numero' => $request->telephone
                    ]
                );

                Auth::loginUsingId($User);

                return to_route('user.continu.create');
            } catch (\Throwable $th) {
                //throw $th;
                return back()->with('errorEmail', 'cette email est deja utilisé');
            }
        }

        return back();
    }

    function continuCreate()
    {

        return view(
            'Users.Register.continu-register',
            [
                'pays' => Pays::all(),
                'villes' => Ville::all(),
                'quartiers' => Quatier::all(),

            ]
        );
    }
    function continuStore(Request $request)
    {



        patient::create(
            [
                'user_id' => Auth::user()->id,
                "cni" => $request->cni,
                "naissance" => $request->naissance,
                "GroupeSanguin" => $request->Groupe,
                "profession" => $request->profession,
                "numeroprevenir" => $request->numero,
                "sexe" => $request->sexe,
                "pay_id" => $request->pays,
                "ville_id" => $request->ville,
                'quatier_id' => $request->quartier,
                "localisation" => $request->localisation,
            ]
        );

        Auth::logout();

        return to_route('user.indic');
    }

    function indicatif()
    {

        return view('Users.Register.indicMail');
    }
}
