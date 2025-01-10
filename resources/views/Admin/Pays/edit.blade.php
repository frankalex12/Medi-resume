@extends('Admin.layouts')
@section('contenu')
    <div class="container">



        <div class="row">
            <div class="col-md-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Nouveau pays</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card shadow p-3 mb-3 bg-body rounded col-md-10">
                <div class="card-body">
                    <form action="{{ route('pays.update', ['pay'=>$pays->getId()]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="col-md-10">
                            <div class="mt-4 mt-md-0 ">
                                <h5 class="font-size-14">pays:</h5>
                                <input class="form-control form-control-sm" type="text" placeholder="nom du pays"
                                    name="pays" autocomplete="off" value="{{$pays->getName()}}">
                                @if ($errors->has('code'))
                                    <p class="text-danger">veuillez renseigner le nom du pays </p>
                                @endif
                            </div>
                            <div class="mt-4 mt-1">
                                <h5 class="font-size-14">code:</h5>
                                <input class="form-control form-control-sm" type="text"
                                    placeholder="code telephonique du pays" name="code" autocomplete="off" value="{{$pays->getCode()}}">
                                @if ($errors->has('code'))
                                    <p class="text-danger">veuillez renseigner correctement le code telephonique ex:(+00237)
                                    </p>
                                @endif
                            </div>
                            <div class="mt-4 mt-1">
                                <h5 class="font-size-14">Drapeau:</h5>
                                <input class="form-control form-control-sm" type="url"
                                    placeholder="entrer l'url du drapeau" name="flag" autocomplete="off" value="{{$pays->getFlag()}}">
                                @if ($errors->has('code'))
                                    <p class="text-danger">veuillez renseigner correctement l'url du drapeau ex:(http//)</p>
                                @endif
                            </div>
                            <div class="mt-4 mt-3 d-flex justify-content-end">
                                <input class="form-control btn-sm btn-primary col-md-2" type="submit" value="Enregistrer">
                            </div>
                        </div>


                </div>
            </div>
            </form>
        </div>



    </div> <!-- container-fluid -->
    @livewireStyles
@endsection
