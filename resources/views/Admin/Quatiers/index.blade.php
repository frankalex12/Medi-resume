@extends('Admin.layouts')
@section('contenu')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-box d-flex align-items-center ">
                    <h1 class="mb-0 ">Quartiers</h1>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-between mb-3">

            <div class="col-md-6">
                <a href="{{ route('quartier.create') }}" class="btn btn-primary btn-sm mb-2 px-2">Ajouter</a>
            </div>

            <div class="col-md-5">
                <div>
                    <input class="form-control" type="search" placeholder="Searh ..." wire:model='searchterm'>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row d-flex justify-content-center">
            <div class="col-9">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                    <div class="card-body">


                        <div class="table-responsive border-0">
                            <table class="table table-editable">
                                <thead>
                                    <tr>
                                        <th class="text-center">Id</th>
                                        <th class="text-center">Nom</th>
                                        <th class="text-center">actions</th>
                                    </tr>
                                </thead>

                                @foreach ($quatiers as $quatier)
                                    <tr>
                                        <td class="text-center">{{ $quatier->getId() }}</td>
                                        <td class="text-center">{{ $quatier->getName() }}</td>
                                        <td class="text-center">
                                            <div class="btn-group ml-md-2 mb-3">
                                                <p type="button" class="waves-light waves-effect dropdown-toggle"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </p>
                                                <div class="dropdown-menu dropdown-menu-right ">
                                                    <a class="dropdown-item text-success text-center"
                                                        href="{{ route('quartier.edit', ['quartier' => $quatier->getId()]) }}"><i
                                                            class="fas fa-pencil-alt"></i></a>
                                                    <form
                                                        action="{{ route('quartier.destroy', ['quartier' => $quatier->getId()]) }}"
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
