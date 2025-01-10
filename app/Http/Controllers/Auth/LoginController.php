<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function loginCreate()
    {

        return view('Auth.Login');
    }

    function login(Request $request)
    {


        $credantiels = $request->validate(
            [
                'email' => ['required', 'email'],

                'password' => ['required', 'min:8']

                ]
            );

            // dd(Auth::attempt(['email' => $request->email, 'password' => $request->password , 'role' => 'personnel']), Auth::user());
        try {
            //code...
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password , 'role' => 'admin'])) {

                $request->session()->regenerate();

                return to_route('Admin.dashboard');

            } elseif (Auth::attempt(['email' => $request->email, 'password' => $request->password , 'role' => 'patient'])) {

                $request->session()->regenerate();

                return to_route('parametre.index');

            } elseif (Auth::attempt(['email' => $request->email, 'password' => $request->password , 'role' => 'hopital'])) {

                $request->session()->regenerate();

                return to_route('hopitals.dashboard');
            } elseif (Auth::attempt(['email' => $request->email, 'password' => $request->password , 'role' => 'personnel'])) {

                $request->session()->regenerate();

                return to_route('personnel.dashboard');
            }
        } catch (\Throwable $th) {

            return  to_route('login')->withErrors('errorEmail',' email ou mot de passe incorrect ');
        }


        return  to_route('login')->withErrors('errorEmail',' email ou mot de passe incorrect');
    }

    function choose(){

        return view('register');

    }
}
