@extends('Personnels.layout')
@section('contenu')
    <div class="container-fluid px-2">

        <div class="row justify-content-between mx-3">
            <div class="col-lg-6 col-md-8">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <p class="page-title mr-2">
                        Consultations
                    </p>

                    <p class="mx-3">
                        <svg width="11" height="18" viewBox="0 0 11 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_288_756)">
                                <path
                                    d="M11.0002 9.00228L1.53711 0.00134277L-0.00141223 1.46473L9.46164 10.4657L11.0002 9.00228Z"
                                    fill="#505050" />
                                <path
                                    d="M1.54085 18.0003L11.0039 8.99939L9.46533 7.53594L0.00227176 16.5369L1.54085 18.0003Z"
                                    fill="#505050" />
                            </g>
                            <defs>
                                <clipPath id="clip0_288_756">
                                    <rect width="11" height="18" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                    </p>

                    <p class="page-section-title ml-2">
                        nom du patient
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
                        <h2 class="titre text-cente mb-4">Nouvelle Consultation </h2>
                    </div>

                    <form action="{{route('personnel.consultaition.store', ['id' => $patient])}} " method="POST" class="row d-flex justify-content-center align-items-center flex-column mt-5">
                            @csrf
                            @method('PUT')
                        <div class="form-group">

                            <select class="selectpicker form-control border  " data-style="" name="hopital"
                                style="border-color: red" placeholder="choisissez un personnel de santé">
                                @foreach (Auth::user()->personnelsante->centres as $centres)
                                <option value="{{$centres->id}}" style="color: #1171A5">{{$centres->name}}</option>
                                @endforeach

                            </select>

                        </div>

                        <div class="col-md-10 mb-5 champ-motif">
                            <label for="reason" class="form-label fl-1">Motif Consultation</label>
                            <input type="text" class="form-control" name="Motif" value="" id="reason"
                                placeholder="Entrez le motif de la consultation">
                        </div>

                        <div class="row mb-4 px-3 d-flex align-items-center justify-content-between">
                            <div class="col-md-4 mb-4">
                                <div class="form-group">
                                    <label for="poids" class="form-label-2">Poids (kg)</label>
                                    <input type="number" class="form-control" name="poids" value="" id="poids"
                                        placeholder="Entrez le poids">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="form-group">
                                    <label for="temperature" class="form-label-2">Température (°C)</label>
                                    <input type="number" class="form-control" name="temperature" value=""
                                        id="temperature" placeholder="Entrez la température">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="frequence-cardiaque" class="form-label-2">Fréquence cardiaque(Bpm)</label>
                                    <input type="number" class="form-control" name="cardiaque" value=""
                                        id="frequence-cardiaque" placeholder="Entrez la fréquence cardiaque">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4 px-3 d-flex align-items-center justify-content-between">
                            <div class="col-md-4 mb-4">
                                <div class="form-group">
                                    <label for="taille" class="form-label-2">taille (Cm)</label>
                                    <input type="number" class="form-control" name="taille" value="" id="taille"
                                        placeholder="Entrez le poids">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="form-group">
                                    <label for="tension" class="form-label-2">tension(mmHg)</label>
                                    <input type="number" class="form-control" name="tension" value="" id="tension"
                                        placeholder="Entrez la température">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="frequence-respiratoire" class="form-label-2">Fréquence respiratoire</label>
                                    <input type="number" class="form-control" name="respiratoire" value=""
                                        id="frequence-respiratoire" placeholder="Entrez la fréquence cardiaque">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-10  mb-4 champ-anamnèse">
                            <label for="Anamnese" class="form-label">Anamnèse</label>
                            <textarea class="form-control input-anamnese" name="Anamnese" id="Anamnese" value="" rows="5"
                                placeholder="Entrez l'anamnèse"></textarea>
                            <!-- <input type="text" class="form-control input-anamnese" value="" id="Anamnese" placeholder="Entrez l'anamnèse"> -->
                        </div>

                        <div class="col-md-10  mb-4 champ-anamnèse">
                            <label for="Diagnostic" class="form-label">Diagnostic</label>
                            <textarea class="form-control input-diagnostic" name="Diagnostic" value="" id="Diagnostic"
                                placeholder="Entrez le Diagnostic" rows="5"></textarea>
                            <!-- <input type="text" class="form-control" value="" id="Diagnostic" placeholder="Entrez le Diagnostic"> -->
                        </div>

                        <div class="col-md-10  mb-4 champ-anamnèse">
                            <label for="prescription" class="form-label">Prescription</label>
                            <textarea class="form-control input-prescription" name="Prescription" value="" id="prescription"
                                placeholder="Entrez la prescription" rows="5"></textarea>
                            <!-- <input type="text" class="form-control" value="" id="Diagnostic" placeholder="Entrez le Diagnostic"> -->
                        </div>


                        <button type="submit" class="btn btn-validation mt-4 mb-4">valider la consultation</button>

                    </form>

                </div>

            </div>

        </div>

        <!-- fin second-section -->





    </div> <!-- container-fluid -->
@endsection
