<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    {{-- <link rel="shortcut icon" href="assets/images/favicon.ico"> --}}

    <!-- slick css -->
    <link href="{{ asset('assets/libs/slick-slider/slick/slick.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/vue admin-dashboard.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/vue centre hospitalier-profil personnel de santé.css') }}" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('assets/libs/slick-slider/slick/slick-theme.css') }}" rel="stylesheet" type="text/css" />

    <!-- jvectormap -->
    <link href="{{ asset('assets/libs/jqvmap/jqvmap.min.css') }}" rel="stylesheet" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/bootstrap-select-1.13.14/dist/css/bootstrap-select.css') }}" rel="stylesheet"
        type="text/css" />
    @livewireStyles

</head>

<body data-sidebar="dark" data-keep-enlarged="true" class="vertical-collpsed">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{ asset('assets/images/icone logo medi resume.png') }}" alt=""
                                    height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('assets/images/icone logo medi resume.png') }}" alt=""
                                    height="20">
                            </span>
                        </a>

                        <a href="" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{ asset('assets/images/icone logo medi resume.png') }}" alt=""
                                    height="50">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('assets/images/logo medi resume for dashbboard.png') }}"
                                    alt="" height="20">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="mdi mdi-backburger"></i>
                    </button>

                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ml-2">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-none d-lg-inline-block ml-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <i class="mdi mdi-fullscreen"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @auth
                                <img class="rounded-circle header-profile-user"
                                    src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="Header Avatar">
                                <span class="d-none d-sm-inline-block ml-1">{{Auth::user()->name}}</span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            @endauth
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a class="dropdown-item text-secondary" href="#"><i
                                    class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> Profile</a>
                            <a class="dropdown-item text-secondary" href="#"><i
                                    class="mdi mdi-account-settings font-size-16 align-middle mr-1"></i> Settings</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="{{route('Admin.dashboard')}}" class="waves-effect metis">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect metis" style="color: white">
                                <i class="fas fa-map-marked"></i>
                                <span>Localisation</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('pays.index') }}" class="metis" style="color: white"> <i
                                            class="fas fa-map-signs"></i>Pays</a></li>
                                <li><a href="{{ route('region.index') }}" class="metis" style="color: white"> <i
                                            class="fas fa-map-signs"></i>Regions</a></li>
                                <li><a href="{{ route('departement.index') }}" class="metis" style="color: white">
                                        <i class="fas fa-map-signs"></i>Departements</a></li>
                                <li><a href="{{ route('ville.index') }}" class="metis" style="color: white"> <i
                                            class="fas fa-map-signs"></i>Villes</a></li>
                                <li><a href="{{ route('quartier.index') }}" class="metis" style="color: white"> <i
                                            class="fas fa-map-signs"></i>quatiers</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect metis" style="color: white">
                                <i class="far fa-hospital"></i>
                                <span>Centre Hopitalier </span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('hopitals.index') }}"style="color: white" class="metis"> <i
                                            class=" fas fa-map-pin"></i>Centres</a></li>
                                <li><a href="{{ route('categorie.index') }}" class="metis" style="color: white"> <i
                                            class="fas fa-map-pin"></i>Categories</a></li>
                                <li><a href="{{ route('souscategorie.index') }}" class="metis"
                                        style="color: white"> <i class="fas fa-map-pin"></i>Sous-categories</a></li>
                                <li><a href="{{ route('groupespecialite.index') }}" class="metis"
                                        style="color: white"> <i class="fas fa-map-pin"></i>Groupe de specialites</a>
                                </li>
                                <li><a href="{{ route('specialite.index') }}" class="metis" style="color: white"z>
                                        <i class="fas fa-map-pin"></i>Specialites</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('personnels.index') }}" class="waves-effect metis"
                                style="color: white">
                                <svg width="21" height="25" viewBox="0 0 21 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_908_103)">
                                        <path
                                            d="M10.4206 24.9823C7.35638 24.9823 4.28922 24.9528 1.22503 24.9971C0.308473 24.9971 -0.0689148 24.7522 0.00896284 23.8169C0.110803 22.6071 -0.0659283 21.3856 0.149733 20.1788C0.23144 19.5526 0.487291 18.9607 0.889013 18.4687C1.29074 17.9766 1.82269 17.6035 2.42615 17.3906C3.57934 16.9627 4.77145 16.65 5.93662 16.2546C6.47278 16.0746 6.65548 16.4051 6.9011 16.7474C7.69785 17.8627 8.46166 19.0045 9.34527 20.049C9.85746 20.6568 9.88442 21.0374 9.30333 21.5921C8.98283 21.8872 8.21005 22.3209 8.74021 22.7989C9.33927 23.3448 9.66277 22.5039 9.98327 22.1439C11.49 20.5037 12.834 18.7253 13.997 16.8329C14.3504 16.2428 14.6949 16.0982 15.3418 16.3372C16.3573 16.706 17.4116 16.9657 18.433 17.3198C19.1037 17.5173 19.697 17.9125 20.1329 18.4521C20.5688 18.9917 20.8264 19.6499 20.8711 20.3382C20.994 21.6187 20.952 22.9111 21 24.2004C21.0269 24.9646 20.5237 24.9882 19.9576 24.9882C16.7786 24.9804 13.5996 24.9784 10.4206 24.9823Z"
                                            fill="white" />
                                        <path
                                            d="M16.4259 5.1398C15.2278 4.71787 14.4071 4.29596 13.82 3.16C12.4751 0.557612 8.49434 0.581212 7.14646 3.19245C6.5474 4.32251 5.74466 4.75328 4.56152 5.1398C4.56152 4.19268 4.52857 3.29572 4.56152 2.4017C4.59746 1.74668 5.07969 1.33065 5.63082 1.08575C7.14816 0.369107 8.80948 -0.00292969 10.4922 -0.00292969C12.175 -0.00292969 13.8362 0.369107 15.3536 1.08575C15.7045 1.22431 15.9996 1.47261 16.1933 1.79247C16.3871 2.11232 16.4688 2.48602 16.4259 2.85608C16.3899 3.59077 16.4259 4.32545 16.4259 5.1398Z"
                                            fill="white" />
                                        <path
                                            d="M13.5447 5.13103C13.5487 5.52762 13.473 5.92109 13.3223 6.28884C13.1715 6.65659 12.9484 6.99139 12.666 7.27403C12.3835 7.55666 12.0472 7.78157 11.6762 7.93585C11.3053 8.09012 10.9071 8.17073 10.5045 8.17304C9.69174 8.16758 8.91422 7.84552 8.34177 7.2772C7.76932 6.70887 7.44848 5.94048 7.44929 5.13987C7.44653 4.74352 7.52319 4.35053 7.67489 3.98342C7.82659 3.61631 8.05034 3.2823 8.33333 3.00052C8.61631 2.71875 8.95296 2.49474 9.32398 2.34137C9.69501 2.18799 10.0931 2.10826 10.4955 2.10671C10.8981 2.10513 11.2971 2.18241 11.6691 2.33409C12.0412 2.48577 12.3789 2.70881 12.6626 2.99024C12.9464 3.27166 13.1705 3.60585 13.3219 3.97337C13.4734 4.34089 13.5491 4.73441 13.5447 5.13103ZM10.5494 4.36978C10.4467 4.36544 10.3441 4.38133 10.2477 4.41653C10.1513 4.45173 10.063 4.50553 9.98794 4.57477C9.9129 4.64402 9.85266 4.72732 9.81072 4.8198C9.76877 4.91227 9.74599 5.01206 9.7437 5.11332C9.73237 5.20548 9.74075 5.29895 9.76838 5.3877C9.796 5.47646 9.84221 5.55852 9.90403 5.62859C9.96584 5.69866 10.0419 5.75516 10.1273 5.79448C10.2127 5.8338 10.3054 5.85505 10.3996 5.85685C10.5004 5.8811 10.6053 5.88286 10.7068 5.86196C10.8083 5.84107 10.9038 5.79806 10.9862 5.7361C11.0686 5.67414 11.136 5.59479 11.1832 5.50388C11.2305 5.41296 11.2565 5.31278 11.2593 5.21068C11.2982 4.72974 10.9987 4.47305 10.5494 4.36978Z"
                                            fill="white" />
                                        <path
                                            d="M5.83159 8.52113C6.24793 9.53906 4.89107 10.4065 5.80164 11.3832C6.47558 12.106 7.0267 12.941 7.69165 13.6757C8.03833 14.0402 8.46006 14.3274 8.9286 14.5182C9.39714 14.7091 9.90169 14.799 10.4084 14.7822C12.1607 14.8087 13.1551 13.7849 14.2484 12.5398C15.3416 11.2946 15.767 10.0879 14.8474 8.46802C16.4379 8.94601 16.8393 9.54201 16.6446 10.7989C16.1683 13.9472 12.1517 16.585 9.06952 15.7883C8.52312 15.6622 8.00714 15.4316 7.55088 15.1097C6.29747 14.1243 5.27561 12.8832 4.55559 11.4717C3.80976 10.079 4.29201 9.12894 5.83159 8.52113Z"
                                            fill="white" />
                                        <path
                                            d="M4.30379 8.35003C4.166 7.34684 4.14203 6.55609 4.97173 6.025C5.40605 5.74764 5.93021 5.2608 6.34656 5.43489C6.85876 5.66503 6.70302 6.46463 7.00255 6.96622C7.16429 7.23767 6.85875 7.30554 6.64009 7.35865C5.80962 7.55543 5.01946 7.89073 4.30379 8.35003Z"
                                            fill="white" />
                                        <path
                                            d="M16.6748 8.25275C16.1087 8.01376 15.6205 7.70987 15.0933 7.6066C14.1288 7.41481 13.9191 7.0991 14.2576 6.09297C14.5571 5.22551 14.8357 5.38187 15.4078 5.65332C16.4891 6.16376 17.0072 6.93386 16.6748 8.25275Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_908_103">
                                            <rect width="21" height="25" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span>Personnels de Sante</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.patient') }}" class="waves-effect metis" style="color: white">
                                <svg width="23" height="25" viewBox="0 0 23 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_358_453)">
                                        <path
                                            d="M22.0556 19.7332C21.8298 18.034 21.2038 16.4127 20.229 15.0028C19.2542 13.5928 17.9586 12.4345 16.4487 11.6231C15.8322 11.2617 15.1572 11.0119 14.5035 10.709C13.2865 12.8348 12.1226 14.9022 10.9162 17.044L7.51481 10.7143C3.31095 12.3937 0.722726 15.3008 0.0105661 19.7491C-0.0165345 20.0729 0.0740386 20.3956 0.265666 20.6579C1.79628 22.7838 3.98591 23.9052 6.43063 24.5004C7.37664 24.7289 8.3439 24.8512 9.30053 25.0319H12.8029C13.7595 24.8565 14.7268 24.7343 15.6674 24.5004C18.1441 23.9052 20.3018 22.7679 21.8324 20.6579C22.017 20.3872 22.0964 20.0584 22.0556 19.7332ZM18.649 19.037L17.1662 19.122C17.1343 19.6269 17.1024 20.0946 17.0705 20.6261H15.7631C15.7631 20.1637 15.7206 19.696 15.694 19.1327L14.174 19.0423V17.7827L15.6781 17.6871C15.7047 17.1981 15.7312 16.7358 15.7631 16.1884H17.0546C17.0918 16.6933 17.129 17.1609 17.1715 17.6711L18.649 17.7934V19.037Z"
                                            fill="#AADEFA" />
                                        <path
                                            d="M5.65475 5.28806C5.67714 3.86671 6.26188 2.51217 7.2809 1.52103C8.29992 0.529903 9.67018 -0.0170284 11.0916 2.07526e-05C11.7974 0.00695918 12.495 0.153031 13.1442 0.429888C13.7935 0.706745 14.3818 1.10895 14.8755 1.61347C15.3692 2.11798 15.7585 2.7149 16.0211 3.37006C16.2838 4.02522 16.4147 4.72576 16.4062 5.43157C16.3852 6.85577 15.8018 8.21384 14.7832 9.2095C13.7647 10.2052 12.3937 10.7576 10.9694 10.7462C9.541 10.7266 8.17886 10.1407 7.1823 9.11721C6.18573 8.09374 5.6363 6.71645 5.65475 5.28806Z"
                                            fill="#AADEFA" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_358_453">
                                            <rect width="22.0398" height="25" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span>Patients</span>
                            </a>
                        </li>
                        <li class="mt-5">
                            <a href="{{ route('logout') }}" class="waves-effect metis" style="color: white">
                                <i class="mdi mdi-logout"></i>
                                <span>Deconnexion</span>
                            </a>
                        </li>

                    </ul>


                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">





                    @yield('contenu')





                </div> <!-- container-fluid -->

            </div>
            <!-- End Page-content -->
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-tabs-custom rightbar-nav-tab nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link py-3 active" data-toggle="tab" href="#chat-tab" role="tab">
                        <i class="mdi mdi-message-text font-size-22"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-3" data-toggle="tab" href="#tasks-tab" role="tab">
                        <i class="mdi mdi-format-list-checkbox font-size-22"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-3" data-toggle="tab" href="#settings-tab" role="tab">
                        <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                        <i class="mdi mdi-settings font-size-22"></i>
                    </a>
                </li>
            </ul>



        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>





    <!-- apexcharts -->
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ asset('assets/libs/slick-slider/slick/slick.min.js') }}"></script>

    <!-- Jq vector map -->
    <script src="{{ asset('assets/libs/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

    <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/bootstrap-select-1.13.14/dist/js/bootstrap-select.js') }}"></script>

</body>

</html>
