<?php

namespace App\Http\Controllers;

use App\Models\AntecedentMedical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Antecedentcontroller extends Controller
{
    function index() {

        return view('Users.antecedent.index' );

    }

    function destroy($id)
    {
        AntecedentMedical::destroy($id);

        return back();
    }
    function store(Request $request)
    {
        AntecedentMedical::create(
            [
                'name' => $request->name,

                'patient_id' => Auth::user()->patient->id
            ]
        );
        return to_route('antecedent.index');
    }
    function create()
    {

        return view('Users.antecedent.add');
    }
    function edit($id)
    {

        return view('Users.antecedent.update', ['antecedent' => AntecedentMedical::findOrFail($id)]);
    }
    function update(Request $request, $id)
    {
        $antecedent = AntecedentMedical::findOrFail($id);


        $antecedent =  AntecedentMedical::findOrFail($id) ;
         $antecedent->setName($request->name);
         $antecedent->save();

        return to_route('antecedent.index');
    }
}
