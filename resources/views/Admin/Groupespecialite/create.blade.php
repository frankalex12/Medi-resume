@extends('Admin.layouts')
@section('contenu')
    <div class="container">



        <div class="row">
            <div class="col-md-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Nounelle groupe de specialite</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card shadow p-3 mb-3 bg-body rounded col-md-10">
                <div class="card-body">
                    <form action="{{ route('groupespecialite.store') }}" method="post">
                        @csrf
                        <div class="col-md-10">
                            <div class="mt-4 mt-md-0 ">
                                <h5 class="font-size-14">Groupe de specialite:</h5>
                                <input class="form-control form-control-sm" type="text" placeholder="entre une nouvelle categorie"
                                    name="groupespecialite" autocomplete="off" required>
                                @if ($errors->has('code'))
                                    <p class="text-danger">veuillez entre un groupe de specialite </p>
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