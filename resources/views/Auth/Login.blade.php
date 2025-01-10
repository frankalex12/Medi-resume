<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-select-1.13.14/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">

</head>

<body>
    <div class="logo">
        <img src="{{ asset('assets/images/logo_medi_resume.png') }}" alt="">
    </div>
    <div class="contener">
        <div class="title">
            <h1>Connexion</h1>
        </div>
        {{-- <span>¨{{has('errorEmail')}}</span> --}}
        <form action="{{route('login.verif')}}" method="post">
            @csrf
            <div class="form-content">
                <div class="col">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" placeholder="exemple@gmail.com" value="" name="email">
                        @if ($errors->has('email'))
                        <small style="color: red">error</small>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="passe">Mot de passe</label>
                        <input type="password" placeholder="********" value="" name="password">
                       @if ($errors->has('password'))
                        <small style="color: red">error</small>
                       @endif
                    </div>
                </div>

            </div>
            <div class="btn-area">
                <input type="submit" value="S'inscrire" class="cnxn">
            </div>
            <div class="redirection-link">
                <span>Vous n’avez pas de compte ? Inscrivez vous en</span><a href="http://">Cliquant Ici</a>
            </div>
        </form>
    </div>
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap-select-1.13.14/dist/js/bootstrap-select.js') }}"></script>

</body>

</html>
