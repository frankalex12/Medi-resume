<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\SousCategorie;
use Illuminate\Http\Request;

class SousCategorieController extends Controller
{
    public function index()
    {
        return view('Admin.Souscategories.index', ['souscategories' => SousCategorie::all()]);
    }



    public function create()
    {
        return view('Admin.Souscategories.create', ['categories' => Categorie::all()]);
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

        SousCategorie::create(
            [
                'name' => $request->souscategorie ,
                'categorie_id' => $request->categorie,
            ]
        );

        return to_route('souscategorie.index');
    }




    public function destroy($id)
    {
        SousCategorie::destroy($id);

        return back();
    }




    public function edit($id)
    {
        return view('Admin.Souscategories.edit', ['souscategorie' => SousCategorie::find($id), 'categories' => Categorie::all()]);
    }

    public function update(Request $request, $Scategorie)
    {
        $souscategorie = SousCategorie::findOrFail($Scategorie);

        $souscategorie->setName($request->souscategorie);
        $souscategorie->setcategorie_id($request->categorie);
        $souscategorie->save();

        return to_route('souscategorie.index');
    }
}
