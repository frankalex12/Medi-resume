@extends('Users.layout')
@section('contenu')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h1 class="mb-0 ">Dossier Medicaux</h1>
                </div>
            </div>
        </div>

        <div class="row d-flex  mb-3">
            <div class="col-md-4 d-flex">
                {{-- <a href="{{ route('pays.create') }}" class="btn btn-primary btn-sm mb-2 px-3">Ajouter un pays</a> --}}
            </div>

            <div class="col-md-8 d-flex justify-content-end">
                <div>
                    <input class="form-control" type="search" placeholder="Searh ...">

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                    <div class="card-body">


                        <div class="table-responsive border-0">
                            <table class="table table-editable">
                                <thead>
                                    <tr>
                                        <th class="text-center">Id</th>
                                        <th class="text-center">Nom du Pays</th>
                                        <th class="text-center">Drapeau</th>
                                        <th class="text-center">Code</th>
                                        <th class="text-center">Regions</th>
                                        <th class="text-center">actions</th>
                                    </tr>
                                </thead>

                                {{-- @foreach ($pays as $pay)
                                    <tr>
                                        <td class="text-center">{{ $pay->getId() }}</td>
                                        <td class="text-center">{{ $pay->getName() }}</td>
                                        <td class="text-center">{{ $pay->getFlag() }} </td>
                                        <td class="text-center">{{ $pay->getCode() }}</td>
                                        <td class="text-center"><i class="fas fa-map-marked-alt" style="color:#1171A5"></i>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group ml-md-2 mb-3">
                                                <p type="button" class="waves-light waves-effect dropdown-toggle"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </p>
                                                <div class="dropdown-menu dropdown-menu-right ">
                                                    <a class="dropdown-item text-success text-center"
                                                        href="{{ route('pays.edit', ['pay' => $pay->getId()]) }}"><i
                                                            class="fas fa-pencil-alt"></i></a>
                                                    <form action="{{ route('pays.destroy',['pay'=>$pay->getId()]) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="dropdown-item text-danger text-center"><i class="far fa-trash-alt"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach --}}



                            </table>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->

    @livewireStyles
@endsection
