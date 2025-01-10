@extends('Admin.layouts')
@section('contenu')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Villes</h4>
                </div>
            </div>
        </div>

        <div class="row d-flex  mb-3">
            <div class="col-md-4 d-flex">
                <a href="{{ route('ville.create') }}" class="btn btn-primary btn-sm mb-2 px-2">Ajouter</a>
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
                                        <th class="text-center">Nom</th>
                                        <th class="text-center">Quatiers</th>
                                        <th class="text-center">actions</th>
                                    </tr>
                                </thead>

                                @foreach ($villes as $ville)
                                    <tr>
                                        <td class="text-center">{{ $ville->getId() }}</td>
                                        <td class="text-center">{{ $ville->getName() }}</td>
                                        <td class="text-center">
                                            <a class="dropdown-item text-success text-center"
                                                href="{{ route('ville.show', ['ville'=>$ville->getId()]) }}">
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
                                                        href="{{ route('ville.edit', ['ville' => $ville->getId()]) }}"><i
                                                            class="fas fa-pencil-alt"></i></a>
                                                    <form
                                                        action="{{ route('ville.destroy', ['ville' => $ville->getId()]) }}"
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
