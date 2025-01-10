@extends('hopital.layout')
@section('contenu')
<div class="container">

    <!-- start page title -->
    <div class="row mb-3">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center">
                <h4 class="mb-0 font-size-18 text-dark  font-weight-bold">Gestion de centre hospitalier</h4>
                <h4 class="ml-2 mb-0 font-size-18 text-black-50 font-weight-bold">Creer un centre hospitalier</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <!-- <div class="card"> -->
                <form method="post">
                    <div class="row d-flex justify-content-sm-center"
                        style="height: 380px; overflow-y:scroll;">
                        <div class="col-5 mr-3 mb-5">
                            <div class="form-group row">
                                <h5 class="ml-0 text-dark font-weight-bold mt-1" >informations generales</h5>
                            </div>
                            <div class="form-group row d-flex flex-column ">
                                <label for="example-text-input" class="col-form-label text-dark font-weight-medium">
                                    Nom complet du centre hospitalier:
                                </label>
                                <input class="form-control col-11" type="text"
                                    placeholder="Renseigner le Nom de l'hopital" id="" >
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-form-label text-dark font-weight-medium border-primary">Adresse e-mail :</label>
                                <input class="form-control col-11" type="email" placeholder="example@gmail.com"
                                    id="">
                            </div>
                            <div class="form-group row">
                                <label for="Contact" class="col-form-label text-dark font-weight-medium">Numéro de téléphone:</label>
                                <input class="form-control col-11" type="tel" placeholder="+237699203037"
                                    id="">
                            </div>
                            <div class="form-group row">
                                <h5 class="text-dark font-weight-bold mt-1">informations professionnelles</h5>
                            </div>
                            <div class="form-group row">
                                <select class="form-control col-11">
                                    <option>specialite</option>
                                    <option>Large select</option>
                                    <option>Small select</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <select class="form-control col-11">
                                    <option>categorie de centre</option>
                                    <option>Large select</option>
                                    <option>Small select</option>
                                </select>
                            </div>

                        </div>

                        <div class="col-5 ml-3 mb-5">
                            <div class="form-group row">
                                <h5 class="text-dark font-weight-bold mt-1">informations Adminstratives</h5>
                            </div>
                            <div class="form-group row">
                                <label for="Matricule" class="col-form-label text-dark font-weight-medium">Numéro d'identification du centre hospitalier:</label>
                                <input class="form-control col-11" type="text" placeholder="" id="Matricule">
                            </div>
                            <div class="form-group row">
                                <label for="Matricule" class="col-form-label text-dark font-weight-medium">Nom complet du responsable du centre hospitalier:</label>
                                <input class="form-control col-11" type="text" placeholder="" id="Matricule">
                            </div>
                            <div class="form-group row">
                                <label for="Matricule" class="col-form-label text-dark font-weight-medium">numéro de téléphone du responsable:</label>
                                <input class="form-control col-11" type="text" placeholder="" id="Matricule">
                            </div>
                            <div class="form-group row">
                                <label for="Matricule" class="col-form-label text-dark font-weight-medium">adresse e-mail du responsable:</label>
                                <input class="form-control col-11" type="text" placeholder="" id="Matricule">
                            </div>
                            <div class="form-group row">
                                <h5 class="py-2 text-dark font-weight-bold mt-1">Adresse & Localisation</h5>
                            </div>
                            <div class="form-group row">
                                 <select class="form-control col-11">
                                    <option>Pays</option>
                                    <option>Large select</option>
                                    <option>Small select</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                 <select class="form-control col-11">
                                    <option>region</option>
                                    <option>Large select</option>
                                    <option>Small select</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                 <select class="form-control col-11">
                                    <option>Deparement</option>
                                    <option>Large select</option>
                                    <option>Small select</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <select class="form-control col-11">
                                    <option>ville</option>
                                    <option>Large select</option>
                                    <option>Small select</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <select class="form-control col-11">
                                    <option>quatier</option>
                                    <option>Large select</option>
                                    <option>Small select</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label for="Contact" class="col-form-label text-dark font-weight-medium">Adresse postale:</label>
                                <input class="form-control col-11" type="tel" placeholder="" id="">
                            </div>
                            <div class="form-group row">
                                <label for="Matricule" class="col-form-label text-dark font-weight-medium">Localisation
                                    exeat:</label>
                                <input class="form-control col-11" type="text"
                                    placeholder="derriere le marche pk17" id="Matricule">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-end mr-5 pr-3 pt-4 ">
                        <div class="btn  btn-sm mr-2 px-2 btn-primary">Enregistrer</div>
                        <div class="btn btn-outline-danger btn-sm px-2">Annuler</div>
                    </div>
                </form>
            <!-- </div> -->
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection
