@extends('Admin.layouts')
@section('contenu')
    <div class="container">



        <div class="row">
            <div class="col-md-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Modifier la specialite</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card shadow p-3 mb-3 bg-body rounded col-md-10">
                <div class="card-body">
                    <form action="{{ route('specialite.update', ['specialite' => $specialite->getId()]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="col-md-10">
                            <div class="mt-4 mt-md-0 mb-5 ">
                                <h5 class="font-size-14">Specialite:</h5>
                                <input class="form-control form-control" type="text" placeholder="nom de la region"
                                    name="specialite" autocomplete="off" required value="{{$specialite->getName()}}">
                                @if ($errors->has('specialite'))
                                    <p class="text-danger">veuillez renseigner une specialite </p>
                                @endif
                            </div>

                                <select class="selectpicker form-control form-control" data-live-search="true" name="groupespecialite">
                                    @foreach ( $groupespecialites as $groupespecialite )
                                    <option value="{{$groupespecialite->getId()}}">{{$groupespecialite->getName()}}</option>
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