<?php

namespace App\Http\Controllers;

use App\Models\consultation;
use App\Models\DocumentsDeSante;
use App\Models\parametre;
use App\Models\patient;
use App\Models\Personnels;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Termwind\Components\Dd;

class PersonnelDashboardController extends Controller
{
    function dashboard()
    {

        return view('Personnels.dashboard');
    }
###############################################################################################

    function searchs()
    {

        return view('Personnels.patients.consulter');
    }
###############################################################################################

    function historiqueConsultation()
    {
        return view('Personnels.consultations.historique', ['personnel' => Personnels::findOrFail(Auth::user()->id)]);
    }
###############################################################################################

    function patient(Request $request)
    {

        $request->validate(
            [
                'Numerocni' => 'required|min:9'
            ]
        );

        $patient = patient::where('cni', $request->Numerocni)->get();

        if ($patient->first() != null) {

            return view('Personnels.patients.patient',

                [
                    'patient' => $patient,
                    // 'consultations'=> consultation::where('patient_id', $patient->first()->id)

                ]

            );
        }


        return back()->withErrors(['Numerocni' => ' cette identifiant n\'existe pas']);
    }
###############################################################################################
    function consultaition($id)
    {
        return view('Personnels.consultations.consultaition',
            [
                'patient' => patient::findOrFail($id),

            ]
        );
    }
###############################################################################################

    function store(Request $request, $id)
    {
        $request->validate(
            [
                'poids' => 'required',
                'temperature' => 'required',
                'cardiaque' => 'required',
                'taille' => 'required',
                'tension' => 'required',
                'respiratoire' => 'required',
                'hopital' => 'required',
                'Motif' => 'required',
                'Anamnese' => 'required',
                'Diagnostic' => 'required',
                'Prescription' => 'required',
            ]
        );
        // dd(patient::findOrFail($id)->id);
        parametre::create([
            'poids' => $request->poids,
            'temperature' => $request->temperature,
            'cardiaque' => $request->cardiaque,
            'taille' => $request->taille,
            'tension' => $request->tension,
            'respiratoire' => $request->respiratoire,
            'patient_id' => patient::findOrFail($id)->id
        ]);

        consultation::create(

            [
                'motif' => $request->Motif,
                'amnese' => $request->Anamnese,
                'diagnostique' => $request->Diagnostic,
                'Prescription' => $request->Prescription,
                'patient_id' => patient::findOrFail($id)->id,
                'personnel_id' => Auth::user()->personnelsante->id,
                'centre_de_sante_id' => $request->hopital
            ]
        );

        return to_route('admin.patient') ;
    }

###############################################################################################



    function storeDossier(Request $request, $id)
    {
        // $user = patient::findOrFail($id)->user->name;

        // if ($request->hasFile('document')) {
        //     $imageName = $user . "." . $request->file('document')->extension();
        //     Storage::disk('public')->put($imageName, file_get_contents($request->file('document')->getRealPath()));
        //     // $profil = User::find($user)->profil = $imageName;
        //     DocumentsDeSante::create([
        //         'name'=>$imageName ,
        //         'patient_id'=>$id,
        //     ]);
        // }

        return back();
    }
###############################################################################################

    function show($id)
    {

        return view('Personnels.consultations.show', ['consultation' => consultation::findOrFail($id)]);
    }
###############################################################################################
function profil($id) {

    return view('Personnels.consultations.profil',['patient'=>patient::findOrFail($id)]);
}
}
