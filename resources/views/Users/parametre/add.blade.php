@extends('Users.Acuiel')
@section('sous')
    <!-- debut third-section -->

    <div class="container-fluid col-lg-12 col-md-10 ">

        <div class=" row d-flex   justify-content-center ">
            <div class="col-md-8 d-flex   justify-content-between">
                <h4 class=""> Ajouter vos parametres</h4>
            </div>
        </div>

            <div class="row third-section d-flex justify-content-center ">
                <div class=" text-white d-flex justify-content-between col-md-2 px-5 py-3 border my-1">

                    <form action="{{ route('parametre.store') }}" method="post">
                        @csrf
                        <label for="poids" class="text-dark">poids(Kg)</label>
                        <input name="poids" type="number" placeholder="ex: 85 " class="mb-3 form-control" required>

                        <label for="taille" class="text-dark">taille (Cm)</label>
                        <input name="taille" type="number" step="0.1" placeholder="ex: 1.85 " class="mb-3 form-control" required>

                        <label for="tension" class="text-dark">Tension artérielle</label>
                        <input name="tension" type="text" placeholder="64" class="mb-3 form-control" required>

                        <label for="temperature" class="text-dark">temperature °C</label>
                        <input name="temperature" type="number" placeholder="37 " class="mb-3 form-control" required>

                        <label for="cardiaque" class="text-dark">Fréquence cardiaque(Bpm)</label>
                        <input name="cardiaque" type="number" placeholder="50" class="mb-3 form-control" required>

                        <label for="respiratoire" class="text-dark">Fréquence respiratoire</label>
                        <input name="respiratoire" type="number" placeholder="ex: 56 " class="mb-3 form-control" required>

                        <button class="btn btn-primary ">Enregistrer</button>

                    </form>
                </div>
            </div>


    </div>

    <!-- fin third-section -->
@endsection
