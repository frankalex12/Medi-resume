@extends('CentredeSante.layout')
@section('contenu')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row d-flex justify-content-between">
            <div class="col-md-6">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h1 class="mb-0">Personnels de Santé</h1>
                </div>
            </div>
            <div class="col-md-3">
                <div class=" align-items-center justify-content-center">
                   @auth
                   <h4 class="hospital-name mb-0 font-size-18 text-primary">{{Auth::user()->name}}</h4>
                   @endauth
                </div>
            </div>
        </div>
        {{-- @dd($personnels) --}}
        <div class="row d-flex  mb-3 justify-content-between mt-5">
            <div class="col-md-4 d-flex">
                <a href="{{ route('hopitals.home.personnel.add') }}" class="btn btn-primary btn-sm mb-2 px-5">Ajouter un
                    personnel</a>
            </div>

            <div class="col-md-5">

                <input class="form-control" type="search" placeholder="Searh ...">


            </div>
        </div>
        <!-- end page title -->

        <div class="row mt-5 justify-content-center">
            <div class="col-9">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                    <div class="card-body">


                        <div class="table-responsive border-0">
                            <table class="table table-editable">
                                <thead>
                                    <tr>
                                        <th class="text-center">Profil</th>
                                        <th class="text-center">Nom</th>
                                        <th class="text-center">spécialité</th>
                                        <th class="text-center">Statut</th>
                                        <th class="text-center">actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- "id" => 1
                                    "nom" => "Alex kouekam"
                                    "naissance" => "2023-06-07"
                                    "Sexe" => "M"
                                    "postal" => "BP14578, douala"
                                    "user_id" => 3
                                    "identification_professionnelle" => "1324456461313516848484"
                                    "specialite_id" => 1
                                    "created_at" => "2023-06-29 11:46:44"
                                    "updated_at" => "2023-06-29 11:46:44"
                                    "pivot_centre_de_sante_id" => 1
                                    "pivot_personnel_id" => 1 --}}
                                    @foreach ($personnels as $personnel)
                                        {{-- @dd($personnel) --}}
                                        {{-- @foreach ($personnel as $item) --}}
                                        <tr>


                                            <td class="text-center">
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
                                            </td>
                                            {{-- <td class="text-center">{{ $personnel->nom }}</td> --}}
                                            <td class="text-center">{{ $personnel->nom }}</td>
                                            <td class="text-center"> {{ $personnel->specialite->name }} </td>
                                            <td class="text-center">
                                                <a class="dropdown-item text-success text-center" href="">
                                                    Actif
                                                </a>
                                            </td>

                                            <td class="text-center">
                                                <div class="btn-group ml-md-2 mb-3">
                                                    <p type="button" class="waves-light waves-effect dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-h"></i>
                                                    </p>
                                                    <div class="dropdown-menu dropdown-menu-right ">
                                                        <a class="dropdown-item text-secondary text-center"
                                                            href="{{ route('admin.hopitals.showPersonnel', ['id' => $personnel->id]) }}">
                                                            <i class="fas fa-eye"></i> Profil
                                                        </a>

                                                        <form
                                                            action=""
                                                            {{-- {{ route('personnels.destroy', ['personnel' => $personnel->id]) }} --}}
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="dropdown-item text-danger text-center"><i
                                                                    class="far fa-trash-alt"></i> retirer
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        {{-- @endforeach  --}}
                                    @endforeach
                                </tbody>



                            </table>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->

    @livewireStyles
@endsection
