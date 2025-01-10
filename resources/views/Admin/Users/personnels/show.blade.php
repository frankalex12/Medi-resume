@extends('Admin.layouts')
@section('contenu')
<div class="container-fluid px-2">

    <div class="row justify-content-between mx-3">
        <div class="col-lg-6 col-md-8">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <p class="page-title mr-2">
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

                <p class="page-section-title ml-2">
                    {{ $personnel->nom }}
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
                            <img src="{{asset($personnel->user->profil)}}" alt="">
                        </div>

                        <div class="patientsnameandmail">

                            <h3 class="ps-name">
                                {{ $personnel->nom }}
                            </h3>

                            <div class="d-flex justify-content-center align-items-center mb-1 ps-infos-group">

                                <span class="ps-info-title mr-2">ID :</span>
                                <span class="ps-id">{{ $personnel->identification_professionnelle }}</span>

                            </div>

                            <div class="d-flex justify-content-center align-items-left mb-1 ps-infos-group">

                                <span class="ps-info-title mr-2">Spécialités :</span>
                                <span class="ps-specialities">{{ $personnel->specialite->name }}</span>

                            </div>

                            <div class="d-flex justify-content-center align-items-center ps-infos-group mb-1">

                                <span class="ps-info-title mr-2">statut :</span>
                                <span class="ps-status">{{ $personnel->user->status}}</span>

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

                        <span class="file-value">{{$personnel->user->telephones->last()->numero}}</span>

                    </div>

                    <div class="col-md-12 d-flex justify-content-between align-items-center mb-3 ps-infos-row">

                        <span class="file-name">E-mail :</span>

                        <span class="file-value">{{ $personnel->user->email }}</span>

                    </div>

                    <div class="col-md-12 d-flex justify-content-between align-items-center mb-3 ps-infos-row">

                        <span class="file-name">Sexe :</span>

                        <span class="file-value">{{ $personnel->Sexe }}</span>

                    </div>

                    <div class="col-md-12 d-flex justify-content-between align-items-center ps-infos-row">

                        <span class="file-name">Date de Naissance :</span>

                        <span class="file-value">{{ $personnel->naissance }}</span>

                    </div>
                    <div class="col-md-12 d-flex justify-content-between align-items-center mb-3 ps-infos-row">

                        <span class="file-name">BP :</span>

                        <span class="file-value">{{ $personnel->postal }}</span>

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

                    <div class="col-md-12 d-flex justify-content-between align-items-center mb-3 ps-infos-row">

                        <span class="file-name">Diplome :</span>

                        <span class="file-value">{{$personnel->formations->last()->diplome}}</span>

                    </div>

                    <div class="col-md-12 d-flex justify-content-between align-items-center mb-3 ps-infos-row">

                        <span class="file-name">Ecole de Formation :</span>

                        <span class="file-value text-start">{{$personnel->formations->last()->ecole}}</span>

                    </div>

                    <div class="col-md-12 d-flex justify-content-between align-items-center mb-3 ps-infos-row">

                        <span class="file-name">Année de Debut :</span>

                        <span class="file-value">{{$personnel->formations->last()->andebut}}</span>

                    </div>

                    <div class="col-md-12 d-flex justify-content-between align-items-center mb-3 ps-infos-row">

                        <span class="file-name">Année de fin :</span>

                        <span class="file-value">{{$personnel->formations->last()->anfin}}</span>

                    </div>

                    <div class="col-md-12 d-flex justify-content-between align-items-center mb-3 ps-infos-row">

                        <span class="file-name">Date de prise de service :</span>

                        <span class="file-value">{{$personnel->formations->last()->created_at}}</span>

                    </div>

                </div>


            </div>



        </div>

    </div>

    <!-- fin second-section -->

    <!-- debut third-section -->

    @livewireStyles
@endsection
