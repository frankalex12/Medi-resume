<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-select-1.13.14/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {

            background-image: url('assets/images/motif\ medi\ resume\ element.svg'), url('assets/images/motif\ medi\ resume\ element\ 2.svg'), url('assets/images/pattern\ element\ 1.png'), url('assets/images/pattern\ element\ 2.png');
            background-repeat: no-repeat no-repeat;
            background-position: left top, bottom right, 10vw 60.52vh, 80vw 38vh;
            background-size: 10%;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            background-color: #F6FBFE;
            box-sizing: border-box;
            /* gap: 10px; */
        }

        .logo {
            transform: scale(0.7);
            margin-top: 30px;

        }

        ::-webkit-scrollbar {
            width: 8px;
            display: none;
        }

        .contener {
            display: flex;
            height: 61.4vh;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-bottom: 5vh;
            overflow-y: scroll;
            padding-top: 100px;
        }

        .title {
            display: flex;
            margin-top: 30px;
            margin-bottom: 20px;
            position: relative;
        }

        .title h1 {
            color: #1171A5;

        }

        .title span {
            color: #159FED;
            position: absolute;
            right: -115px;
        }

        .form-content {
            display: flex;
            flex-wrap: wrap;
            gap: 2vw;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 1.17vh;
            margin-bottom: 3.31vh;

        }

        label {
            color: #1171A5;
            margin-bottom: 2px;
            font-weight: bold;

        }

        select.selectpicker,
        input[type=number],
        input[type=date],
        input[type=text],
        input[type="email"],
        input[type=tel],
        [type=password] {

            border-radius: 6px;
            border: 1px solid #159eed76 !important;
            background-color: #159eed13 !important;
            height: 38px;
            width: 300px;
            padding: 0px 5px;
        }

        ::placeholder {

            color: #1171a53a;
        }

        input[type=text]:focus {

            border: none;
            outline: none;
            border-radius: 6px;
            border: 4px solid #a5daf8;
            background-color: #159eed13;
            height: 38px;
            padding: 0px 5px;

        }

        input[type=password]:focus {

            border: none;
            outline: none;
            border-radius: 6px;
            border: 4px solid #a5daf8;
            background-color: #159eed13;
            height: 38px;
            padding: 0px 5px;

        }

        ::placeholder {
            padding-left: 10px;
            color: #1171a53a;
        }

        input[value=""] {
            color: #1171A5 !important;
        }

        /* .form-group:nth-child(3) {
            display: flex;
            flex-direction: column;
            margin-bottom: 0 !important;
            gap: 1.17vh;
        } */

        .btn-area {
            display: flex;
            justify-content: center;
            margin: 40px auto;
        }

        .redirection-link {
            display: flex;
            justify-content: center;
            gap: 3px;
        }

        .redirection-link a {
            color: #159FED;
            text-decoration: none;
        }

        .cnxn {
            display: block;
            border: none;
            background-color: #159FED;
            border-radius: 10px;
            box-sizing: border-box;
            font-size: 15px;
            font-weight: 600;
            color: #ffffff;
            cursor: pointer;
            touch-action: manipulation;
            height: 45px;
            width: 353px;
        }

        @media screen and (max-width:800px) {
            body {
                background-size: 12%;
            }

            .form-content {
                flex-direction: column;
                align-items: center;
            }

            .contener {
                overflow-y: scroll;
                width: 375px;
            }



            .title {
                display: flex;
                margin-top: 30px;
                margin-bottom: 6.51vh;
                position: relative;
            }

            .redirection-link {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 3px;
            }

            .cnxn {
                width: 280px;
            }


        }
    </style>
</head>

