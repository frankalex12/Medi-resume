@extends('Admin.layouts')
@section('contenu')
<div class="container-fluid px-2">

    <div class="row justify-content-between mx-3">
        <div class="col-lg-6 col-md-8">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <p class="page-title mr-2">
                    Centre hospitalier
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
                    {{$centre->name}}
                </p>
            </div>
        </div>


    </div>


    <!-- end page title -->


    <!-- debut second-section -->

    <div class="container col-lg-12 col-md-12 mb-5  principal-bloc">

        <div class="row  second-section d-flex justify-content-center align-items-center flex-column">

            <div class="col container-fluid ">

                <div class="row my-3 mx-3 pt-3 justify-content-between align-items-center">

                    <div
                        class="user-profile-bloc col-lg-8 col-md-12 d-flex justify-content-center align-items-center">

                        <div class="patientpic-bloc mr-4">
                            <img src="" alt="">
                        </div>

                        <div class="patientsnameandmail">

                            <h3 class="ps-name">
                                {{$centre->user->name}}
                            </h3>

                            <div class="d-flex justify-content-center align-items-center mb-1 ps-infos-group">

                                <span class="ps-info-title mr-2">ID :</span>
                                <span class="ps-id">{{$centre->Numero_identification}}</span>

                            </div>


                            <div class="d-flex justify-content-center align-items-center ps-infos-group mb-1">

                                <span class="ps-info-title mr-2">statut :</span>
                                <span class="ps-status">{{$centre->user->status}}</span>

                            </div>

                            <div class="d-flex justify-content-center align-items-left mb-1 ps-infos-group">

                                <span class="ps-info-title mr-2">Spécialités :</span>
                                @foreach ($centre->specialites as $item)
                                <div style="display: flex">
                                    <span class="ps-specialities">{{$item->specialite->name}}</span>,
                                </div>
                                @endforeach

                            </div>
                        </div>

                    </div>


                </div>

            </div>

        </div>

        <div class="row container-fluid mt-4 col-lg-12 col-md-10 third-section d-flex justify-content-between align-items-center conteneur-infos-générales">

            <div class="col-lg-5 px-4 col-sm-12 container p-3 mb-5 conteneur-parametres-generaux">

                <div class="row   py-3 justify-content-between align-items-center">

                    <div
                        class="col-md-12 d-flex justify-content-between align-items-center en-tete-documents">

                        <h2>Informations Générales</h2>

                    </div>

                </div>

                <div class="row   py-3 justify-content-between align-items-center flex-column">



                    <div class="col-md-12 d-flex justify-content-between align-items-center mb-3 ps-infos-row">

                        <span class="file-name">Contacts :</span>

                        <span class="file-value">{{$centre->user->telephones->first()->numero}}</span>

                    </div>

                    <div class="col-md-12 d-flex justify-content-between align-items-center mb-3 ps-infos-row">

                        <span class="file-name">E-mail :</span>

                        <span class="file-value">{{$centre->user->email}}</span>

                    </div>

                    <div class="col-md-12 d-flex justify-content-between align-items-center mb-3 ps-infos-row">

                        <span class="file-name">Pays:</span>

                        <span class="file-value">{{$centre->pays->name}}</span>

                    </div>
                    <div class="col-md-12 d-flex justify-content-between align-items-center mb-3 ps-infos-row">

                        <span class="file-name">Ville :</span>

                        <span class="file-value">{{$centre->villes->name}}</span>

                    </div>
                    <div class="col-md-12 d-flex justify-content-between align-items-center ps-infos-row">

                        <span class="file-name">Localisation:</span>

                        <span class="file-value">{{$centre->Localisation}}</span>

                    </div>

                </div>

            </div>

            <div class="col-lg-5 px-4 col-sm-12 container p-3 mb-5 conteneur-parametres-generaux">

                <div class="row   py-3 justify-content-between align-items-center">

                    <div
                        class="col-md-12 d-flex justify-content-between align-items-center en-tete-documents">

                        <h2>Informations Proféssionelles</h2>

                    </div>

                </div>

                <div class="row   py-3 justify-content-between align-items-center flex-column">
                    {{-- {{$centre}} --}}
                    <div class="col-md-12 d-flex justify-content-between align-items-center mb-3 ps-infos-row">

                        <span class="file-name">Nom du responsable :</span>

                        <span class="file-value">{{$centre->name_responsable}}</span>

                    </div>

                    <div class="col-md-12 d-flex justify-content-between align-items-center mb-3 ps-infos-row">

                        <span class="file-name">Email du responsable :</span>

                        <span class="file-value text-start">{{$centre->email_responsable}}</span>

                    </div>

                    <div class="col-md-12 d-flex justify-content-between align-items-center mb-3 ps-infos-row">

                        <span class="file-name">Telephone du responsable :</span>

                        <span class="file-value">{{$centre->telephone_responsable}}</span>

                    </div>

                    <div class="col-md-12 d-flex justify-content-between align-items-center mb-3 ps-infos-row">

                        <span class="file-name">confirmation du concentement :</span>

                        <span class="file-value">{{$centre->confirmation_concentement}}</span>

                    </div>

                    <div class="col-md-12 d-flex justify-content-between align-items-center mb-3 ps-infos-row">

                        <span class="file-name">Date d'inscription:</span>

                        <span class="file-value">{{$centre->created_at}}</span>

                    </div>

                </div>


            </div>



        </div>

    </div>

    <!-- fin second-section -->

    <!-- debut third-section -->



    <!-- fin third-section -->



</div> <!-- container-fluid -->

@endsection
