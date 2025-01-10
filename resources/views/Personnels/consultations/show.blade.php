@extends('Personnels.layout')
@section('contenu')
    <div class="container-fluid px-2">

        <div class="row justify-content-between mx-3">
            <div class="col-lg-6 col-md-8">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <p class="page-title mr-2">
                        Consultations
                    </p>


                </div>
            </div>


        </div>


        <!-- end page title -->


        <!-- debut second-section -->

        <div class="container">

            <div class="row">

                <div class="container bloc-consultation col-lg-8 col-md-12 py-4">

                    <div class="row justify-content-center align-items-center mt-4 title-area mx-2">
                        <h2 class="titre text-cente mb-4">Consultation n° <span>{{$consultation->id}}</span></h2>
                    </div>

                    <div class="row d-flex justify-content-center align-items-center flex-column mt-5">


                        <div class="col-md-10 mb-4 champ-date">
                            <span class="consultation-infos-title mb-3">Date</span>
                            <p class="consultation-infos-value pl-3">{{$consultation->created_at}}</p>
                        </div>

                        <div class="col-md-10 mb-4 champ-motif">
                            <span class="consultation-infos-title mb-3">Motif</span>
                            <p class="consultation-infos-value pl-3">{{$consultation->motif}}</p>
                        </div>

                        <div class="row mb-4 col-md-10  d-flex align-items-center justify-content-between">

                            <div class="col-md-4 mb-4 champ-poids">
                                <span class="consultation-infos-title mb-3">Poids (kg)</span>
                                <p class="consultation-infos-value pl-3">{{$consultation->malade->parametres->last()->poids}}</p>
                            </div>

                            <div class="col-md-4 mb-4 champ-temperature">
                                <span class="consultation-infos-title mb-3">Température (°C)</span>
                                <p class="consultation-infos-value pl-3">{{$consultation->malade->parametres->last()->temperature}}</p>
                            </div>

                            <div class="col-md-4 mb-4 champ-Freq-Cardiaque">
                                <span class="consultation-infos-title mb-3">Fréq. Cardiaque (Bpm)</span>
                                <p class="consultation-infos-value pl-3">{{$consultation->malade->parametres->last()->cardiaque}}</p>
                            </div>

                        </div>
                        <div class="row mb-4 col-md-10  d-flex align-items-center justify-content-between">

                            <div class="col-md-4 mb-4 champ-poids">
                                <span class="consultation-infos-title mb-3">Tension</span>
                                <p class="consultation-infos-value pl-3">{{$consultation->malade->parametres->last()->tension}}</p>
                            </div>

                            <div class="col-md-4 mb-4 champ-temperature">
                                <span class="consultation-infos-title mb-3">taille (Cm)</span>
                                <p class="consultation-infos-value pl-3">{{$consultation->malade->parametres->last()->taille}}</p>
                            </div>

                            <div class="col-md-4 mb-4 champ-Freq-Cardiaque">
                                <span class="consultation-infos-title mb-3">Fréq. Respiratoire</span>
                                <p class="consultation-infos-value pl-3">{{$consultation->malade->parametres->last()->respiratoire}}</p>
                            </div>

                        </div>

                        <div class="col-md-10 mb-4 champ-anamnèse">
                            <span class="consultation-infos-title mb-3">Anamnèse</span>
                            <p class="consultation-infos-value pl-3 py-1 anamnese">{{$consultation->amnese}}</p>
                        </div>

                        <div class="col-md-10 mb-4 champ-diagnostic">
                            <span class="consultation-infos-title mb-3">Diagnostic</span>
                            <p class="consultation-infos-value pl-3 py-1 anamnese">{{$consultation->diagnostique}}</p>
                        </div>

                        <div class="col-md-10 mb-4 champ-prescription">
                            <span class="consultation-infos-title mb-3">Prescription</span>
                            <p class="consultation-infos-value pl-3 py-1 anamnese">{{$consultation->Prescription}}</p>
                        </div>

                        <div class="col-md-10 mb-4 champ-Consulté-par">
                            <span class="consultation-infos-title mb-3">Consulté par</span>
                            <p class="consultation-infos-value pl-3">Dr. {{$consultation->professionnel->nom}}</p>
                        </div>

                        <div class="col-md-10 mb-4 champ-centre-hospitalier">
                            <span class="consultation-infos-title mb-3">Centre hospitalier joint</span>
                            <p class="consultation-infos-value pl-3">{{$consultation->hopital->name}}</p>
                        </div>

                        <!-- <button type="submit" class="btn btn-validation mt-4 mb-4">valider la consultation</button> -->

                    </div>

                </div>

            </div>

        </div>

        <!-- fin second-section -->





    </div> <!-- container-fluid -->
    @livewireStyles
@endsection
