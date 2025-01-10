<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Region;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    public function index()
    {

        return view('Admin.Departements.index', ['departements' => Departement::all()]);
    }



    public function create()
    {
        return view('Admin.Departements.create', ['regions'=>Region::all()]);
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


        Departement::create(
            [
                'name' => $request->departement,
                'region_id' => $request->region,
            ]
        );

        return to_route('departement.index');
    }




    public function destroy($id)
    {
        Departement::destroy($id);

        return back();
    }




    public function edit($id)
    {
        return view('Admin.Departements.edit', ['departement' => Departement::find($id), 'regions'=>Region::all()]);
    }

    public function update(Request $request, $region)
    {
        $departement = Departement::findOrFail($region);

        $departement->setName($request->departement);
        $departement->setRegion_id($request->region);
        $departement->save();

        return to_route('departement.index');
    }
}
