@extends('Users.Acuiel')
@section('sous')
<!-- debut third-section -->



    <div class="container-fluid col-lg-12 col-md-10">
        <div class=" row d-flex   justify-content-center ">
            <div class="col-md-8 d-flex   justify-content-center">
                <a href="{{route('parametre.create')}}" class="btn btn-primary "> Mettre a jour</a>
            </div>
        </div>
        @if (Auth::user()->patient->parametres->last() != null)

        <div class="row third-section d-flex justify-content-between align-items-center">

           <div class="col-lg-4 px-4 col-sm-12 container p-3 mb-5 conteneur-parametres-generaux">

               <div class="row   py-3 justify-content-between align-items-center">

                   <div
                       class="col-md-12 d-flex justify-content-between align-items-center en-tete-documents">

                       <h2>Paramètres Généraux</h2>



                   </div>

               </div>

               <div class="row   py-3 justify-content-between align-items-center flex-column">

                <div class="col-md-12 d-flex justify-content-between align-items-center mb-3">

                    <span class="file-name">Date:</span>

                    <span class="file-value">{{Auth::user()->patient->created_at}}</span>

                </div>

                   <div class="col-md-12 d-flex justify-content-between align-items-center mb-3">

                       <span class="file-name">Date de naissance</span>

                       <span class="file-value">{{Auth::user()->patient->naissance}}</span>

                   </div>

                   <div class="col-md-12 d-flex justify-content-between align-items-center mb-3">

                       <span class="file-name">Sexe</span>

                       <span class="file-value">{{Auth::user()->patient->sexe}}</span>

                   </div>

                   <div class="col-md-12 d-flex justify-content-between align-items-center mb-3">

                       <span class="file-name">Taille(cm)</span>
                       {{-- @dd(Auth::user()->patient->parametres->last()->poids) --}}

                       <span class="file-value">
                           {{ Auth::user()->patient->parametres->last()->taille}}
                       </span>

                   </div>

                   <div class="col-md-12 d-flex justify-content-between align-items-center mb-3">

                       <span class="file-name">Poids(kg)</span>
                       <span class="file-value"> {{ Auth::user()->patient->parametres->last()->poids}}</span>

                   </div>

                   <div class="col-md-12 d-flex justify-content-between align-items-center">

                       <span class="file-name">Groupe sanguin</span>

                       <span class="file-value">{{Auth::user()->patient->GroupeSanguin}}</span>

                   </div>

               </div>

           </div>

           <div class="col-lg-4 px-4 col-sm-12 container p-3 mb-5 conteneur-parametres-generaux">

               <div class="row   py-3 justify-content-between align-items-center">

                   <div
                       class="col-md-12 d-flex justify-content-between align-items-center en-tete-documents">

                       <h2>Signes vitaux</h2>



                   </div>

               </div>

               <div class="row   py-3 justify-content-between align-items-center flex-column">
                <div class="col-md-12 d-flex justify-content-between align-items-center mb-3">

                    <span class="file-name">Date de mise à jour des parametres:</span>

                    <span class="file-value">{{Auth::user()->patient->parametres->last()->created_at}}</span>

                </div>

                   <div class="col-md-12 d-flex justify-content-between align-items-center mb-3">

                       <span class="file-name">Fréquence respiratoire</span>

                       <span class="file-value">{{ Auth::user()->patient->parametres->last()->respiratoire}}</span>

                   </div>

                   <div class="col-md-12 d-flex justify-content-between align-items-center mb-3">

                       <span class="file-name">Fréquence cardiaque(Bpm)</span>

                       <span class="file-value">{{ Auth::user()->patient->parametres->last()->cardiaque}}</</span>

                   </div>

                   <div class="col-md-12 d-flex justify-content-between align-items-center mb-3">

                       <span class="file-name">Tension artérielle</span>

                       <span class="file-value">{{ Auth::user()->patient->parametres->last()->tension}}</span>

                   </div>

                   <div class="col-md-12 d-flex justify-content-between align-items-center mb-3">

                       <span class="file-name">Température°C</span>

                       <span class="file-value">{{ Auth::user()->patient->parametres->last()->temperature}}</span>

                   </div>



               </div>


           </div>



       </div>
        @endif

    </div>

    <!-- fin third-section -->
@endsection
