@extends('Personnels.layout')
@section('contenu')



    <div class="row justify-content-between mx-3">
        <div class="col-lg-6 col-md-8">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <p class="page-title mr-2">
                    Patients
                </p>

                <p class="mx-3">
                    <svg width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_288_756)">
                            <path
                                d="M11.0002 9.00228L1.53711 0.00134277L-0.00141223 1.46473L9.46164 10.4657L11.0002 9.00228Z"
                                fill="#505050" />
                            <path d="M1.54085 18.0003L11.0039 8.99939L9.46533 7.53594L0.00227176 16.5369L1.54085 18.0003Z"
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
                    {{ $patient->first()->user->name }}
                </p>
            </div>
        </div>


    </div>


    <!-- end page title -->


    <!-- debut second-section -->

    <div class="container col-lg-11 col-md-12 mb-5 py-3 px-auto">

        <div class="row py-3 second-section d-flex justify-content-center align-items-center flex-column">

            <div class="col container-fluid ">

                <div class="row  px-3 py-3 justify-content-between align-items-center">

                    <div class="user-profile-bloc col-md-4 d-flex justify-content-center align-items-center">

                        <div class="patientpic-bloc mr-3">
                            <img src="" alt="">
                        </div>

                        <div class="patientsnameandmail">

                            <h3 class="patient-name">
                                {{ $patient->first()->user->name }}
                            </h3>
                            <h4 class="patient-mail">
                                {{ $patient->first()->user->email }}
                            </h4>

                        </div>

                    </div>

                    <div class="col-md-3 bloc-profil-medical">

                        <a class="profil-medical " href="{{ route('personnel.patient.voirPatient', ['id'=>$patient->first()->id]) }}">
                            <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_871_147)">
                                    <path
                                        d="M24.9115 9.63113C24.9299 9.52173 24.9173 9.40964 24.8751 9.30646C24.8255 8.95303 24.6393 8.6302 24.3533 8.40159C24.0672 8.17298 23.7019 8.05518 23.3296 8.0714C22.1174 8.0714 20.9052 8.0714 19.693 8.0714C19.4566 8.0714 19.3839 8.03081 19.3839 7.78728C19.3839 6.94651 19.3839 6.09996 19.3839 5.25919C19.3888 4.99188 19.3374 4.72636 19.2329 4.4784C19.1285 4.23044 18.973 4.00507 18.7756 3.81575C18.5783 3.62643 18.3432 3.47701 18.0843 3.37634C17.8254 3.27567 17.548 3.22582 17.2686 3.22975H14.6806C14.1229 3.22975 14.1229 3.22973 14.1169 2.70208C14.1284 2.59758 14.1154 2.49192 14.0786 2.39291C14.0418 2.29389 13.9822 2.20405 13.9042 2.13002C13.8263 2.056 13.7319 1.99971 13.6282 1.96525C13.5244 1.93078 13.4138 1.91904 13.3047 1.93092H12.2562C12.1168 1.93092 12.0622 1.8961 12.0198 1.75694C11.8995 1.25874 11.6063 0.814259 11.188 0.49597C10.7697 0.177681 10.2511 0.00439453 9.71665 0.00439453C9.18219 0.00439453 8.66349 0.177681 8.24521 0.49597C7.82692 0.814259 7.53371 1.25874 7.41345 1.75694C7.37709 1.8961 7.32252 1.95406 7.16493 1.94826C6.82552 1.94826 6.48614 1.94826 6.14673 1.94826C6.03483 1.9319 5.92045 1.94079 5.81276 1.97416C5.70506 2.00753 5.60699 2.06449 5.52635 2.1405C5.44572 2.21651 5.38473 2.30949 5.34827 2.41202C5.31181 2.51454 5.30093 2.62381 5.31638 2.7311C5.31031 2.82378 5.31031 2.91673 5.31638 3.00941C5.31638 3.20655 5.25574 3.2529 5.06179 3.2529C4.14052 3.2529 3.24346 3.2529 2.29795 3.2529C1.99145 3.22512 1.68234 3.26244 1.39265 3.36218C1.10297 3.46193 0.839859 3.62164 0.622158 3.8299C0.404457 4.03817 0.237515 4.28989 0.133255 4.56702C0.0289959 4.84416 -0.0099423 5.13987 0.0190942 5.4331V22.7123C-0.00965798 23.0053 0.0292287 23.3007 0.133107 23.5776C0.236986 23.8545 0.403279 24.1062 0.620161 24.3148C0.837042 24.5233 1.09924 24.6838 1.38814 24.7846C1.67704 24.8855 1.98562 24.9243 2.29196 24.8983H9.94091C10.0682 24.8983 10.2015 24.8519 10.2742 25.0317C10.3872 25.336 10.6027 25.5958 10.8869 25.77C11.1711 25.9443 11.5078 26.0232 11.844 25.9943H23.3598C23.7264 26.0066 24.0849 25.8891 24.3666 25.6645C24.6484 25.4398 24.8338 25.1238 24.8872 24.7766C24.9314 24.6618 24.946 24.5384 24.9297 24.417L24.9115 9.63113ZM9.69239 1.29884C9.80126 1.28968 9.91094 1.30229 10.0144 1.33586C10.118 1.36943 10.213 1.42329 10.2936 1.49391C10.3742 1.56453 10.4385 1.65041 10.4826 1.74611C10.5266 1.8418 10.5494 1.9452 10.5494 2.04976C10.5494 2.15432 10.5266 2.25771 10.4826 2.35341C10.4385 2.44911 10.3742 2.53498 10.2936 2.6056C10.213 2.67622 10.118 2.73008 10.0144 2.76366C9.91094 2.79723 9.80126 2.80984 9.69239 2.80068C9.48755 2.80077 9.29071 2.72451 9.14363 2.58812C8.99654 2.45173 8.91073 2.26594 8.90443 2.07007C8.90283 1.96984 8.922 1.8703 8.96081 1.77718C8.99961 1.68406 9.05729 1.59915 9.13053 1.52746C9.20378 1.45577 9.29113 1.39867 9.38756 1.35943C9.48399 1.32019 9.5876 1.29959 9.69239 1.29884ZM10.153 9.71232C10.153 14.2428 10.153 18.7694 10.153 23.2922C10.153 23.5357 10.1045 23.6169 9.83178 23.6169C7.31647 23.6169 4.8072 23.6169 2.29795 23.6169C1.64337 23.6169 1.35248 23.3444 1.35248 22.7239V5.44471C1.35248 4.78369 1.61307 4.54019 2.30402 4.54019C3.21317 4.54019 4.12232 4.54019 5.03752 4.54019C5.23754 4.54019 5.31636 4.58654 5.29818 4.78949C5.28605 4.93615 5.28605 5.08351 5.29818 5.23017C5.29206 5.32562 5.30706 5.42125 5.34227 5.51075C5.37749 5.60024 5.43213 5.6816 5.50253 5.74949C5.57293 5.81738 5.65749 5.8703 5.75075 5.90471C5.84402 5.93913 5.94385 5.95425 6.04367 5.94916H13.2017C13.8502 5.94916 14.0987 5.71725 14.0987 5.09682C14.0987 4.47639 14.0987 4.5518 14.7048 4.5518H17.2383C17.35 4.53519 17.4641 4.54391 17.5717 4.57728C17.6792 4.61065 17.777 4.66773 17.8572 4.7439C17.9375 4.82008 17.9978 4.91317 18.0335 5.01577C18.0691 5.11837 18.0791 5.22761 18.0626 5.33457C18.0626 6.16954 18.0626 7.00448 18.0626 7.83945C18.0626 8.05979 17.9838 8.08881 17.7777 8.08881H11.8986C11.6661 8.05847 11.4295 8.07911 11.2066 8.14926C10.9837 8.21941 10.7805 8.33722 10.6123 8.49368C10.444 8.65014 10.3153 8.8412 10.2357 9.05235C10.1562 9.2635 10.1279 9.48916 10.153 9.71232ZM12.5047 13.0058C12.5047 12.8435 12.5592 12.8029 12.7229 12.8087C13.1835 12.8087 13.6502 12.8087 14.1169 12.8087C14.2987 12.8087 14.3472 12.7623 14.3411 12.5942C14.3411 12.1477 14.3411 11.7012 14.3411 11.2547C14.3411 11.0982 14.3897 11.0518 14.5594 11.0576C15.0139 11.0576 15.4685 11.0576 15.9231 11.0576C16.0989 11.0576 16.1534 11.0982 16.1534 11.2721C16.1534 11.7186 16.1534 12.1592 16.1534 12.6057C16.1534 12.7623 16.1958 12.8145 16.3655 12.8087C16.8383 12.8087 17.311 12.8087 17.7898 12.8087C17.9353 12.8087 17.9898 12.8435 17.9838 12.9942C17.9777 13.145 17.9838 13.4581 17.9838 13.69C17.9838 13.9219 17.9838 14.1307 17.9838 14.3568C17.9838 14.583 17.9353 14.5424 17.7838 14.5424C17.3231 14.5424 16.8564 14.5424 16.3897 14.5424C16.1958 14.5424 16.1473 14.6004 16.1534 14.7801C16.1534 15.215 16.1534 15.6499 16.1534 16.0847C16.1534 16.2587 16.0928 16.2993 15.917 16.2993C15.4645 16.2993 15.0099 16.2993 14.5533 16.2993C14.3897 16.2993 14.3411 16.2529 14.3411 16.0964C14.3411 15.6383 14.3411 15.186 14.3411 14.7337C14.3411 14.583 14.2926 14.5424 14.1411 14.5424C13.6684 14.5424 13.1956 14.5424 12.7168 14.5424C12.5532 14.5424 12.4986 14.5018 12.5047 14.3395C12.5168 13.893 12.5168 13.4349 12.5047 13.0058ZM22.2022 22.9965C22.1357 23.0023 22.0687 23.0023 22.0022 22.9965H13.0199C12.9436 23.008 12.8658 23.008 12.7895 22.9965C12.7028 22.9809 12.6253 22.9347 12.5725 22.867C12.5198 22.7993 12.4956 22.7151 12.5047 22.6312C12.5026 22.546 12.5336 22.4633 12.5919 22.3989C12.6502 22.3346 12.7315 22.2933 12.8199 22.2833C12.9066 22.2774 12.9937 22.2774 13.0804 22.2833H21.9537C22.0405 22.2775 22.1276 22.2775 22.2144 22.2833C22.3066 22.2944 22.3914 22.3374 22.4528 22.4042C22.5143 22.4709 22.5482 22.5567 22.5482 22.6457C22.5482 22.7346 22.5143 22.8205 22.4528 22.8872C22.3914 22.9539 22.3066 22.9969 22.2144 23.0081L22.2022 22.9965ZM21.9719 20.7641H13.0804C12.994 20.7759 12.9063 20.7759 12.8199 20.7641C12.7266 20.7539 12.6411 20.7095 12.5812 20.6404C12.5213 20.5712 12.4917 20.4825 12.4986 20.393C12.498 20.3073 12.5304 20.2244 12.5897 20.1603C12.649 20.0961 12.7309 20.0551 12.8199 20.0451C12.9147 20.0392 13.0099 20.0392 13.1047 20.0451H21.9719C22.3538 20.0451 22.5356 20.1669 22.5356 20.4162C22.5356 20.6655 22.3598 20.7641 21.9841 20.7641H21.9719ZM22.2568 18.5027C22.1521 18.5146 22.0463 18.5146 21.9416 18.5027H13.0744C12.9977 18.5086 12.9207 18.5086 12.8441 18.5027C12.7454 18.4953 12.6538 18.4509 12.5891 18.3793C12.5244 18.3076 12.4919 18.2144 12.4986 18.12C12.4985 18.0307 12.5343 17.9447 12.5986 17.88C12.6629 17.8152 12.7508 17.7766 12.8441 17.7721C12.9207 17.7664 12.9977 17.7664 13.0744 17.7721H21.9719C22.0683 17.7576 22.1665 17.7576 22.2628 17.7721C22.3433 17.7921 22.4146 17.8372 22.4655 17.9001C22.5164 17.9631 22.5439 18.0404 22.5439 18.12C22.5439 18.1996 22.5164 18.2769 22.4655 18.3399C22.4146 18.4029 22.3433 18.4479 22.2628 18.4679L22.2568 18.5027ZM22.087 16.0732H19.7112C19.4324 16.0732 19.2627 15.9282 19.2627 15.7079C19.2627 15.4876 19.4324 15.3426 19.7112 15.3426H22.087C22.3719 15.3426 22.5356 15.4876 22.5356 15.7079C22.5356 15.9282 22.384 16.0732 22.0992 16.0732H22.087ZM22.087 14.0438H19.7112C19.4324 14.0438 19.2627 13.893 19.2627 13.6785C19.263 13.6247 19.2753 13.5717 19.2988 13.5229C19.3223 13.4741 19.3564 13.4307 19.3989 13.3956C19.4414 13.3604 19.4912 13.3343 19.5451 13.3191C19.599 13.3039 19.6556 13.2999 19.7112 13.3074H22.087C22.3719 13.3074 22.5356 13.4523 22.5356 13.6727C22.5356 13.893 22.384 14.0148 22.0992 14.0438H22.087ZM22.0507 11.8055H19.7293C19.4323 11.8055 19.2566 11.6548 19.2627 11.4287C19.2687 11.2026 19.4324 11.0692 19.7173 11.0634H22.0688C22.3719 11.0634 22.5416 11.2142 22.5356 11.4403C22.5295 11.6664 22.372 11.8055 22.0629 11.8055H22.0507Z"
                                        fill="#1171A5" />
                                    <path
                                        d="M3.9035 19.0883C4.03725 19.0931 4.16457 19.1446 4.26115 19.2333C4.46116 19.3957 4.66723 19.5464 4.86724 19.7203C5.06726 19.8943 5.09149 19.8537 5.23695 19.7203C5.77638 19.2043 6.33397 18.6998 6.88552 18.1954C6.97687 18.1045 7.09667 18.0446 7.22682 18.0247C7.35697 18.0048 7.49035 18.0261 7.60674 18.0852C7.71631 18.1362 7.80432 18.2215 7.85615 18.327C7.90798 18.4325 7.92055 18.5518 7.89166 18.6651C7.86805 18.8037 7.79261 18.9293 7.67947 19.0188L5.5642 20.967C5.5122 21.0301 5.44711 21.0822 5.37294 21.12C5.29878 21.1577 5.21715 21.1804 5.13337 21.1864C5.04959 21.1924 4.96547 21.1816 4.88626 21.1549C4.80704 21.1281 4.73449 21.0858 4.67325 21.0308C4.26717 20.7119 3.86714 20.393 3.46106 20.0625C3.37289 19.9951 3.31035 19.9018 3.28297 19.797C3.2556 19.6922 3.26491 19.5818 3.30953 19.4827C3.34344 19.3602 3.42184 19.2532 3.53068 19.1809C3.63951 19.1087 3.77167 19.0759 3.9035 19.0883Z"
                                        fill="#1171A5" />
                                    <path
                                        d="M5.09195 11.4286C5.00405 11.4316 4.9164 11.4177 4.83418 11.3879C4.75196 11.358 4.6768 11.3127 4.61311 11.2547L3.5221 10.3733C3.45779 10.3317 3.40308 10.278 3.36126 10.2154C3.31943 10.1528 3.2914 10.0827 3.27891 10.0094C3.26642 9.93611 3.26971 9.86118 3.2886 9.78914C3.30749 9.7171 3.3416 9.64951 3.38878 9.59053C3.44009 9.53224 3.50294 9.48423 3.57367 9.44918C3.6444 9.41413 3.72166 9.39272 3.80103 9.38625C3.8804 9.37979 3.96033 9.38834 4.03623 9.41145C4.11214 9.43456 4.18253 9.47179 4.2434 9.52095C4.46712 9.68176 4.68155 9.85404 4.88582 10.037C5.01916 10.1588 5.09798 10.1356 5.21314 10.037C5.72832 9.54995 6.2556 9.06868 6.77684 8.58742C6.8621 8.49843 6.96251 8.42392 7.07382 8.36707C7.19982 8.31565 7.34031 8.30656 7.47239 8.34131C7.60447 8.37606 7.72039 8.45257 7.80119 8.5584C7.87876 8.66605 7.91181 8.79747 7.89389 8.9271C7.87597 9.05673 7.80835 9.17539 7.70419 9.26005L5.52832 11.2721C5.47123 11.3261 5.4028 11.368 5.32759 11.395C5.25239 11.4219 5.17211 11.4335 5.09195 11.4286Z"
                                        fill="#1171A5" />
                                    <path
                                        d="M5.10256 16.282C4.93177 16.289 4.76476 16.2329 4.63593 16.1254L3.50253 15.2093C3.43949 15.1661 3.38653 15.1108 3.34708 15.0469C3.30764 14.983 3.28252 14.912 3.27339 14.8383C3.26427 14.7647 3.27137 14.69 3.29411 14.6191C3.31685 14.5482 3.35479 14.4825 3.40553 14.4264C3.51026 14.3155 3.65572 14.2476 3.81157 14.2367C3.96742 14.2259 4.1216 14.2731 4.24195 14.3685C4.46015 14.5366 4.6783 14.7048 4.88438 14.8903C5.09045 15.0759 5.09047 14.9889 5.21169 14.8903C5.69657 14.4265 6.1996 13.9742 6.69053 13.5161L6.90273 13.3248C7.01574 13.2203 7.16675 13.1619 7.32393 13.1619C7.48112 13.1619 7.6322 13.2203 7.74521 13.3248C7.79725 13.3795 7.83703 13.4438 7.86226 13.5137C7.88749 13.5836 7.8976 13.6577 7.89193 13.7315C7.88626 13.8053 7.86499 13.8772 7.82933 13.9429C7.79368 14.0085 7.74439 14.0665 7.68454 14.1134C7.03602 14.6932 6.37538 15.3252 5.72079 15.9283L5.49047 16.1428C5.38227 16.2313 5.24494 16.2806 5.10256 16.282Z"
                                        fill="#1171A5" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_871_147">
                                        <rect width="24.9167" height="26" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span class="btn-title ml-2">profil-medical</span>
                        </a>

                    </div>

                </div>

            </div>

            <div class="col container-fluid mt-3 px-3 ">

                <div class="row px-3 py-3 justify-content-between align-items-center profile-infos-bloc">

                    <div class="col-md-2  user-infos-grp">

                        <h4 class="info-title">Date Naiss.</h4>


                        <h5 class="info-value">{{ $patient->first()->naissance }}</h5>

                    </div>

                    <div class="col-md-2 user-infos-grp">

                        <h4 class="info-title">Matricule</h4>
                        <h5 class="info-value">{{ $patient->first()->user->identifiant }}</h5>

                    </div>

                    <div class="col-md-2 user-infos-grp">

                        <h4 class="info-title">Proféssion</h4>
                        <h5 class="info-value">{{ $patient->first()->profession }}</h5>

                    </div>

                    <div class="col-md-2 user-infos-grp">

                        <h4 class="info-title">Contacts</h4>
                        <h5 class="info-value">{{ $patient->first()->user->telephones->last()->numero }}</h5>

                    </div>

                    <div class="col-md-2 user-infos-grp">

                        <h4 class="info-title">Genre</h4>
                        <h5 class="info-value">{{ $patient->first()->sexe }}</h5>

                    </div>

                    <div class="col-md-2 user-infos-grp">

                        <h4 class="info-title">Localisation</h4>
                        <h5 class="info-value">{{ $patient->first()->localisation }}</h5>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- fin second-section -->

    <!-- debut third-section -->

    <div class="container-fluid col-lg-12 col-md-10">

        <div class="row third-section d-flex justify-content-between align-items-center">

            <div class="col-lg-4 col-md-4 col-sm-12 container p-3 conteneur-documents">

                <div class="row  px-3 py-3 justify-content-between align-items-center">

                    <div class="col-md-12 d-flex justify-content-between align-items-center en-tete-documents">

                        <h2>Documents</h2>

                        <form action="{{ route('personnel.historiqueDossier', ['id'=>$patient->first()->id]) }}" class="mb-1" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="file" id="document" style="display: none;" name="document">
                            <label for="document">
                                <svg width="18" height="22" viewBox="0 0 16 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_359_550)">
                                        <path
                                            d="M11.4963 9.53036V10.4708C11.4963 10.5104 11.4808 10.5485 11.4533 10.5766C11.4258 10.6046 11.3885 10.6204 11.3496 10.6204H8.75676V13.2666C8.75676 13.2862 8.75298 13.3057 8.74561 13.3238C8.73825 13.342 8.72743 13.3585 8.71382 13.3723C8.7002 13.3862 8.68408 13.3973 8.66629 13.4048C8.6485 13.4123 8.62945 13.4162 8.61019 13.4162H7.69469C7.67536 13.4163 7.65621 13.4125 7.63831 13.4051C7.62041 13.3976 7.60411 13.3866 7.59039 13.3727C7.57667 13.3588 7.56578 13.3423 7.55835 13.324C7.55092 13.3058 7.5471 13.2863 7.5471 13.2666V10.6204H4.95423C4.9349 10.6205 4.91575 10.6167 4.89784 10.6093C4.87994 10.6018 4.86365 10.5908 4.84993 10.5769C4.83621 10.563 4.82532 10.5465 4.81789 10.5283C4.81046 10.51 4.80664 10.4905 4.80664 10.4708V9.53036C4.80664 9.51062 4.81046 9.49109 4.81789 9.47287C4.82532 9.45465 4.83621 9.43811 4.84993 9.42421C4.86365 9.4103 4.87994 9.3993 4.89784 9.39184C4.91575 9.38438 4.9349 9.38061 4.95423 9.38075H7.5471V6.73457C7.5471 6.71484 7.55092 6.69531 7.55835 6.67709C7.56578 6.65887 7.57667 6.64233 7.59039 6.62842C7.60411 6.61452 7.62041 6.60352 7.63831 6.59606C7.65621 6.5886 7.67536 6.58483 7.69469 6.58496H8.61516C8.65404 6.58496 8.69134 6.60073 8.71883 6.62878C8.74632 6.65684 8.76178 6.69489 8.76178 6.73457V9.38075H11.3546C11.3927 9.38207 11.4286 9.39842 11.4551 9.42633C11.4815 9.45425 11.4963 9.49154 11.4963 9.53036Z"
                                            fill="#1171A5" />
                                        <path
                                            d="M16.0004 18.4296C16.0004 19.0667 15.7691 19.5633 15.1956 19.8402C14.982 19.9405 14.7497 19.9926 14.5145 19.9928C10.1751 20.0017 5.83569 20.0037 1.49629 19.9989C0.606741 19.9989 0.00542338 19.3812 0.00542338 18.4723C0.00542338 13.64 0.00373206 8.80766 0.00040787 3.97533C-0.00283112 3.88102 0.0132507 3.78706 0.0475926 3.69944C0.0819344 3.61182 0.133782 3.53247 0.199859 3.46646C1.2636 2.38084 2.32934 1.29523 3.39707 0.209623C3.49466 0.12823 3.59951 0.056336 3.71023 -0.00512245H3.97848C4.33849 0.160772 4.41426 0.454907 4.40529 0.836567C4.38335 1.81972 4.39835 2.8039 4.39735 3.78807C4.39735 4.30916 4.20584 4.5005 3.69026 4.5005C2.93633 4.5005 2.18344 4.5005 1.43051 4.5005H1.14725C1.14725 4.59108 1.13732 4.65927 1.13732 4.72848C1.13732 9.28804 1.13732 13.8473 1.13732 18.4062C1.13732 18.741 1.22605 18.8306 1.56013 18.8306H14.4447C14.7748 18.8306 14.8626 18.739 14.8626 18.399V1.59581C14.8626 1.24672 14.7778 1.16123 14.4297 1.16123H6.57934C6.47119 1.16642 6.36279 1.15925 6.2562 1.13986C6.15032 1.11197 6.05536 1.05167 5.98405 0.967067C5.91274 0.882463 5.86849 0.77761 5.8573 0.666597C5.83877 0.549939 5.85662 0.430285 5.90833 0.324544C5.96005 0.218803 6.04303 0.132317 6.14552 0.0773096C6.20137 0.0477946 6.25721 0.0203186 6.31405 -0.00817871H14.7C14.9813 0.069171 15.2614 0.143467 15.4908 0.347018C15.6371 0.473399 15.7567 0.628764 15.8424 0.803706C15.9281 0.978648 15.9781 1.16953 15.9894 1.36478C15.9954 1.43602 15.9894 1.50828 15.9894 1.57952C15.9954 7.19892 15.9991 12.8156 16.0004 18.4296Z"
                                            fill="#1171A5" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_359_550">
                                            <rect width="16" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </label>
                            <button class="ajout-documents">
                                <span class="btn-title ">ajouter fichiers</span>
                            </button>

                        </form>

                    </div>

                </div>

                <div class="row  px-3 py-3 justify-content-between align-items-center flex-column">

                    <div class="col-md-11 d-flex justify-content-between align-items-center mb-3">

                        <svg width="19" height="22" viewBox="0 0 19 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_359_554)">
                                <path
                                    d="M19.0005 20.2726C19.0005 20.9734 18.7258 21.5198 18.0448 21.8243C17.7911 21.9346 17.5152 21.9919 17.236 21.9922C12.0829 22.0019 6.92989 22.0041 1.77685 21.9989C0.720504 21.9989 0.00644026 21.3194 0.00644026 20.3196C0.00644026 15.0041 0.00443182 9.68851 0.000484346 4.37295C-0.00336195 4.26921 0.0157352 4.16585 0.0565162 4.06947C0.0972971 3.97309 0.158866 3.8858 0.237333 3.81319C1.50053 2.61901 2.76609 1.42484 4.03402 0.230671C4.14991 0.141139 4.27442 0.062055 4.40589 -0.00554925H4.72445C5.15196 0.176935 5.24194 0.500483 5.23128 0.920309C5.20522 2.00178 5.22304 3.08437 5.22185 4.16696C5.22185 4.74017 4.99444 4.95064 4.38218 4.95064C3.4869 4.95064 2.59283 4.95064 1.69873 4.95064H1.36236C1.36236 5.05028 1.35057 5.12528 1.35057 5.20141C1.35057 10.2169 1.35057 15.2321 1.35057 20.2469C1.35057 20.6152 1.45594 20.7137 1.85266 20.7137H17.1531C17.5451 20.7137 17.6493 20.6129 17.6493 20.239V1.75548C17.6493 1.37148 17.5486 1.27743 17.1353 1.27743H7.81296C7.68454 1.28315 7.55581 1.27526 7.42924 1.25393C7.30351 1.22325 7.19074 1.15692 7.10606 1.06386C7.02138 0.970795 6.96884 0.855456 6.95554 0.733342C6.93353 0.605018 6.95473 0.473399 7.01614 0.357084C7.07756 0.240768 7.1761 0.145634 7.29781 0.0851261C7.36412 0.0526595 7.43043 0.0224359 7.49794 -0.00891113H17.4563C17.7902 0.0761736 18.123 0.157899 18.3953 0.381806C18.569 0.520824 18.7111 0.691725 18.8129 0.884162C18.9147 1.0766 18.974 1.28657 18.9875 1.50134C18.9946 1.57971 18.9875 1.65919 18.9875 1.73756C18.9946 7.91889 18.9989 14.0972 19.0005 20.2726Z"
                                    fill="#5C5C5C" />
                                <rect x="5.06641" y="7.33337" width="8.86667" height="1.22222" rx="0.611111"
                                    fill="#5C5C5C" />
                                <rect x="5.06641" y="11" width="7.6" height="1.22222" rx="0.611111"
                                    fill="#5C5C5C" />
                                <rect x="5.06641" y="14.6666" width="6.33333" height="1.22222" rx="0.611111"
                                    fill="#5C5C5C" />
                            </g>
                            <defs>
                                <clipPath id="clip0_359_554">
                                    <rect width="19" height="22" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                        <span class="file-name">Analyse urine</span>

                        <button class="more-options-btn">
                            <svg width="20" height="8" viewBox="0 0 16 4" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2" cy="2" r="2" fill="#8A8A8A" />
                                <circle cx="8" cy="2" r="2" fill="#8A8A8A" />
                                <circle cx="14" cy="2" r="2" fill="#8A8A8A" />
                            </svg>

                        </button>

                    </div>

                    <div class="col-md-11 d-flex justify-content-between align-items-center mb-3">

                        <svg width="19" height="22" viewBox="0 0 19 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_359_554)">
                                <path
                                    d="M19.0005 20.2726C19.0005 20.9734 18.7258 21.5198 18.0448 21.8243C17.7911 21.9346 17.5152 21.9919 17.236 21.9922C12.0829 22.0019 6.92989 22.0041 1.77685 21.9989C0.720504 21.9989 0.00644026 21.3194 0.00644026 20.3196C0.00644026 15.0041 0.00443182 9.68851 0.000484346 4.37295C-0.00336195 4.26921 0.0157352 4.16585 0.0565162 4.06947C0.0972971 3.97309 0.158866 3.8858 0.237333 3.81319C1.50053 2.61901 2.76609 1.42484 4.03402 0.230671C4.14991 0.141139 4.27442 0.062055 4.40589 -0.00554925H4.72445C5.15196 0.176935 5.24194 0.500483 5.23128 0.920309C5.20522 2.00178 5.22304 3.08437 5.22185 4.16696C5.22185 4.74017 4.99444 4.95064 4.38218 4.95064C3.4869 4.95064 2.59283 4.95064 1.69873 4.95064H1.36236C1.36236 5.05028 1.35057 5.12528 1.35057 5.20141C1.35057 10.2169 1.35057 15.2321 1.35057 20.2469C1.35057 20.6152 1.45594 20.7137 1.85266 20.7137H17.1531C17.5451 20.7137 17.6493 20.6129 17.6493 20.239V1.75548C17.6493 1.37148 17.5486 1.27743 17.1353 1.27743H7.81296C7.68454 1.28315 7.55581 1.27526 7.42924 1.25393C7.30351 1.22325 7.19074 1.15692 7.10606 1.06386C7.02138 0.970795 6.96884 0.855456 6.95554 0.733342C6.93353 0.605018 6.95473 0.473399 7.01614 0.357084C7.07756 0.240768 7.1761 0.145634 7.29781 0.0851261C7.36412 0.0526595 7.43043 0.0224359 7.49794 -0.00891113H17.4563C17.7902 0.0761736 18.123 0.157899 18.3953 0.381806C18.569 0.520824 18.7111 0.691725 18.8129 0.884162C18.9147 1.0766 18.974 1.28657 18.9875 1.50134C18.9946 1.57971 18.9875 1.65919 18.9875 1.73756C18.9946 7.91889 18.9989 14.0972 19.0005 20.2726Z"
                                    fill="#5C5C5C" />
                                <rect x="5.06641" y="7.33337" width="8.86667" height="1.22222" rx="0.611111"
                                    fill="#5C5C5C" />
                                <rect x="5.06641" y="11" width="7.6" height="1.22222" rx="0.611111"
                                    fill="#5C5C5C" />
                                <rect x="5.06641" y="14.6666" width="6.33333" height="1.22222" rx="0.611111"
                                    fill="#5C5C5C" />
                            </g>
                            <defs>
                                <clipPath id="clip0_359_554">
                                    <rect width="19" height="22" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                        <span class="file-name">Analyse urine</span>

                        <button class="more-options-btn">
                            <svg width="20" height="8" viewBox="0 0 16 4" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2" cy="2" r="2" fill="#8A8A8A" />
                                <circle cx="8" cy="2" r="2" fill="#8A8A8A" />
                                <circle cx="14" cy="2" r="2" fill="#8A8A8A" />
                            </svg>

                        </button>

                    </div>

                    <div class="col-md-11 d-flex justify-content-between align-items-center">

                        <svg width="19" height="22" viewBox="0 0 19 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_359_554)">
                                <path
                                    d="M19.0005 20.2726C19.0005 20.9734 18.7258 21.5198 18.0448 21.8243C17.7911 21.9346 17.5152 21.9919 17.236 21.9922C12.0829 22.0019 6.92989 22.0041 1.77685 21.9989C0.720504 21.9989 0.00644026 21.3194 0.00644026 20.3196C0.00644026 15.0041 0.00443182 9.68851 0.000484346 4.37295C-0.00336195 4.26921 0.0157352 4.16585 0.0565162 4.06947C0.0972971 3.97309 0.158866 3.8858 0.237333 3.81319C1.50053 2.61901 2.76609 1.42484 4.03402 0.230671C4.14991 0.141139 4.27442 0.062055 4.40589 -0.00554925H4.72445C5.15196 0.176935 5.24194 0.500483 5.23128 0.920309C5.20522 2.00178 5.22304 3.08437 5.22185 4.16696C5.22185 4.74017 4.99444 4.95064 4.38218 4.95064C3.4869 4.95064 2.59283 4.95064 1.69873 4.95064H1.36236C1.36236 5.05028 1.35057 5.12528 1.35057 5.20141C1.35057 10.2169 1.35057 15.2321 1.35057 20.2469C1.35057 20.6152 1.45594 20.7137 1.85266 20.7137H17.1531C17.5451 20.7137 17.6493 20.6129 17.6493 20.239V1.75548C17.6493 1.37148 17.5486 1.27743 17.1353 1.27743H7.81296C7.68454 1.28315 7.55581 1.27526 7.42924 1.25393C7.30351 1.22325 7.19074 1.15692 7.10606 1.06386C7.02138 0.970795 6.96884 0.855456 6.95554 0.733342C6.93353 0.605018 6.95473 0.473399 7.01614 0.357084C7.07756 0.240768 7.1761 0.145634 7.29781 0.0851261C7.36412 0.0526595 7.43043 0.0224359 7.49794 -0.00891113H17.4563C17.7902 0.0761736 18.123 0.157899 18.3953 0.381806C18.569 0.520824 18.7111 0.691725 18.8129 0.884162C18.9147 1.0766 18.974 1.28657 18.9875 1.50134C18.9946 1.57971 18.9875 1.65919 18.9875 1.73756C18.9946 7.91889 18.9989 14.0972 19.0005 20.2726Z"
                                    fill="#5C5C5C" />
                                <rect x="5.06641" y="7.33337" width="8.86667" height="1.22222" rx="0.611111"
                                    fill="#5C5C5C" />
                                <rect x="5.06641" y="11" width="7.6" height="1.22222" rx="0.611111"
                                    fill="#5C5C5C" />
                                <rect x="5.06641" y="14.6666" width="6.33333" height="1.22222" rx="0.611111"
                                    fill="#5C5C5C" />
                            </g>
                            <defs>
                                <clipPath id="clip0_359_554">
                                    <rect width="19" height="22" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                        <span class="file-name">Analyse urine</span>

                        <button class="more-options-btn">
                            <svg width="20" height="8" viewBox="0 0 16 4" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2" cy="2" r="2" fill="#8A8A8A" />
                                <circle cx="8" cy="2" r="2" fill="#8A8A8A" />
                                <circle cx="14" cy="2" r="2" fill="#8A8A8A" />
                            </svg>

                        </button>

                    </div>

                </div>

                <div class="row  px-3 py-3 justify-content-center align-items-center ">

                    <a href="http://" class="voir-plus-link">voir tout</a>

                </div>

            </div>

            <div class="col-lg-5 col-md-5 col-sm-12 container p-3 conteneur-consultations">

                <div class="row  px-3 py-3 justify-content-between align-items-center">

                    <div class="col-md-12 d-flex justify-content-between align-items-center en-tete-consultations">

                        <h2>Consultations</h2>

                        <form action=" " class=" mb-1">

                            <svg width="19" height="22" viewBox="0 0 19 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_842_139)">
                                    <path
                                        d="M8.84755e-06 0.49526V21.5047C-0.000387128 21.5696 0.012512 21.634 0.0379983 21.694C0.0634846 21.7541 0.100987 21.8087 0.148446 21.8548C0.195906 21.9008 0.252331 21.9373 0.314485 21.9622C0.376639 21.9872 0.443277 22 0.510593 22H18.4862C18.6224 22 18.7532 21.9478 18.8495 21.8549C18.9458 21.7621 19 21.6361 19 21.5047V0.49526C18.9992 0.364144 18.9448 0.238615 18.8486 0.1459C18.7525 0.0531851 18.6222 0.000760116 18.4862 0H0.510593C0.374879 0.000765211 0.245011 0.0532826 0.149326 0.146079C0.0536422 0.238876 6.52688e-06 0.364409 8.84755e-06 0.49526ZM16.9933 20.5721H2.00656C1.93924 20.5721 1.8726 20.5593 1.81045 20.5344C1.74829 20.5095 1.69187 20.4729 1.64441 20.4269C1.59695 20.3809 1.55945 20.3263 1.53396 20.2662C1.50847 20.2061 1.49558 20.1418 1.49597 20.0769V1.92312C1.49558 1.85822 1.50847 1.79388 1.53396 1.73381C1.55945 1.67374 1.59695 1.61912 1.64441 1.57309C1.69187 1.52706 1.74829 1.49054 1.81045 1.46561C1.8726 1.44069 1.93924 1.42786 2.00656 1.42786H16.9933C17.1285 1.42938 17.2576 1.48223 17.3527 1.57495C17.4477 1.66766 17.501 1.79276 17.501 1.92312V20.0769C17.501 20.2072 17.4477 20.3323 17.3527 20.4251C17.2576 20.5178 17.1285 20.5706 16.9933 20.5721Z"
                                        fill="#1171A5" />
                                    <path d="M15.6288 13.236H3.78125V14.4205H15.6288V13.236Z" fill="#1171A5" />
                                    <path d="M15.629 9.74304H7.05273V10.9276H15.629V9.74304Z" fill="#1171A5" />
                                    <path d="M15.6302 5.02209H11.2324V5.97496H15.6302V5.02209Z" fill="#1171A5" />
                                    <path d="M12.9355 3.37702V7.61719H13.9238V3.37702H12.9355Z" fill="#1171A5" />
                                    <path d="M15.6288 16.7288H3.78125V17.9133H15.6288V16.7288Z" fill="#1171A5" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_842_139">
                                        <rect width="19" height="22" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>


                            <a class="ajout-documents"
                                href="{{ route('personnel.consultaition', ['id' => $patient->first()->id]) }}">
                                <span class="btn-title ">adresser consultation</span>
                            </a>

                        </form>

                    </div>

                </div>

                <div class="row  px-3 py-3 justify-content-between align-items-center flex-column">

                    <div class="col-md-12 consultations-info-bloc justify-content-between align-items-center mb-3 ">

                        @foreach ($patient->first()->consultations as $item)
                            <div class="row mb-2 justify-content-between align-items-center consultaion-elt">

                                <div class="col-md-2 consultations-infos-grp">
                                    <span class="consultations-info-title">Date</span>
                                    <span class="consultations-info-value">{{$item->created_at}}</span>
                                </div>

                                <div class="col-md-4 consultations-infos-grp">
                                    <span class="consultations-info-title">Nom du Consultant</span>
                                    <span class="consultations-info-value">Dr.{{$item->professionnel->nom}}</span>
                                </div>

                                <div class="col-md-4 consultations-infos-grp">
                                    <span class="consultations-info-title">Nom du Centre Hosp.</span>
                                    <span class="consultations-info-value">{{$item->hopital->name}}</span>
                                </div>
                                <div class="col-md-1 consultations-infos-grp">
                                    <a class="text-secondary text-center mr-2" href="{{ route('personnel.dashboard.Consultation.show', ['id'=>$item->id]) }}"><i
                                            class="fas fa-eye"></i></a>

                                </div>

                            </div>
                        @endforeach

                    </div>

                </div>

                <div class="row  px-3 py-3 justify-content-center align-items-center ">

                    <a href="http://" class="voir-plus-link">voir tout</a>

                </div>

            </div>

        </div>

    </div>

    <!-- fin third-section -->
@endsection
