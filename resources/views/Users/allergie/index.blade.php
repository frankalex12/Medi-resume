@extends('Users.Acuiel')
@section('sous')
    <!-- debut third-section -->

    <div class="container-fluid col-lg-12 col-md-10 ">

        <div class=" row d-flex   justify-content-center ">
            <div class="col-md-8 d-flex   justify-content-between">
                <h4 class=""> Allergies</h4>
                <a href="{{route('allergie.create')}}" class="btn btn-primary "> ajouter</a>
            </div>
        </div>
        @foreach (Auth::user()->patient->allergies as $allergie)
            <div class="row third-section d-flex justify-content-center ">
                <div class=" text-white d-flex justify-content-between col-md-2 px-5 py-3 border my-1">
                    <a href="{{ route('allergie.edit', ['allergie' => $allergie->id]) }}">
                        <h4> {{ $allergie->name }}</h4>
                    </a>
                    <form action="{{ route('allergie.destroy', ['allergie' => $allergie->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="dropdown-item text-danger text-center"><i
                                class="far fa-trash-alt fa-lg"></i></button>
                    </form>
                </div>
            </div>
        @endforeach

    </div>

    <!-- fin third-section -->
@endsection
