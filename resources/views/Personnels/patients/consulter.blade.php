@extends('Personnels.layout')
@section('contenu')
    <!-- start page title -->
    <div class="row d-flex align-items-center justify-content-between">
        <div class="col-md-6 ">

                <h1 class="mb-0 ">Trouver un patient</h1>

        </div>
        <div class="col-md-3">
            <div class=" align-items-center justify-content-center">
                @auth
                    <h4 class="hospital-name mb-0 font-size-18 text-primary">Dr.{{ Auth::user()->name }}</h4>
                @endauth
            </div>
        </div>
    </div>
    <div class="row my-2">
        <div class="col-md-12">
            {{-- <div class="d-flex align-items-center justify-content-end ">
                <a href="" class="btn btn-primary btn-sm mb-2 px-2">Creer un centre hospitalier</a>
            </div> --}}
        </div>
    </div>

    <!-- end page title -->
       <!-- debut second-section -->

       <form method="POST"  action="{{route('personnel.patient')}}" class="row py-3 second-section d-flex justify-content-center align-items-center flex-column">
        @csrf
    <div class="col-md-4 mt-5">
        <div class="form-group">
            <label for="Numero">Numero de la cni</label>
            <input type="text" placeholder="123004879" name="Numerocni" class="form-control">

        </div>
    </div>

    <div class="col-md-3 bloc-boutons">

        <div class="btn-sectn row d-flex justify-content-center">


            <button class="btn btn-ajouter">
                Valider
            </button>

        </div>

    </div>

</form>

<!-- fin second-section -->



@endsection
