@extends('CentredeSante.layout')
@section('contenu')
<div class="container-fluid px-2">

    <div class="row justify-content-between mx-3">
        <div class="col-lg-6 col-md-8">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <p class="page-title mr-2">
                    Dashboard
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

    <div class="container col-lg-11 col-md-10">

        <h3 class="section-title  text">Statistiques</h3>

        <div class="row mt-5 px-3 second-section d-flex justify-content-between align-items-center">

            {{-- <div
                class="info-card col-lg-3 px-4 py-3 col-md-8 d-flex justify-content-start align-items-center">

                <div class="info-card-icon-bloc mr-4">

                    <svg width="32" class="info-card-icon" height="37" viewBox="0 0 32 37" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
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

                </div>

                <div class="infos-bloc d-flex flex-column">

                    <span class="info-title">Patients</span>

                    <span class="info-description">consultés dans le centre hospitalier</span>

                    <span class="info-value">{{$centre->consultations}}</span>

                </div>

            </div> --}}

            <div
                class="info-card col-lg-3 px-4 py-3 col-md-8 d-flex justify-content-start align-items-center">

                <div class="info-card-icon-bloc mr-4">

                    <svg width="27" height="30" viewBox="0 0 27 30" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_984_194)">
                            <path
                                d="M0.609387 1.04904V28.951C0.608854 29.0372 0.62621 29.1226 0.660503 29.2024C0.694796 29.2822 0.745256 29.3547 0.809115 29.4158C0.872974 29.4769 0.948896 29.5255 1.03253 29.5586C1.11616 29.5917 1.20582 29.6087 1.2964 29.6087H25.4833C25.6666 29.6087 25.8425 29.5394 25.9721 29.416C26.1017 29.2927 26.1746 29.1254 26.1746 28.951V1.04904C26.1735 0.87491 26.1003 0.7082 25.9709 0.585069C25.8415 0.461937 25.6662 0.392313 25.4833 0.391304H1.2964C1.11379 0.39232 0.939046 0.462067 0.810299 0.585306C0.681553 0.708546 0.609384 0.875263 0.609387 1.04904ZM23.4745 27.7124H3.30927C3.21869 27.7124 3.12903 27.6954 3.0454 27.6623C2.96177 27.6292 2.88585 27.5807 2.82199 27.5195C2.75813 27.4584 2.70767 27.3859 2.67338 27.3061C2.63908 27.2263 2.62173 27.1409 2.62226 27.0547V2.94533C2.62173 2.85913 2.63908 2.77369 2.67338 2.69391C2.70767 2.61413 2.75813 2.54159 2.82199 2.48047C2.88585 2.41934 2.96177 2.37083 3.0454 2.33773C3.12903 2.30463 3.21869 2.28759 3.30927 2.28759H23.4745C23.6564 2.28961 23.8302 2.3598 23.9581 2.48293C24.0859 2.60607 24.1576 2.77221 24.1576 2.94533V27.0547C24.1576 27.2278 24.0859 27.3939 23.9581 27.5171C23.8302 27.6402 23.6564 27.7104 23.4745 27.7124Z"
                                fill="#1171A5" />
                            <path d="M21.6367 17.9694H5.69531V19.5426H21.6367V17.9694Z"
                                fill="#1171A5" />
                            <path d="M21.6413 13.3307H10.1016V14.9038H21.6413V13.3307Z"
                                fill="#1171A5" />
                            <path d="M21.64 7.06099H15.7227V8.32646H21.64V7.06099Z" fill="#1171A5" />
                            <path d="M18.0117 4.87622V10.5074H19.3415V4.87622H18.0117Z"
                                fill="#1171A5" />
                            <path d="M21.6367 22.6082H5.69531V24.1814H21.6367V22.6082Z"
                                fill="#1171A5" />
                        </g>
                        <defs>
                            <clipPath id="clip0_984_194">
                                <rect width="25.5652" height="29.2174" fill="white"
                                    transform="translate(0.609375 0.391296)" />
                            </clipPath>
                        </defs>
                    </svg>


                </div>

                <div class="infos-bloc d-flex flex-column">

                    <span class="info-title">Consultations Effectuées</span>

                    <span class="info-description">dans le centre hospitalier</span>

                    <span class="info-value">{{$centre->consultations->count()}}</span>

                </div>

            </div>

            <div
                class="info-card col-lg-3 px-4 py-3 col-md-8 d-flex justify-content-start align-items-center">

                <div class="info-card-icon-bloc mr-4">

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

                <div class="infos-bloc d-flex flex-column">

                    <span class="info-title">Personnels de santés</span>

                    <span class="info-description">rattachés au centre hospitalier</span>

                    <span class="info-value">{{$centre->personnels->count()}}</span>

                </div>

            </div>

        </div>

    </div>

    <!-- fin second-section -->


</div> <!-- container-fluid -->

@endsection
