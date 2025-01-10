<?php

namespace App\Http\Controllers;

use App\Models\Allergie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Allergiecontroller extends Controller
{
    function index()
    {

        return view('Users.allergie.index');
    }
    function destroy($id)
    {
        Allergie::destroy($id);

        return back();
    }
    function store(Request $request)
    {
        Allergie::create(
            [
                'name' => $request->name,

                'patient_id' => Auth::user()->patient->id
            ]
        );
        return to_route('allergie.index');
    }
    function create()
    {

        return view('Users.allergie.add');
    }
    function edit($id)
    {

        return view('Users.allergie.update', ['allergie' => Allergie::findOrFail($id)]);
    }
    function update(Request $request, $id)
    {
        $Allergie = Allergie::findOrFail($id);


        $Allergie =  Allergie::findOrFail($id) ;
         $Allergie->setName($request->name);
         $Allergie->save();

        return to_route('allergie.index');
    }
}
