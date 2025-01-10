@extends('CentredeSante.layout')
@section('contenu')
<div class="container-fluid px-2">

    <div class="row justify-content-between mx-3">
        <div class="col-md-6">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <p class="page-title mr-3">
                    Personnels de Santé
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

                <p class="page-section-title ml-3">
                    Ajouter un Personnel
                </p>
            </div>
        </div>

        <div class="col-md-3">
            <div class=" align-items-center justify-content-center">
                <h4 class="hospital-name mb-0 font-size-18 text-primary">Hopital de deido</h4>
            </div>
        </div>
    </div>


    <!-- end page title -->


    <!-- debut second-section -->

    <form method="POST"  action="{{route('hopitals.home.personnel.affecter')}}" class="row py-3 second-section d-flex justify-content-center align-items-center flex-column">
            @csrf
        <div class="col-md-4 mt-5">
            <div class="form-group">
                <label for="specialites">Choisissez un personnel de santé</label>
                <select class="selectpicker form-control border" data-style=""  data-live-search="true"
                    name="personnel" style="border-color: red" placeholder="choisissez un personnel de santé">
                @foreach ($personnels as $personnel)
                <option value="{{$personnel->id}}" style="color: #1171A5">{{$personnel->user->name}}</option>
                @endforeach

                </select>

            </div>
        </div>

        <div class="col-md-3 bloc-boutons">

            <div class="btn-sectn row d-flex justify-content-center">

                <input type="reset" value="Annuler" class="mr-5 btn btn-danger px-5">


                <button class="btn btn-ajouter">
                    Ajouter le personnel
                </button>

            </div>

        </div>

    </form>

    <!-- fin second-section -->



</div> <!-- container-fluid -->
@livewireStyles
@endsection
