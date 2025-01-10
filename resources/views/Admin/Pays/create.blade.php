@extends('Admin.layouts')
@section('contenu')
    <div class="container ">



        <div class="row">
            <div class="col-md-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Nouveau pays > Ajouter Pays</h4>
                </div>
            </div>
        </div>

        <div class="row mb-3 bg-body rounded d-flex justify-content-center ">
            <form action="{{ route('pays.store') }}" method="post" class="col-md-12">
                @csrf
                <div class="col-md-10">
                    <div class="mt-4 mt-md-0 ">
                        <h5 class="font-size-14">pays:</h5>
                        <input class="form-control form-control" type="text" placeholder="nom du pays" name="pays"
                            autocomplete="off" required>
                        @if ($errors->has('code'))
                            <p class="text-danger">veuillez renseigner le nom du pays </p>
                        @endif
                    </div>
                    <div class="mt-4 mt-1">
                        <h5 class="font-size-14">code:</h5>
                        <input class="form-control form-control" type="text" placeholder="code telephonique du pays"
                            name="code" autocomplete="off" required>
                        @if ($errors->has('code'))
                            <p class="text-danger">veuillez renseigner correctement le code telephonique ex:(+00237)
                            </p>
                        @endif
                    </div>
                    <div class="mt-4 mt-1">
                        <h5 class="font-size-14">Drapeau:</h5>
                        <input class="form-control form-control" type="url" placeholder="entrer l'url du drapeau"
                            name="flag" autocomplete="off" required>
                        @if ($errors->has('code'))
                            <p class="text-danger">veuillez renseigner correctement l'url du drapeau ex:(http//)</p>
                        @endif
                    </div>
                    <div class="mt-4 mt-3 d-flex justify-content-center">
                        <input class="form-control btn-sm btn btn-primary col-md-2" type="submit" value="Enregistrer">
                    </div>
                </div>
            </form>
        </div>



    </div> <!-- container-fluid -->
    @livewireStyles
@endsection
