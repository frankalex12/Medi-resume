@extends('Admin.layouts')
@section('contenu')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h1 class="mb-0 ">Patients</h1>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center mb-3 mt-5">


            <div class="col-md-5 d-flex justify-content-end">

                <input class="form-control" type="search" placeholder="Searh ...">

            </div>
        </div>
        <!-- end page title -->

        <div class="row d-flex justify-content-center mt-5">
            <div class="col-9">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                    <div class="card-body">

                        <div class="table-responsive border-0">
                            <table class="table table-editable">
                                <thead>
                                    <tr>
                                        <th class="text-center">Profil</th>
                                        <th class="text-center">Nom</th>
                                        <th class="text-center">Sexe</th>
                                        <th class="text-center">Profession</th>
                                        <th class="text-center">Numero CnI</th>
                                        <th class="text-center">telephone</th>
                                        <th class="text-center">Statut</th>
                                        <th class="text-center">actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($patients as $patient)
                                        {{-- "id" => 1
                                    "user_id" => 7
                                    "cni" => "102003447"
                                    "naissance" => "2023-05-31"
                                    "GroupeSanguin" => "B+"
                                    "profession" => "enseignant"
                                    "numeroprevenir" => "+237699803037"
                                    "sexe" => "Masculin"
                                    "pay_id" => 1
                                    "ville_id" => 1
                                    "quatier_id" => 1
                                    "localisation" => "ancien 3eme"
                                    "created_at" => "2023-06-30 13:08:25"
                                    "updated_at" => "2023-06-30 13:08:25" --}}
                                        {{-- @dd($patient) --}}
                                        <tr>
                                            <td class="text-center">
                                                <div class="info-card-icon-bloc mr-4">

                                                    <svg width="32" class="info-card-icon" height="37"
                                                        viewBox="0 0 32 37" fill="none"
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
                                            </td>
                                            <td class="text-center">{{ $patient->user->name }}</td>
                                            <td class="text-center">{{ $patient->sexe }}</td>
                                            <td class="text-center">{{ $patient->profession }}</td>
                                            <td class="text-center"> {{ $patient->cni }} </td>
                                            @foreach ($patient->user->telephones as $item)
                                                <td class="text-center"> {{ $item->numero }} </td>
                                            @endforeach
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
                                                            href="{{ route('admin.patient.show', ['id' => $patient->id]) }}">
                                                            <i class="fas fa-eye"></i> Profil
                                                        </a>
                                                        <a class="dropdown-item text-danger text-center" href="">
                                                            <i class="fas fa-pencil-alt"></i> Retirer
                                                        </a>

                                                    </div>
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

    </div> <!-- container-fluid -->

    @livewireStyles
@endsection
