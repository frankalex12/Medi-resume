@extends('Users.layout')
@section('contenu')
<div class="container-fluid px-2">

    <div class="row justify-content-between mx-3">
        <div class="col-lg-6 col-md-8">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <p class="page-title mr-2">
                    Profil medical
                </p>

                <!-- <p class="mx-3">
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
                </p> -->
            </div>
        </div>


    </div>


    <!-- end page title -->


    <!-- debut second-section -->

    <div class="container col-lg-11 col-md-12 mb-5 py-3">

        <div class="row  second-section d-flex justify-content-center align-items-center flex-column">

            <div class="col container-fluid ">

                <div class="row my-3 mx-3 px-3 pt-3 justify-content-between align-items-center">

                    <div
                        class="user-profile-bloc col-lg-6 col-md-8 d-flex justify-content-center align-items-center">

                        <div class="patientpic-bloc mr-4">
                            <img src="{{Auth::user()->profil}}" alt="">
                        </div>

                        <div class="patientsnameandmail">

                            <h3 class="patient-name">
                                {{Auth::user()->name}}
                            </h3>
                            <h4 class="patient-id">
                                {{Auth::user()->identifiant}}
                            </h4>

                            <h4 class="patient-mail">
                                {{Auth::user()->email}}
                            </h4>

                        </div>

                    </div>

                    <div class="col-md-3 bloc-profil-medical">

                        <button class="modifier-profil-medical">
                            <svg width="22" height="29" viewBox="0 0 22 29" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_318_1003)">
                                    <path
                                        d="M16.2169 13.4274C14.365 15.5666 12.5168 17.7066 10.6724 19.8473C9.85891 20.7899 9.04222 21.7319 8.23297 22.6789C8.0817 22.8597 7.88693 22.9978 7.6677 23.0797C5.53621 23.8945 3.4075 24.7122 1.28162 25.5327C1.14067 25.6022 0.983079 25.6287 0.82802 25.609C0.67296 25.5894 0.527124 25.5244 0.408319 25.422C0.292855 25.3236 0.208523 25.1929 0.165711 25.0461C0.122898 24.8993 0.123496 24.7428 0.167413 24.5958C0.363473 23.6612 0.536862 22.7221 0.721584 21.7852L1.64736 18.0712L1.7689 17.5829C1.82779 17.4446 1.90977 17.3175 2.01122 17.2072L9.54875 8.47048C9.6968 8.29989 9.85812 8.13874 9.98674 7.95579C10.1154 7.77283 10.2333 7.79782 10.3819 7.93983C10.6284 8.17455 10.8827 8.40394 11.1489 8.61524C11.3368 8.76327 11.3394 8.86965 11.1784 9.05476C9.76689 10.6752 8.36542 12.3045 6.96106 13.9315C5.788 15.2899 4.62047 16.6545 3.43738 18.0041C3.22162 18.245 3.18466 18.5349 3.10949 18.8137C2.89367 19.7035 2.70701 20.599 2.49605 21.4897C2.46567 21.5768 2.46463 21.6716 2.49306 21.7591C2.52148 21.8465 2.57776 21.9218 2.65312 21.9731C2.95629 22.219 3.24424 22.4824 3.53057 22.7455C3.56959 22.7882 3.62101 22.8171 3.67746 22.8283C3.7339 22.8394 3.79246 22.8321 3.84476 22.8075C4.86256 22.4128 5.88179 22.0224 6.9024 21.6362C7.0192 21.5858 7.12099 21.5052 7.19751 21.4024C9.76197 18.4315 12.3259 15.4605 14.8893 12.4895C15.1533 12.1829 15.152 12.181 15.4619 12.4521C15.7032 12.6705 15.9381 12.8875 16.1885 13.0854C16.3504 13.2027 16.3433 13.2816 16.2169 13.4274Z"
                                        fill="#1171A5" />
                                    <path
                                        d="M1.77529 17.5806L1.65375 18.0689C1.67741 17.9489 1.70951 17.8288 1.73641 17.7095C1.74628 17.6656 1.75929 17.6226 1.77529 17.5806Z"
                                        fill="#1171A5" />
                                    <path
                                        d="M16.1852 2.86519C16.5664 2.94745 16.9206 3.12528 17.2155 3.38251C18.046 4.11998 18.8872 4.84591 19.7092 5.59197C20.7185 6.50641 20.778 8.10781 19.8579 9.21558C19.372 9.80278 19.3752 9.8034 18.8093 9.29398C17.0242 7.70917 15.2376 6.12641 13.4495 4.54557C13.1628 4.29269 13.1638 4.28777 13.4168 3.99444C14.2131 3.03644 15.1069 2.65941 16.1852 2.86519Z"
                                        fill="#1171A5" />
                                    <path
                                        d="M5.73998 20.4011C5.166 20.2487 4.84471 19.9838 4.65623 19.5659C4.59727 19.4521 4.57589 19.3221 4.59526 19.1947C4.61462 19.0673 4.67372 18.9493 4.76384 18.858C7.27971 15.9515 9.7911 13.0391 12.2981 10.1207C12.4925 9.89433 12.6075 9.87426 12.8099 10.0849C13.1226 10.3941 13.4507 10.6867 13.793 10.9618C13.9653 11.1033 13.9601 11.198 13.8182 11.3629C12.4284 12.9615 11.0419 14.5664 9.65857 16.1776C8.52449 17.4919 7.39116 18.8052 6.25861 20.1175C6.08464 20.3257 5.88866 20.4407 5.73998 20.4011Z"
                                        fill="#1171A5" />
                                    <path
                                        d="M18.313 10.9838C18.2816 11.0237 18.2486 11.0719 18.2094 11.1171C17.9881 11.3859 17.7432 11.6467 17.5226 11.9208C17.3975 12.0771 17.3052 12.0589 17.1679 11.9362C15.4801 10.4378 13.7898 8.94112 12.0969 7.44621C11.8349 7.21355 11.5771 6.97657 11.3086 6.75117C11.1803 6.64221 11.179 6.55486 11.2959 6.43961C11.534 6.1792 11.7712 5.91519 11.9876 5.63685C12.1234 5.46042 12.2189 5.46221 12.3805 5.60677C13.5488 6.65332 14.7242 7.68935 15.8958 8.728L18.1663 10.7381C18.2392 10.8036 18.3357 10.8517 18.313 10.9838Z"
                                        fill="#1171A5" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_318_1003">
                                        <rect width="16.6794" height="25.2882" fill="white"
                                            transform="translate(4.8916 0.638428) rotate(11.154)" />
                                    </clipPath>
                                </defs>
                            </svg>

                            <span class="btn-title ml-2">modifier-profil-medical</span>
                        </button>

                    </div>

                </div>

            </div>

            <div class="col container-fluid mt-3 ">

                <div class="row px-3 py-3 justify-content-around align-items-center nav-links-bloc">

                    <div class="col-md-3">
                        <a href="{{route('parametre.index')}}" class="nav-link active-nav-link">Paramètres</a>
                    </div>

                    <div class="col-md-3">
                        <a href="{{route('allergie.index')}}" class="nav-link">allergies</a>
                    </div>

                    <div class="col-md-3">
                        <a href="{{route('antecedent.index')}}" class="nav-link">antécédents medicaux</a>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- fin second-section -->

    <!-- debut third-section -->
                @yield('sous')
    {{-- <div class="container-fluid col-lg-12 col-md-10">

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

                        <span class="file-name">Date de naissance</span>

                        <span class="file-value">02.04.1999</span>

                    </div>

                    <div class="col-md-12 d-flex justify-content-between align-items-center mb-3">

                        <span class="file-name">Sexe</span>

                        <span class="file-value">Masculin</span>

                    </div>

                    <div class="col-md-12 d-flex justify-content-between align-items-center mb-3">

                        <span class="file-name">Taille(cm)</span>

                        <span class="file-value">178</span>

                    </div>

                    <div class="col-md-12 d-flex justify-content-between align-items-center mb-3">

                        <span class="file-name">Poids(kg)</span>

                        <span class="file-value">70</span>

                    </div>

                    <div class="col-md-12 d-flex justify-content-between align-items-center">

                        <span class="file-name">Groupe sanguin</span>

                        <span class="file-value">B+</span>

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

                        <span class="file-name">Fréquence respiratoire</span>

                        <span class="file-value">50</span>

                    </div>

                    <div class="col-md-12 d-flex justify-content-between align-items-center mb-3">

                        <span class="file-name">Fréquence cardiaque(Bpm)</span>

                        <span class="file-value">61</span>

                    </div>

                    <div class="col-md-12 d-flex justify-content-between align-items-center mb-3">

                        <span class="file-name">Tension artérielle</span>

                        <span class="file-value">120</span>

                    </div>

                    <div class="col-md-12 d-flex justify-content-between align-items-center mb-3">

                        <span class="file-name">Température°C</span>

                        <span class="file-value">38</span>

                    </div>



                </div>


            </div>



        </div>

    </div> --}}

    <!-- fin third-section -->



</div> <!-- container-fluid -->
@endsection
