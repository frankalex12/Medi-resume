@extends('CentredeSante.layout')
@section('contenu')
    <!-- start page title -->
    <div class="row d-flex align-items-center justify-content-between">
        <div class="col-md-6">
            <div class="page-title-box ">
                <h1 class="mb-0 ">Patients</h1>
            </div>
        </div>
        <div class="col-md-3">
            <div>
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

    <div class="row mt-5 justify-content-center">
        <div class="col-9">
            <div class="card shadow  bg-body rounded">
                <div class="card-body">

                    {{-- @dd($patients) --}}

                    <div class="table-responsive border-0">
                        <table class="table table-editable">
                            <thead>
                                <tr>
                                    <th class="text-center">Profil</th>
                                    <th class="text-center">Nom</th>
                                    <th class="text-center">Prenom</th>
                                    <th class="text-center">Profession</th>
                                    <th class="text-center">Contact</th>
                                    <th class="text-center">Quartier</th>
                                    <th class="text-center">actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($patients as $patient)
                                    <tr>
                                        <td class="text-center">
                                            @if ($patient->user->profil == null)
                                                <svg width="32" class="info-card-icon" height="37"
                                                    viewBox="0 0 32 37" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                            @else
                                                <svg width="32" class="info-card-icon" height="37"
                                                    viewBox="0 0 32 37" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                            @endif
                                        </td>
                                        <td class="text-center pt-4">
                                            {{ $patient->user->name }}
                                        </td>
                                        <td class="text-center pt-4">
                                            {{ $patient->user->lastname }}
                                        </td>
                                        <td class="text-center pt-4">
                                            {{ $patient->profession }}
                                        </td>
                                        <td class="text-center pt-4">
                                            @foreach ($patient->user->telephones as $item)
                                                {{ $item->numero }}
                                            @endforeach
                                        </td>
                                        <td class="text-center pt-4">
                                            {{ $patient->quatier->name }}
                                        </td>
                                        <td class="text-center pt-4">
                                            <a class="dropdown-item text-primary text-center" href="{{ route('admin.hopitals.showPatient', ['id'=>$patient->id]) }}">
                                                <i class="fas fa-eye"></i>
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
