@extends('Personnels.layout')
@section('contenu')
    <!-- start page title -->
    <div class="row d-flex justify-content-between">
        <div class="col-md-6">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h1 class="mb-0">Consultations</h1>
            </div>
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
            <div class="d-flex align-items-center justify-content-end ">
                <a href="{{ route('personnel.searchs.patient') }}" class="btn btn-primary btn-sm mb-2 px-2">nouvelle
                    consultations</a>
            </div>
        </div>
    </div>

    <div class="row d-flex  mb-3">
        <div class="col-md-8 d-flex">

            <div>
                <select class="selectpicker form-control" data-live-search="true">
                    <option data-tokens="ketchup mustard">Centre Hospitalier</option>
                    <option data-tokens="mustard">Burger, Shake and a Smile</option>
                    <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                </select>
            </div>
            <div>
                <select class="selectpicker form-control" data-live-search="true">
                    <option data-tokens="ketchup mustard">Date</option>
                    <option data-tokens="mustard">Burger, Shake and a Smile</option>
                    <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                </select>
            </div>
            <div>
                <select class="selectpicker form-control" data-live-search="true">
                    <option data-tokens="ketchup mustard">mois</option>
                    <option data-tokens="mustard">Burger, Shake and a Smile</option>
                    <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                </select>
            </div>
            <div>
                <select class="selectpicker form-control" data-live-search="true">
                    <option data-tokens="ketchup mustard">Annee</option>
                    <option data-tokens="mustard">Burger, Shake and a Smile</option>
                    <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                </select>
            </div>
        </div>

        <div class="col-md-4 d-flex justify-content-end mt-sm-2">
            <div class="">
                <input class="form-control" type="search" placeholder="Searh ...">

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card shadow p-3  bg-body rounded h-100">
                <div class="card-body">


                    <div class="table-responsive border-0">
                        <table class="table table-editable">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        <h4>ID</h4>
                                    </th>
                                    <th class="text-center">
                                        <h4>Nom Du Patient</h4>
                                    </th>
                                    <th class="text-center">
                                        <h4>Nom Du Centre hospitalier</h4>
                                    </th>
                                    <th class="text-center">
                                        <h4>Date</h4>
                                    </th>
                                    <th class="text-center">
                                        <h4>actions</h4>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($personnel->consultations as $consultation)
                                    <tr class="h-25">
                                        <td class="text-center d-flex justify-content-center">
                                            <h6>{{ $consultation->id }}</h6>
                                        </td>
                                        <td class="text-center pt-3">
                                            <svg width="32" class="info-card-icon" height="37" viewBox="0 0 32 37"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_984_191)">
                                                    <path
                                                        d="M31.7128 28.5682C31.3919 26.1536 30.5023 23.8497 29.1171 21.8461C27.7319 19.8424 25.8907 18.1964 23.745 17.0433C22.869 16.5298 21.9098 16.1748 20.9809 15.7443C19.2514 18.7653 17.5974 21.7031 15.883 24.7468L11.0495 15.7519C5.07561 18.1384 1.39761 22.2695 0.385595 28.5909C0.347083 29.051 0.475792 29.5095 0.748105 29.8823C2.92319 32.9033 6.03476 34.4968 9.50885 35.3427C10.8532 35.6674 12.2277 35.8411 13.5871 36.0979H18.5641C19.9236 35.8487 21.2981 35.675 22.6348 35.3427C26.1542 34.4968 29.2205 32.8806 31.3956 29.8823C31.6579 29.4976 31.7707 29.0303 31.7128 28.5682ZM26.8717 27.5789L24.7646 27.6997C24.7193 28.4172 24.674 29.0818 24.6287 29.837H22.7708C22.7708 29.18 22.7104 28.5154 22.6726 27.7148L20.5126 27.5864V25.7965L22.65 25.6606C22.6877 24.9657 22.7255 24.3087 22.7708 23.5308H24.606C24.6589 24.2483 24.7118 24.9129 24.7722 25.6379L26.8717 25.8116V27.5789Z"
                                                        fill="#1171A5" />
                                                    <path
                                                        d="M8.40689 8.0409C8.43871 6.02108 9.26965 4.0962 10.7177 2.68775C12.1658 1.2793 14.113 0.502087 16.133 0.526314C17.136 0.536174 18.1272 0.74375 19.0499 1.13718C19.9725 1.53061 20.8086 2.10216 21.5101 2.8191C22.2116 3.53605 22.7648 4.3843 23.1381 5.31532C23.5113 6.24634 23.6973 7.24185 23.6853 8.24483C23.6555 10.2687 22.8264 12.1986 21.379 13.6135C19.9315 15.0283 17.9833 15.8133 15.9593 15.7972C13.9295 15.7693 11.9938 14.9367 10.5776 13.4823C9.16145 12.0279 8.38067 10.0707 8.40689 8.0409Z"
                                                        fill="#1171A5" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_984_191">
                                                        <rect width="31.3196" height="35.5263" fill="white"
                                                            transform="translate(0.367188 0.526306)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <h6>{{ $consultation->malade->user->name }}</h6>
                                        </td>
                                        <td class="text-center ">
                                            <svg width="35" height="30" viewBox="0 0 35 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_984_321)">
                                                    <path
                                                        d="M24.785 28.9066H25.4071V5.8251H33.7758C33.9439 5.80116 34.1154 5.81668 34.2764 5.87048C34.4374 5.92428 34.5833 6.0148 34.7025 6.13476C34.8216 6.25472 34.9106 6.40079 34.9623 6.5611C35.014 6.72141 35.0269 6.89152 35 7.05769V30.0398H0.0802772V7.05769C0.0527049 6.88701 0.0663611 6.71225 0.120148 6.54781C0.173934 6.38338 0.266306 6.23393 0.389688 6.11171C0.513069 5.98948 0.663957 5.89798 0.829948 5.84469C0.995939 5.79141 1.17233 5.77788 1.34462 5.8052H9.67316V28.4493C9.67316 28.9861 9.67318 28.9861 10.3154 28.8867V1.57059C10.3053 1.4117 10.3053 1.25237 10.3154 1.09348C10.31 0.951796 10.3335 0.810463 10.3845 0.678C10.4356 0.545537 10.513 0.424622 10.6124 0.322528C10.7117 0.220434 10.8308 0.139269 10.9625 0.0838478C11.0942 0.0284265 11.2359 -0.000100718 11.379 2.67177e-07H23.4203C24.4037 2.67177e-07 24.785 0.37778 24.785 1.35194V28.9066ZM17.2391 28.9066V22.4851C17.2391 21.8887 17.0384 21.6899 16.4363 21.6899H14.2689C13.5465 21.6899 13.3859 21.8489 13.3859 22.5447V28.5089C13.3859 28.6481 13.3859 28.7873 13.3859 28.9463L17.2391 28.9066ZM21.6743 28.9066V22.4652C21.6743 21.9086 21.4736 21.7098 20.9117 21.7098H18.6239C18.0017 21.7098 17.8412 21.8887 17.8412 22.4851V28.4493C17.8317 28.575 17.8317 28.7013 17.8412 28.827L21.6743 28.9066ZM16.3159 6.08349V7.69383C16.3159 8.25049 16.4564 8.38966 17.0184 8.38966H18.0419C18.5636 8.38966 18.7041 8.25053 18.7041 7.73363V6.08349H20.4903C20.5589 6.09564 20.6295 6.0922 20.6967 6.07342C20.7638 6.05465 20.8258 6.02106 20.878 5.97514C20.9301 5.92921 20.9711 5.87216 20.9978 5.80829C21.0245 5.74442 21.0362 5.67538 21.0321 5.60638V4.19486C21.0322 4.1305 21.0191 4.0668 20.9936 4.00757C20.9682 3.94835 20.9309 3.89483 20.884 3.85025C20.8372 3.80567 20.7816 3.77092 20.7209 3.74814C20.6601 3.72537 20.5953 3.715 20.5304 3.71768H18.7041V1.98807C18.7041 1.59046 18.5235 1.41157 18.1221 1.41157H16.8578C16.5099 1.41157 16.3293 1.59048 16.3159 1.94833C16.3059 2.12049 16.3059 2.29309 16.3159 2.46525V3.71768H14.6101C14.1485 3.71768 13.9879 3.89667 13.9879 4.33404C13.9879 4.77142 13.9879 5.06961 13.9879 5.42746C13.9879 5.78531 14.1284 6.08349 14.6302 6.08349H16.3159ZM2.8899 9.80124H2.26777C1.98681 9.80124 1.88646 9.92047 1.88646 10.1789V10.835C1.88646 11.8291 1.88646 11.7694 2.82969 11.7694C3.77293 11.7694 3.85322 11.7694 3.85322 10.7356C3.85322 9.70178 3.95354 9.80124 2.8899 9.80124ZM7.70643 10.7754V10.1591C7.70643 9.90063 7.586 9.80124 7.34518 9.80124H6.10092C6.05455 9.79457 6.00725 9.79869 5.96278 9.81331C5.91832 9.82794 5.87792 9.85263 5.84479 9.88545C5.81166 9.91827 5.78674 9.95832 5.77197 10.0024C5.75721 10.0464 5.75302 10.0932 5.75975 10.1392V10.7953C5.75975 11.849 5.75976 11.7694 6.74314 11.7694C7.72651 11.7694 7.70643 11.8291 7.70643 10.7754ZM28.297 9.80124H27.6347C27.5884 9.79457 27.5411 9.79869 27.4966 9.81331C27.4522 9.82794 27.4117 9.85263 27.3786 9.88545C27.3455 9.91827 27.3206 9.95832 27.3058 10.0024C27.291 10.0464 27.2868 10.0932 27.2936 10.1392C27.2936 10.5567 27.2936 10.9742 27.2936 11.3917C27.287 11.4428 27.2924 11.4948 27.3093 11.5435C27.3261 11.5923 27.354 11.6366 27.3908 11.6731C27.4276 11.7095 27.4724 11.7372 27.5216 11.7539C27.5708 11.7706 27.6233 11.7759 27.6749 11.7694H28.879C29.16 11.7694 29.2804 11.6303 29.2804 11.3519V10.1789C29.2804 9.90059 29.1399 9.78136 28.8589 9.80124H28.297ZM32.1302 9.80124H31.508C31.2471 9.80124 31.1468 9.92051 31.1468 10.1591C31.1468 10.3976 31.1468 10.9941 31.1468 11.4116C31.14 11.4575 31.1442 11.5043 31.159 11.5484C31.1738 11.5924 31.1987 11.6325 31.2318 11.6653C31.2649 11.6981 31.3054 11.7228 31.3498 11.7374C31.3943 11.7521 31.4416 11.7562 31.4879 11.7495H32.1502C33.2139 11.7495 33.1336 11.7495 33.1336 10.7555C33.1336 9.76144 33.1938 9.82112 32.1904 9.80124H32.1302ZM14.6502 10.7953C14.6502 9.66207 14.7907 9.80124 13.6869 9.80124C12.5831 9.80124 12.6835 9.64217 12.6835 10.7754C12.6835 11.9086 12.5831 11.7495 13.6869 11.7694C14.7907 11.7893 14.6502 11.8291 14.6502 10.7953ZM17.5401 9.80124H16.9381C16.6571 9.80124 16.5367 9.90059 16.5367 10.1789C16.5367 10.4572 16.5367 10.9941 16.5367 11.3917C16.5302 11.4428 16.5355 11.4948 16.5524 11.5435C16.5692 11.5923 16.5971 11.6366 16.6339 11.6731C16.6707 11.7095 16.7155 11.7372 16.7647 11.7539C16.8139 11.7706 16.8664 11.7759 16.918 11.7694H18.1422C18.1938 11.7759 18.2463 11.7706 18.2955 11.7539C18.3447 11.7372 18.3895 11.7095 18.4263 11.6731C18.4631 11.6366 18.491 11.5923 18.5078 11.5435C18.5247 11.4948 18.5301 11.4428 18.5235 11.3917C18.5235 11.173 18.5235 10.9742 18.5235 10.7555C18.5034 9.66204 18.6439 9.80124 17.5401 9.80124ZM22.3767 10.7754C22.3767 9.66206 22.4971 9.80124 21.3933 9.80124C20.2896 9.80124 20.3899 9.64219 20.3899 10.7953C20.3899 11.9484 20.2896 11.7694 21.3733 11.7694C22.457 11.7694 22.3567 11.8489 22.3767 10.7754ZM2.8899 15.7655H2.22765C2.18129 15.7588 2.13398 15.7629 2.08952 15.7775C2.04505 15.7922 2.00466 15.8168 1.97153 15.8497C1.9384 15.8825 1.91344 15.9225 1.89868 15.9666C1.88391 16.0106 1.87972 16.0575 1.88646 16.1034V17.4752C1.88646 17.6939 1.88646 17.8132 2.20757 17.8132H3.53211C3.57585 17.82 3.62057 17.8164 3.66266 17.8028C3.70475 17.7892 3.74301 17.766 3.77431 17.735C3.80561 17.704 3.82907 17.6661 3.84278 17.6244C3.85649 17.5827 3.86008 17.5384 3.85322 17.4951V16.2028C3.85996 16.1568 3.85577 16.11 3.841 16.066C3.82624 16.0219 3.80128 15.9819 3.76815 15.9491C3.73502 15.9163 3.69463 15.8915 3.65016 15.8769C3.6057 15.8623 3.55842 15.8582 3.51206 15.8648L2.8899 15.7655ZM7.70643 16.7595V16.1034C7.70643 15.8648 7.60609 15.7655 7.36526 15.7655H6.6829C5.67946 15.7655 5.7397 15.6262 5.7397 16.6998C5.7397 17.7733 5.61927 17.7137 6.76319 17.7137C7.90712 17.7137 7.70643 17.7933 7.70643 16.7595ZM13.7271 15.7655H13.125C12.844 15.7655 12.7236 15.8648 12.7236 16.1431C12.7236 16.4215 12.7236 16.9384 12.7236 17.3161C12.7172 17.3699 12.7231 17.4244 12.741 17.4755C12.7589 17.5267 12.7883 17.5732 12.8269 17.6114C12.8655 17.6497 12.9124 17.6788 12.9641 17.6965C13.0157 17.7142 13.0707 17.7201 13.125 17.7137H14.3291C14.57 17.7137 14.7104 17.6143 14.7104 17.336C14.7104 17.0577 14.7104 16.9185 14.7104 16.7197C14.6502 15.6263 14.7907 15.7655 13.6869 15.7655H13.7271ZM27.3337 16.7197C27.3337 16.9185 27.3337 17.1372 27.3337 17.336C27.3337 17.5348 27.4541 17.7137 27.715 17.7137H28.9392C29.1801 17.7137 29.3205 17.6143 29.3205 17.3559V16.1233C29.3205 15.8648 29.2001 15.7655 28.9392 15.7655H27.7953C27.3738 15.7655 27.3337 15.7654 27.3337 16.2227V16.7197ZM31.1869 16.7197C31.1869 16.9185 31.1869 17.1173 31.1869 17.3161C31.1869 17.515 31.3073 17.7137 31.5883 17.7137H32.7724C33.0332 17.7137 33.1738 17.6143 33.1738 17.3559V16.1034C33.1738 15.8847 33.0533 15.7655 32.8125 15.7655H32.1904C31.0264 15.7655 31.1669 15.6461 31.1468 16.7197H31.1869ZM3.89334 22.6839V22.1272C3.89334 21.8489 3.89336 21.7297 3.51206 21.7297H2.28786C2.02696 21.7297 1.9266 21.8489 1.9266 22.1073V23.34C1.9266 23.5587 1.9266 23.6978 2.26777 23.6779H3.55217C3.793 23.6779 3.89334 23.5786 3.89334 23.34V22.6839ZM6.76319 23.6779H7.34518C7.62614 23.6779 7.76665 23.6779 7.74658 23.3002V22.1272C7.74658 21.8489 7.62614 21.7297 7.34518 21.7297H6.30162C5.81997 21.7297 5.77981 21.7297 5.77981 22.2863V22.7237C5.73967 23.8171 5.6594 23.658 6.72305 23.658L6.76319 23.6779ZM27.3337 22.7038C27.3337 22.9026 27.3337 23.1014 27.3337 23.3002C27.3337 23.499 27.4341 23.6978 27.7351 23.6978H28.9191C29.18 23.6978 29.3205 23.5984 29.3205 23.3201V22.0875C29.3205 21.8489 29.2001 21.7297 28.9793 21.7297H28.1766C27.1531 21.7098 27.3136 21.6302 27.2936 22.6839L27.3337 22.7038ZM31.1869 22.7038C31.197 22.8959 31.197 23.0883 31.1869 23.2804C31.1869 23.5587 31.2873 23.6978 31.5682 23.6978H32.7924C33.0533 23.6978 33.1738 23.5984 33.1738 23.3598V22.1073C33.1798 22.0606 33.1753 22.0132 33.1606 21.9684C33.1459 21.9236 33.1214 21.8826 33.0887 21.8484C33.0561 21.8142 33.0162 21.7875 32.9719 21.7704C32.9276 21.7533 32.88 21.7462 32.8326 21.7495H31.5281C31.4817 21.7428 31.4345 21.747 31.39 21.7616C31.3455 21.7763 31.3051 21.801 31.272 21.8338C31.2388 21.8666 31.2139 21.9066 31.1991 21.9506C31.1844 21.9947 31.1802 22.0416 31.1869 22.0875C31.1669 22.2664 31.1468 22.4652 31.1468 22.6839L31.1869 22.7038ZM21.4535 15.7853H20.8114C20.5505 15.7853 20.43 15.9046 20.43 16.163C20.43 16.4215 20.43 16.9583 20.43 17.3758C20.4234 17.4243 20.4282 17.4737 20.444 17.5201C20.4598 17.5665 20.4862 17.6087 20.5212 17.6433C20.5562 17.678 20.5987 17.7041 20.6456 17.7198C20.6924 17.7355 20.7423 17.7402 20.7913 17.7336H22.0556C22.1046 17.7402 22.1545 17.7355 22.2013 17.7198C22.2482 17.7041 22.2907 17.678 22.3257 17.6433C22.3607 17.6087 22.3871 17.5665 22.4029 17.5201C22.4187 17.4737 22.4235 17.4243 22.4169 17.3758C22.4169 16.9583 22.4169 16.5606 22.4169 16.163C22.4169 15.7654 22.3165 15.7654 22.0356 15.7853H21.4535ZM17.6003 15.7853H16.9381C16.6972 15.7853 16.5969 15.8847 16.5969 16.1034C16.5969 16.3221 16.5969 16.9583 16.5969 17.3956C16.5969 17.833 16.7173 17.7336 16.9582 17.7336H18.2426C18.4834 17.7336 18.5837 17.6144 18.5837 17.3758C18.5837 17.1372 18.5837 16.9384 18.5837 16.7197C18.5034 15.6461 18.6439 15.7655 17.5602 15.7655L17.6003 15.7853Z"
                                                        fill="#1171A5" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_984_321">
                                                        <rect width="35" height="30" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <h6> {{ $consultation->hopital->name }}</h6>

                                        </td>
                                        <td class="text-center pt-3 ">
                                            <h6>{{ $consultation->created_at }}</h6>
                                        </td>

                                        <td class="text-center pt-3">
                                            <div class="btn-group ml-md-2 mb-3 d-flex justify-content-center">
                                                <a class="text-secondary text-center mr-2"
                                                    href="{{ route('personnel.dashboard.Consultation.show', ['id' => $consultation->id]) }}"><i
                                                        class="fas fa-eye"></i></a>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