<body>
    <div class="logo">
        <img src="{{ asset('assets/images/logo_medi_resume.png') }}" alt="">
    </div>
    <div class="title">
        <h1 style="text-align: center">Informations Supplémentaires</h1>
    </div>

    <p style="color: #1171A5; font-weight: bold; text-align: center;">Veuillez remplir les informations supplémentaires ci dessous afin de
        terminer l’inscription du centre</p>

    <div class="contener">
        <form action="{{route('user.continu.store')}}" method="post">
            @csrf
            <div class="form-content">
                <div class="col">
                    <div class="form-group">
                    <label for="cni">Numero CNI</label>
                        <input type="number" placeholder="102020045" value="" name="cni">
                        @if ($errors->has('cni'))
                            <small style="color: red">error</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="naissance">Date de naissance</label>
                        <input type="date" placeholder=" Jean Bernard" value="" name="naissance">
                        @if ($errors->has('naissance'))
                            <small style="color: red">error</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="specialites">Groupe Sanguin</label>
                        <select class="selectpicker form-control" data-style="btn-primary"  data-live-search="true"
                            name="Groupe">

                            <option value="O-" style="color: #1171A5">O-</option>
                            <option value="O+" style="color: #1171A5">O+</option>
                            <option value="A" style="color: #1171A5">A</option>
                            <option value="A+" style="color: #1171A5">A+</option>
                            <option value="A-" style="color: #1171A5">A-</option>
                            <option value="B+" style="color: #1171A5">B+</option>
                            <option value="B+" style="color: #1171A5">B+</option>
                            <option value="AB+" style="color: #1171A5">AB+</option>
                            <option value="AB-" style="color: #1171A5">AB-</option>

                        </select>
                        {{-- @if ($errors->has('categorie')) --}}
                        {{-- <small style="color: red">error</small> --}}
                        {{-- @endif --}}
                    </div>


                    <div class="form-group">
                        <label for="Profession">Profession</label>
                        <input type="text" placeholder="etudiant" value="" name="profession">
                        @if ($errors->has('profession'))
                            <small style="color: red">error</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="Numero">Numero à prevenir en cas D'ugence</label>
                        <input type="text" placeholder="+237699803037" value="" name="numero">
                        @if ($errors->has('numero'))
                            <small style="color: red">error</small>
                        @endif
                    </div>
                </div>
                <div class="col">


                    <div class="form-group">
                        <label for="souscategorie">Sexe</label>
                        <select class="selectpicker form-control" data-style="btn-primary" data-live-search="true"
                            name="sexe">

                            <option value="Masculin" style="color: #1171A5">Masculin</option>
                            <option value="Féminin" style="color: #1171A5">Féminin</option>

                        </select>
                        {{-- @if ($errors->has('categorie')) --}}
                        {{-- <small style="color: red">error</small> --}}
                        {{-- @endif --}}
                    </div>

                    <div class="form-group">
                        <label for="pays">Pays</label>
                        <select class="selectpicker form-control" data-style="btn-primary" data-live-search="true"
                            name="pays">
                            @foreach ($pays as $pay)
                            <option value="{{$pay->getId()}}" style="color: #1171A5">{{$pay->getName()}}</option>
                            @endforeach
                        </select>
                        {{-- @if ($errors->has('categorie')) --}}
                        {{-- <small style="color: red">error</small> --}}
                        {{-- @endif --}}
                    </div>
                    <div class="form-group">
                        <label for="ville">Ville</label>
                        <select class="selectpicker form-control" data-style="btn-primary" data-live-search="true"
                            name="ville">
                            @foreach ($villes as $ville)
                            <option value="{{$ville->getId()}}" style="color: #1171A5">{{$ville->getName()}}</option>
                            @endforeach
                        </select>
                        {{-- @if ($errors->has('categorie')) --}}
                        {{-- <small style="color: red">error</small> --}}
                        {{-- @endif --}}
                    </div>
                    <div class="form-group">
                        <label for="ville">Quartier</label>
                        <select class="selectpicker form-control" data-style="btn-primary" data-live-search="true"
                            name="quartier">
                            @foreach ($quartiers as $quatier)
                            <option value="{{$quatier->getId()}}" style="color: #1171A5">{{$quatier->getName()}}</option>
                            @endforeach
                        </select>
                        {{-- @if ($errors->has('categorie')) --}}
                        {{-- <small style="color: red">error</small> --}}
                        {{-- @endif --}}
                    </div>

                    <div class="form-group">
                        <label for="Localisation">Localisation</label>
                        <input type="text" placeholder="rond poulin, derriere la boulangerie" value="" name="localisation">
                        @if ($errors->has('localisation'))
                            <small style="color: red">error</small>
                        @endif
                    </div>

                </div>
            </div>
            <div class="btn-area">
                <input type="submit" value="Continuez" class="cnxn">
            </div>

        </form>
    </div>
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <!-- Jq vector map -->
    {{-- <script src="{{ asset('assets/libs/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
 --}}

    {{-- <script src="{{ asset('assets/js/app.js') }}"></script> --}}
    <script src="{{ asset('assets/bootstrap-select-1.13.14/dist/js/bootstrap-select.js') }}"></script>

</body>

</html>
