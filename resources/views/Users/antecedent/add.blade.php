@extends('Users.Acuiel')
@section('sous')
    <!-- debut third-section -->

    <div class="container-fluid col-lg-12 col-md-10 ">

        <div class=" row d-flex   justify-content-center ">
            <div class="col-md-8 d-flex   justify-content-between">
                <h4 class=""> Ajouter un antécédent</h4>
            </div>
        </div>

            <div class="row third-section d-flex justify-content-center ">
                <div class=" text-white d-flex justify-content-between col-md-2 px-5 py-3 border my-1">

                    <form action="{{ route('antecedent.store') }}" method="post">
                        @csrf

                        <input name="name" type="text" placeholder="ex: Diabete " class="mb-3 form-control" required>
                        <button class="btn btn-primary ">Enregistrer</button>

                    </form>
                </div>
            </div>


    </div>

    <!-- fin third-section -->
@endsection
