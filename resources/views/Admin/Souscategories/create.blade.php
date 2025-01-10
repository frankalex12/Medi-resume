@extends('Admin.layouts')
@section('contenu')
    <div class="container">



        <div class="row">
            <div class="col-md-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Nouvelle sous categorie</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card shadow p-3 mb-3 bg-body rounded col-md-10">
                <div class="card-body">
                    <form action="{{ route('souscategorie.store') }}" method="post">
                        @csrf
                        <div class="col-md-10">
                            <div class="mt-4 mt-md-0 mb-4 ">
                                <h5 class="font-size-14">Sous categorie:</h5>
                                <input class="form-control form-control-sm" type="text" placeholder="nouvelle specialite"
                                    name="souscategorie" autocomplete="off" required>
                                @if ($errors->has('specialite'))
                                    <p class="text-danger">veuillez une sous categorie </p>
                                @endif
                            </div>
                            <select class="selectpicker form-control form-control" data-live-search="true" name="categorie">
                                @foreach ( $categories as $categorie )
                                <option value="{{$categorie->getId()}}">{{$categorie->getName()}}</option>
                                @endforeach
                            </select>
                            <div class="mt-4 mt-3 d-flex justify-content-end">
                                <input class="form-control btn-sm btn-primary col-md-3" type="submit" value="Enregistrer">
                            </div>
                        </div>


                </div>
            </div>
            </form>
        </div>



    </div> <!-- container-fluid -->
    @livewireStyles
@endsection
