<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Ville;
use Illuminate\Http\Request;

class VilleController extends Controller
{
    public function index()
    {

        return view('Admin.Villes.index', ['villes' => Ville::all()]);
    }



    public function create()
    {
        return view('Admin.Villes.create', ['departements'=>Departement::all()]);
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


        Ville::create(
            [
                'name' => $request->ville,
                'departement_id' => $request->departement,
            ]
        );

        return to_route('ville.index');
    }




    public function destroy($id)
    {
        Ville::destroy($id);

        return back();
    }


    public function edit($id)
    {
        return view('Admin.Villes.edit', ['ville' => Ville::find($id), 'departements'=>Departement::all()]);
    }

    public function update(Request $request, $id)
    {
        $ville = Ville::findOrFail($id);

        $ville->setName($request->ville);
        $ville->setDepartement_id($request->departement);
        $ville->save();

        return to_route('ville.index');
    }
}
