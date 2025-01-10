<?php

namespace App\Http\Controllers;

use App\Models\Pays;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function index()
    {

        return view('Admin.Regions.index', ['regions' => Region::all()]);
    }



    public function create()
    {
        return view('Admin.Regions.create', ['pays'=>Pays::all()]);
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

        Region::create(
            [
                'name' => $request->region,
                'pay_id' => $request->pays,
            ]
        );

        return to_route('region.index');
    }




    public function destroy($id)
    {
        Region::destroy($id);

        return back();
    }




    public function edit($id)
    {
        return view('Admin.Regions.edit', ['region' => Region::find($id), 'pays'=>Pays::all()]);
    }

    public function update(Request $request, $region)
    {
        $pays = Region::findOrFail($region);

        $pays->setName($request->region);
        $pays->setPay_id($request->pays);
        $pays->save();

        return to_route('region.index');
    }
}
