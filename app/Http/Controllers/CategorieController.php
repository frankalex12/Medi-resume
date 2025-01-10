<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {

        return view('Admin.Categories.index', ['categories' => Categorie::all()]);
    }



    public function create()
    {
        return view('Admin.Categories.create');
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
        Categorie::create(
            [
                'name' => $request->categorie,

            ]
        );

        return to_route('categorie.index');
    }




    public function destroy($id)
    {
        Categorie::destroy($id);

        return back();
    }




    public function edit($id)
    {
        return view('Admin.Categories.edit', ['categorie'=>Categorie::find($id)]);
    }

    public function update (Request $request, $categorie)
    {
         $categorie = Categorie::findOrFail($categorie);
         $categorie->setName($request->categorie);
         $categorie->save();

         return to_route('categorie.index');
    }
}
