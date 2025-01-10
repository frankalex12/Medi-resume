<?php

namespace App\Http\Controllers;

use App\Models\Quatier;
use App\Models\Ville;
use Illuminate\Http\Request;

class QuatierController extends Controller
{
    public function index()
    {

        return view('Admin.Quatiers.index', ['quatiers' => Quatier::all()]);
    }



    public function create()
    {
        return view('Admin.Quatiers.create', ['villes'=>Ville::all()]);
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

// dd($request);
        Quatier::create(
            [
                'name' => $request->quartier,
                'ville_id' => $request->ville,
            ]
        );

        return to_route('quartier.index');
    }




    public function destroy($id)
    {
        Quatier::destroy($id);

        return back();
    }


    public function edit($id)
    {
        return view('Admin.Quatiers.edit', ['quartier' => Quatier::find($id), 'villes'=>Ville::all()]);
    }

    public function update(Request $request, $id)
    {
        $quartier = Quatier::findOrFail($id);

        $quartier->setName($request->quartier);
        $quartier->setVille_id($request->ville);
        $quartier->save();

        return to_route('quartier.index');
    }
}
