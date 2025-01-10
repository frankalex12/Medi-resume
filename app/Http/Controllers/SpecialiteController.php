<?php

namespace App\Http\Controllers;

use App\Models\GroupeSpecialite;
use App\Models\Specialite;
use Illuminate\Http\Request;

class SpecialiteController extends Controller
{
    public function index()
    {

        return view('Admin.Specialites.index', ['specialites' => Specialite::all()]);
    }



    public function create()
    {
        return view('Admin.Specialites.create', ['gorupespecialites' => GroupeSpecialite::all()]);
    }



    public function store(Request $request)
    {
        // $request->validate(
        //     [
        //         'name' => 'required',
        //         'code' => 'required',
        //         'flag' => 'required'
        //     ]

        // );

        Specialite::create(
            [
                'name' => $request->specialite,
                'groupe_specialite_id' => $request->gorupespecialite,
            ]
        );

        return to_route('specialite.index');
    }




    public function destroy($id)
    {
        GroupeSpecialite::destroy($id);

        return back();
    }




    public function edit($id)
    {
        return view('Admin.Specialites.edit', ['specialite' => Specialite::find($id), 'groupespecialites' => GroupeSpecialite::all()]);
    }

    public function update(Request $request, $specialite)
    {
        $specialite = Specialite::findOrFail($specialite);

        $specialite->setName($request->specialite);
        $specialite->setGroupe_specialite_id($request->groupespecialite);
        $specialite->save();

        return to_route('specialite.index');
    }
}
