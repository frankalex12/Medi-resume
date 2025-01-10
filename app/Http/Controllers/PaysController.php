<?php

namespace App\Http\Controllers;

use App\Models\Pays;
use Illuminate\Http\Request;

class PaysController extends Controller
{
    public function index()
    {

        return view('Admin.Pays.index', ['pays' => Pays::all()]);
    }



    public function create()
    {
        return view('Admin.Pays.create');
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
        Pays::create(
            [
                'name' => $request->pays,
                'code' => $request->code,
                'flag' => $request->flag
            ]
        );

        return to_route('pays.index');
    }




    public function destroy($id)
    {
        Pays::destroy($id);

        return back();
    }




    public function edit($id)
    {
        return view('Admin.Pays.edit', ['pays'=>Pays::find($id)]);
    }

    public function update (Request $request, $pay)
    {
         $pays = Pays::findOrFail($pay);

         $pays->setName($request->pays);
         $pays->setCode($request->code);
         $pays->setFlag($request->flag);
         $pays->save();

         return to_route('pays.index');
    }
}
