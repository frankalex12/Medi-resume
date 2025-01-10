@extends('Admin.layouts')
@section('contenu')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h1 class="mb-0 ">Departements</h1>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center mb-3 mt-5">
            <div class="col-md-6 d-flex">
                <a href="{{ route('departement.create') }}" class="btn btn-primary btn-sm mb-2 px-5">Ajouter un departement</a>
            </div>

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
                                        <th class="text-center">Id</th>
                                        <th class="text-center">Nom</th>
                                        <th class="text-center">Villes</th>
                                        <th class="text-center">actions</th>
                                    </tr>
                                </thead>

                                @foreach ($departements as $departement)
                                    <tr>
                                        <td class="text-center">{{ $departement->getId() }}</td>
                                        <td class="text-center">{{ $departement->getName() }}</td>
                                        <td class="text-center">
                                            <a class="dropdown-item text-success text-center"
                                                href="{{ route('departement.show', ['departement'=>$departement->getId()]) }}">
                                             <i class="fas fa-pencil-alt"></i></a>
                                        </td>

                                        <td class="text-center">
                                            <div class="btn-group ml-md-2 mb-3">
                                                <p type="button" class="waves-light waves-effect dropdown-toggle"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </p>
                                                <div class="dropdown-menu dropdown-menu-right ">
                                                    <a class="dropdown-item text-success text-center"
                                                        href="{{ route('departement.edit', ['departement' => $departement->getId()]) }}"><i
                                                            class="fas fa-pencil-alt"></i></a>
                                                    <form
                                                        action="{{ route('departement.destroy', ['departement' => $departement->getId()]) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="dropdown-item text-danger text-center"><i
                                                                class="far fa-trash-alt"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach



                            </table>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->

    @livewireStyles
@endsection
