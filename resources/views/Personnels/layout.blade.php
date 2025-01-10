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
    <link href="{{ asset('assets/css/vue ps-dashboard.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/vue ps-profil medical patient.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/libs/slick-slider/slick/slick-theme.css') }}" rel="stylesheet" type="text/css" />

    <!-- jvectormap -->
    <link href="{{ asset('assets/libs/jqvmap/jqvmap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/vue ps-affichage-consultation.css') }}" rel="stylesheet" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/vues ps-patients.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/vue ps-consultation.css') }}" rel="stylesheet" type="text/css" />
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

                    {{-- <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-sm-inline-block ml-1">Changer de Centre</span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            @foreach (Auth::user()->personnelsante->comptes as $item)

                            <a class="dropdown-item text-secondary" href="">{{$item}}</a>
                            @endforeach
                        </div>
                    </div> --}}

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
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            data-toggle="fullscreen">
                            <i class="mdi mdi-fullscreen"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @auth
                            <div >

                                <svg width="27" height="31" viewBox="0 0 27 31" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_984_280)">
                                        <path
                                            d="M13.2965 30.5872C9.56616 30.5872 5.83222 30.5513 2.10191 30.6052C0.986096 30.6052 0.526668 30.307 0.621475 29.1684C0.745454 27.6957 0.530303 26.2086 0.792847 24.7395C0.892317 23.9771 1.20379 23.2566 1.69284 22.6575C2.18189 22.0585 2.82949 21.6043 3.56414 21.3451C4.96802 20.8242 6.41929 20.4435 7.83776 19.9622C8.49047 19.7431 8.71289 20.1454 9.0119 20.562C9.98186 21.9198 10.9117 23.3099 11.9874 24.5815C12.611 25.3214 12.6438 25.7848 11.9364 26.4601C11.5462 26.8192 10.6054 27.3473 11.2508 27.9292C11.9801 28.5937 12.3739 27.57 12.7641 27.1317C14.5984 25.135 16.2346 22.9699 17.6504 20.6662C18.0806 19.9478 18.5 19.7718 19.2876 20.0627C20.5237 20.5117 21.8073 20.8278 23.0507 21.2589C23.8673 21.4993 24.5895 21.9804 25.1202 22.6374C25.6508 23.2943 25.9645 24.0956 26.0189 24.9335C26.1684 26.4924 26.1174 28.0657 26.1757 29.6354C26.2086 30.5657 25.596 30.5944 24.9068 30.5944C21.0367 30.5848 17.1666 30.5824 13.2965 30.5872Z"
                                            fill="#1171A5" />
                                        <path
                                            d="M20.6059 6.43101C19.1473 5.91735 18.1482 5.40372 17.4335 4.02081C15.7963 0.852687 10.9501 0.881417 9.30924 4.06031C8.57995 5.43604 7.6027 5.96046 6.16236 6.43101C6.16236 5.27798 6.12225 4.18603 6.16236 3.09767C6.20612 2.30025 6.79317 1.79377 7.46412 1.49564C9.31132 0.623202 11.3338 0.170288 13.3823 0.170288C15.4309 0.170288 17.4533 0.623202 19.3005 1.49564C19.7278 1.66432 20.087 1.9666 20.3228 2.35599C20.5587 2.74538 20.6581 3.20031 20.6059 3.65082C20.5622 4.54522 20.6059 5.43962 20.6059 6.43101Z"
                                            fill="#1171A5" />
                                        <path
                                            d="M17.0964 6.42033C17.1012 6.90314 17.0091 7.38214 16.8256 7.82984C16.642 8.27754 16.3705 8.68512 16.0266 9.0292C15.6827 9.37328 15.2733 9.64708 14.8217 9.83489C14.3701 10.0227 13.8854 10.1208 13.3952 10.1236C12.4058 10.117 11.4593 9.72493 10.7624 9.03306C10.0655 8.34119 9.67488 7.40574 9.67587 6.43109C9.67251 5.94858 9.76583 5.47016 9.95051 5.02324C10.1352 4.57632 10.4076 4.1697 10.7521 3.82667C11.0966 3.48364 11.5064 3.21094 11.9581 3.02422C12.4098 2.8375 12.8944 2.74043 13.3843 2.73855C13.8745 2.73662 14.3601 2.83071 14.8131 3.01536C15.266 3.20002 15.6771 3.47155 16.0226 3.81415C16.368 4.15675 16.6408 4.56359 16.8252 5.01101C17.0095 5.45842 17.1017 5.93749 17.0964 6.42033ZM13.4499 5.49359C13.3249 5.4883 13.2 5.50765 13.0826 5.5505C12.9652 5.59336 12.8577 5.65885 12.7664 5.74315C12.675 5.82745 12.6017 5.92886 12.5506 6.04144C12.4996 6.15402 12.4719 6.2755 12.4691 6.39877C12.4553 6.51097 12.4655 6.62476 12.4991 6.7328C12.5327 6.84085 12.589 6.94075 12.6642 7.02605C12.7395 7.11135 12.8321 7.18015 12.936 7.22802C13.04 7.27588 13.1529 7.30174 13.2676 7.30394C13.3902 7.33346 13.518 7.3356 13.6416 7.31016C13.7651 7.28472 13.8813 7.23237 13.9817 7.15694C14.082 7.08151 14.164 6.98491 14.2215 6.87423C14.279 6.76356 14.3107 6.64159 14.3141 6.51729C14.3615 5.9318 13.9969 5.61931 13.4499 5.49359Z"
                                            fill="#1171A5" />
                                        <path
                                            d="M7.70734 10.5474C8.2142 11.7867 6.56237 12.8427 7.67089 14.0317C8.49134 14.9117 9.16226 15.9282 9.97177 16.8226C10.3938 17.2663 10.9072 17.616 11.4776 17.8483C12.048 18.0806 12.6622 18.1901 13.2791 18.1696C15.4123 18.2019 16.6229 16.9555 17.9538 15.4397C19.2848 13.9239 19.8026 12.4548 18.6831 10.4828C20.6194 11.0647 21.108 11.7903 20.871 13.3204C20.2912 17.1531 15.4014 20.3643 11.6492 19.3945C10.984 19.2409 10.3558 18.9602 9.8004 18.5683C8.2745 17.3687 7.0305 15.8578 6.15395 14.1394C5.24599 12.444 5.83307 11.2874 7.70734 10.5474Z"
                                            fill="#1171A5" />
                                        <path
                                            d="M5.84707 10.3391C5.67933 9.11787 5.65015 8.15522 6.66022 7.50867C7.18895 7.17102 7.82707 6.57835 8.33392 6.79027C8.95747 7.07045 8.76787 8.04387 9.13252 8.65451C9.32943 8.98497 8.95746 9.06759 8.69127 9.13225C7.68025 9.37181 6.71833 9.77999 5.84707 10.3391Z"
                                            fill="#1171A5" />
                                        <path
                                            d="M20.9079 10.2206C20.2187 9.92964 19.6244 9.55969 18.9826 9.43397C17.8085 9.20049 17.5532 8.81615 17.9652 7.59129C18.3299 6.53525 18.669 6.72561 19.3655 7.05607C20.6818 7.67748 21.3127 8.61498 20.9079 10.2206Z"
                                            fill="#1171A5" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_984_280">
                                            <rect width="25.5652" height="30.4348" fill="white"
                                                transform="translate(0.609375 0.17395)" />
                                        </clipPath>
                                    </defs>
                                </svg>



                            </div>
                                <span class="d-none d-sm-inline-block ml-1">Dr.{{ Auth::user()->name }}</span>
                            @endauth
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
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
                            <a href="{{route('personnel.dashboard')}}" class="waves-effect metis">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        {{-- <li>
                            <a href="{{ route('personnel.searchs.patient') }}" class="waves-effect metis"
                                style="color: white">
                                <svg width="23" height="25" viewBox="0 0 23 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_288_960)">
                                        <path
                                            d="M22.0556 19.7332C21.8298 18.034 21.2038 16.4127 20.229 15.0028C19.2542 13.5928 17.9586 12.4345 16.4487 11.6231C15.8322 11.2617 15.1572 11.0119 14.5035 10.709C13.2865 12.8348 12.1226 14.9022 10.9162 17.044L7.51481 10.7143C3.31095 12.3937 0.722726 15.3008 0.0105661 19.7491C-0.0165345 20.0729 0.0740386 20.3956 0.265666 20.6579C1.79628 22.7838 3.98591 23.9052 6.43063 24.5004C7.37664 24.7289 8.3439 24.8512 9.30053 25.0319H12.8029C13.7595 24.8565 14.7268 24.7343 15.6674 24.5004C18.1441 23.9052 20.3018 22.7679 21.8324 20.6579C22.017 20.3872 22.0964 20.0584 22.0556 19.7332ZM18.649 19.037L17.1662 19.122C17.1343 19.6269 17.1024 20.0946 17.0705 20.6261H15.7631C15.7631 20.1637 15.7206 19.696 15.694 19.1327L14.174 19.0423V17.7827L15.6781 17.6871C15.7047 17.1981 15.7312 16.7358 15.7631 16.1884H17.0546C17.0918 16.6933 17.129 17.1609 17.1715 17.6711L18.649 17.7934V19.037Z"
                                            fill="white" />
                                        <path
                                            d="M5.65475 5.28806C5.67714 3.86671 6.26188 2.51217 7.2809 1.52103C8.29992 0.529903 9.67018 -0.0170284 11.0916 2.07526e-05C11.7974 0.00695918 12.495 0.153031 13.1442 0.429888C13.7935 0.706745 14.3818 1.10895 14.8755 1.61347C15.3692 2.11798 15.7585 2.7149 16.0211 3.37006C16.2838 4.02522 16.4147 4.72576 16.4062 5.43157C16.3852 6.85577 15.8018 8.21384 14.7832 9.2095C13.7647 10.2052 12.3937 10.7576 10.9694 10.7462C9.541 10.7266 8.17886 10.1407 7.1823 9.11721C6.18573 8.09374 5.6363 6.71645 5.65475 5.28806Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_288_960">
                                            <rect width="22.0398" height="25" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span>Patients</span>
                            </a>
                        </li> --}}
                        @auth
                        <li>
                            <a href="{{ route('personnel.historiqueConsultations') }}" class="waves-effect metis"
                                style="color: white">
                                <svg width="21" height="24" viewBox="0 0 21 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_916_64)">
                                        <path
                                            d="M9.77887e-06 0.540284V23.4597C-0.000427879 23.5305 0.013829 23.6007 0.0419981 23.6662C0.0701672 23.7318 0.111617 23.7914 0.164072 23.8416C0.216528 23.8918 0.278892 23.9316 0.347589 23.9588C0.416286 23.986 0.489938 24 0.564339 24H20.4321C20.5827 24 20.7272 23.9431 20.8337 23.8418C20.9401 23.7404 21 23.603 21 23.4597V0.540284C20.9991 0.397248 20.939 0.260308 20.8327 0.159164C20.7264 0.0580201 20.5824 0.000829218 20.4321 0H0.564339C0.41434 0.000834775 0.270801 0.0581265 0.165045 0.159359C0.0592888 0.260592 7.21392e-06 0.397537 9.77887e-06 0.540284ZM18.7821 22.4423H2.21777C2.14337 22.4423 2.06972 22.4283 2.00102 22.4012C1.93232 22.374 1.86996 22.3341 1.8175 22.2839C1.76505 22.2337 1.7236 22.1741 1.69543 22.1086C1.66726 22.043 1.653 21.9729 1.65344 21.9021V2.09795C1.653 2.02714 1.66726 1.95696 1.69543 1.89143C1.7236 1.82589 1.76505 1.76631 1.8175 1.7161C1.86996 1.66589 1.93232 1.62604 2.00102 1.59885C2.06972 1.57166 2.14337 1.55766 2.21777 1.55766H18.7821C18.9315 1.55933 19.0742 1.61698 19.1793 1.71813C19.2843 1.81927 19.3432 1.95574 19.3432 2.09795V21.9021C19.3432 22.0443 19.2843 22.1807 19.1793 22.2819C19.0742 22.383 18.9315 22.4407 18.7821 22.4423Z"
                                            fill="white" />
                                        <path d="M17.2744 14.4392H4.17969V15.7315H17.2744V14.4392Z" fill="white" />
                                        <path d="M17.2759 10.6288H7.79688V11.921H17.2759V10.6288Z" fill="white" />
                                        <path d="M17.2748 5.47864H12.4141V6.51813H17.2748V5.47864Z" fill="white" />
                                        <path d="M14.2969 3.68406V8.30969H15.3892V3.68406H14.2969Z" fill="white" />
                                        <path d="M17.2744 18.2496H4.17969V19.5419H17.2744V18.2496Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_916_64">
                                            <rect width="21" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span>Consultations</span>
                            </a>
                        </li>
                        @endauth
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
                <div class="container-fluid px-2">





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
