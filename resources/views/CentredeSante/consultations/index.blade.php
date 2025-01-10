@extends('CentredeSante.layout')
@section('contenu')
    <!-- start page title -->
    <div class="row d-flex align-items-center justify-content-between">
        <div class="col-md-6 ">
            <div class="page-title-box ">
                <h1 class="mb-0 ">Historique De Consultations</h1>
            </div>
        </div>
        <div class="col-md-3">
            <div class=" align-items-center justify-content-center">
                @auth
                    <h4 class="hospital-name mb-0 font-size-18 text-primary">{{ Auth::user()->name }}</h4>
                @endauth
            </div>
        </div>
    </div>
    <div class="row my-2">
        <div class="col-md-12">
            {{-- <div class="d-flex align-items-center justify-content-end ">
                <a href="" class="btn btn-primary btn-sm mb-2 px-2">Creer un centre hospitalier</a>
            </div> --}}
        </div>
    </div>
    <div class="row d-flex  mb-3">
        <div class="col-md-8 d-flex">
            <div>
                <select class="selectpicker form-control" data-live-search="true">
                    <option data-tokens="ketchup mustard">Categories</option>
                    <option data-tokens="mustard">Burger, Shake and a Smile</option>
                    <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                </select>
            </div>
            <div>
                <select class="selectpicker form-control" data-live-search="true">
                    <option data-tokens="ketchup mustard">villes</option>
                    <option data-tokens="mustard">Burger, Shake and a Smile</option>
                    <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                </select>
            </div>
            <div>
                <select class="selectpicker form-control" data-live-search="true">
                    <option data-tokens="ketchup mustard">Quatiers</option>
                    <option data-tokens="mustard">Burger, Shake and a Smile</option>
                    <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                </select>
            </div>

        </div>

        <div class="col-md-4 d-flex justify-content-end mt-sm-2">

            <input class="form-control " type="search" placeholder="Searh ...">

        </div>
    </div>
    <!-- end page title -->

    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-9 ">
            <div class="card shadow  bg-body rounded">
                <div class="card-body">


                    <div class="table-responsive border-0">
                        <table class="table table-editable">
                            <thead>
                                <tr>
                                    <th class="text-center">Motif</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Specialiste</th>
                                    <th class="text-center">ID du Patient</th>
                                    <th class="text-center">Telephone</th>
                                    <th class="text-center">actions</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tbody>
                                @foreach ($consultations as $consultation)
                                    <tr>

                                        <td class="text-center d-flex justify-content-between">
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
                                                    <path d="M21.64 7.06099H15.7227V8.32646H21.64V7.06099Z"
                                                        fill="#1171A5" />
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
                                            {{ $consultation->motif }}
                                        </td>
                                        <td class="text-center">
                                            {{ $consultation->created_at }}
                                        </td>
                                        <td class="text-center">
                                            Dr.  {{ $consultation->professionnel->user->name }}
                                        </td>
                                        <td class="text-center ">
                                            {{ $consultation->malade->user->name }}
                                        </td>
                                        <td class="text-center">
                                            {{ $consultation->malade->user->telephones->last()->numero }}
                                        </td>
                                        <td class="text-center">
                                            <a class="dropdown-item text-primary text-center" href="">
                                                <i class="fas fa-eye"></i></a>
                                            </a>
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
