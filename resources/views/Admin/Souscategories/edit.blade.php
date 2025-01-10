@extends('Admin.layouts')
@section('contenu')
    <div class="container">



        <div class="row">
            <div class="col-md-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Modifier la sous categorie</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card shadow p-3 mb-3 bg-body rounded col-md-10">
                <div class="card-body">
                    <form action="{{ route('souscategorie.update', ['souscategorie' => $souscategorie->getId()]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="col-md-10">
                            <div class="mt-4 mt-md-0 mb-5 ">
                                <h5 class="font-size-14">Sous Categorie:</h5>
                                <input class="form-control form-control" type="text" placeholder="Entrer une sous categorie"
                                    name="souscategorie" autocomplete="off" required value="{{$souscategorie->getName()}}">
                                @if ($errors->has('souscategorie'))
                                    <p class="text-danger">veuillez renseigner la sous categorie </p>
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
                    </form>


                </div>
            </div>
            </form>
        </div>



    </div> <!-- container-fluid -->
    @livewireStyles
@endsection
