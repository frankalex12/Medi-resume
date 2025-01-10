@extends('Admin.layouts')
@section('contenu')
    <div class="container">

        <!-- start page title -->
        <div class="row mb-3">
            <div class="col-12 ">
                <div class="page-title-box d-flex align-items-center pb-2">
                    <h4 class="mb-0 font-size-18 text-dark  font-weight-bold">Personnels de Santé ></h4>
                    <h4 class="ml-2 mb-0 font-size-18 text-black-50 font-weight-bold">Créer un Personnel</h4>
                    <hr class="mb-2">
                </div>
                @if ($errors->has('message'))
                    <span style="color:red; display: flex; justify-content: center">{{ $errors->first('message') }}</span>
                @endif
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <!-- <div class="card"> -->
                <form method="post" method="POST" action="{{ route('personnels.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row d-flex justify-content-sm-center" style="height: 700px; overflow-y:scroll;">
                        <div class="col-5 mr-3 mb-5">
                            <div class="form-group row">
                                <h5 class="ml-0 text-dark font-weight-bold mt-1">Identite personnelle:</h5>
                            </div>
                            <div class="form-group row d-flex flex-column ">
                                <label for="example-text-input" class="col-form-label text-dark font-weight-medium">
                                    Nom complet:
                                </label>
                                <input class="form-control col-11" type="text" placeholder="entre le nom complet"
                                    id="" name="nom" required>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input"
                                    class="col-form-label text-dark font-weight-medium border-primary">Date de naissance
                                    :</label>
                                <input class="form-control col-11" type="date" placeholder="jj/mm/aa" id=""
                                    name="naissance" required>
                            </div>
                            <div class="form-group row d-flex flex-column">
                                <select class="selectpicker form-control col-11 border-1" data-live-search="true"
                                    name="sexe" required>
                                    <option class="disabled">Sexe</option>
                                    <option value="M">Masculin</option>
                                    <option value="F">Feminin</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label for="Contact" class="col-form-label text-dark font-weight-medium">Adresse
                                    postal:</label>
                                <input class="form-control col-11" type="tel" placeholder=" BP17546, douala"
                                    id="" name="postal" required>
                            </div>

                            <div class="form-group row">
                                <h5 class="text-dark font-weight-bold mt-1">informations de contact</h5>
                            </div>
                            <div class="form-group row">
                                <label for="Contact" class="col-form-label text-dark font-weight-medium">Adresse
                                    E-mail:</label>
                                <input class="form-control col-11" type="email" placeholder="example@gmail.com"
                                    id="" name="email" required>
                            </div>
                            <div class="form-group row">
                                <label for="Contact" class="col-form-label text-dark font-weight-medium">Numero de
                                    telephone:</label>
                                <input class="form-control col-11" type="tel" placeholder="+237699203037" id=""
                                    name="numero" required>
                            </div>
                            {{-- <div class="form-group row d-flex flex-column">
                                <label for="Contact" class="col-form-label text-dark font-weight-medium">Profil:</label>
                                <input class="form-control col-11" type="file" id="" name="profil" required>
                            </div> --}}
                        </div>

                        <div class="col-5 ml-3 mb-5">
                            <div class="form-group row">
                                <h5 class="text-dark font-weight-bold mt-1">informations Professionnels:</h5>
                            </div>
                            <div class="form-group row">
                                <label for="Matricule" class="col-form-label text-dark font-weight-medium">Numéro
                                    d'identification professionnelle (licence ou odre):</label>
                                <input class="form-control col-11" type="text" placeholder="" id="Matricule"
                                    name="identificationpro" required>
                            </div>
                            <div class="form-group row d-flex flex-column">
                                <select class="selectpicker form-control col-11 border-1" data-live-search="true"
                                    name="specialite" required>

                                    <option class="disabled">Specialite</option>
                                    @foreach ($specialites as $specialite)
                                        <option value="{{ $specialite->getId() }}">{{ $specialite->getName() }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group row">
                                <h5 class="text-dark font-weight-bold mt-1">Formation et qualification</h5>
                            </div>
                            <div class="form-group row">
                                <label for="diplome" class="col-form-label text-dark font-weight-medium">Dernier diplome
                                    obtenu:</label>
                                <input class="form-control col-11" type="tel" placeholder="Doctorat en medecine"
                                    id="diplome" name="diplome" required>
                            </div>
                            <div class="form-group row">
                                <label for="Matricule" class="col-form-label text-dark font-weight-medium">Derniere ecole
                                    frequente:</label>
                                <input class="form-control col-11" type="text"
                                    placeholder="Faculte de Medecine de l'univercite de Douala" id="Matricule"
                                    name="ecole" required>
                            </div>
                            <div class="form-group row">
                                <label for="Matricule" class="col-form-label text-dark font-weight-medium">Date
                                    debut:</label>
                                <input class="form-control col-11" type="date" placeholder="jj/mm/aa" id="Matricule"
                                    name="ddebut" required>
                            </div>
                            <div class="form-group row">
                                <label for="Matricule" class="col-form-label text-dark font-weight-medium">Date
                                    fin:</label>
                                <input class="form-control col-11" type="date" placeholder="jj/mm/aa" id="Matricule"
                                    name="dfin" required>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-end mr-5 pr-3 pt-4 ">
                        <button class="btn  btn-sm mr-2 px-2 btn-primary">Enregistrer le personnel</button>
                        <input type="reset" value="Annuler" class="btn btn-outline-danger btn-sm px-2">

                    </div>
                </form>
                <!-- </div> -->
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    @livewireStyles
@endsection
