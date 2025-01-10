<?php

namespace App\Http\Controllers;

use App\Models\GroupeSpecialite;
use Illuminate\Http\Request;

class GroupeSpecialiteController extends Controller
{
    public function index()
    {

        return view('Admin.Groupespecialite.index', ['groupespecialites' => GroupeSpecialite::all()]);
    }



    public function create()
    {
        return view('Admin.Groupespecialite.create');
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


        GroupeSpecialite::create(
            [
                'name' => $request->groupespecialite,
            ]
        );

        return to_route('groupespecialite.index');
    }




    public function destroy($id)
    {
        GroupeSpecialite::destroy($id);

        return back();
    }


    public function edit($id)
    {
        return view('Admin.Groupespecialite.edit', ['sroupespecialite' => GroupeSpecialite::find($id)]);
    }

    public function update(Request $request, $id)
    {
        $groupe = GroupeSpecialite::findOrFail($id);

        $groupe->setName($request->groupespecialite);
        $groupe->save();

        return to_route('groupespecialite.index');
    }
}
