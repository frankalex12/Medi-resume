<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href=" {{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href=" {{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <style>
        body {

            background-image: url('assets/images/motif\ medi\ resume\ element.svg'), url('assets/images/motif\ medi\ resume\ element\ 2.svg'), url('assets/images/pattern\ element\ 1.png') , url('assets/images/pattern\ element\ 2.png');
            background-repeat: no-repeat no-repeat;
            background-position: left top,bottom right, 10vw 60.52vh, 80vw 38vh;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #F6FBFE;
            box-sizing: border-box;
            gap: 20px;
        }

        img {
            width: 70%;
        }

        p {
            color: #1171A5;

        }

        .logo1 {
            margin-bottom: 70px;
        }

        @media screen and (max-width:576px) {

            body {

                background-image: url('assets/images/motif\ medi\ resume\ element.svg'), url('assets/images/motif\ medi\ resume\ element\ 2.svg');
                background-repeat: no-repeat no-repeat;
                background-position: left top, bottom right;
                background-size: 25%, 25%;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #F6FBFE;
                box-sizing: border-box;
                gap: 20px;
            }

            p {
                margin: auto 30px;
                text-align: center;
            }

            .row {
                margin: 20px auto;
            }

            .logo1 {
                margin-bottom: 70px;
            }
        }
    </style>

    <title>@yield('title')</title>

</head>

<body class="container-fluid d-flex justify-content-center  flex-column ">

    <div class="row d-flex justify-content-center logo1">
        <img src="{{asset('assets/images/logo_medi_resume.png')}}" alt="" class="img-fluid">
    </div>

    <div class="row d-flex justify-content-center">
        <img src="{{ asset('assets/images/illustration mail sent 1.png') }}" alt="" class="img-fluid">
    </div>

    <div class="row d-flex flex-column">
        <p>Un mail de validation a été envoyé dans votre boite e-mail.</p>
        <p>Si vous ne le recevez pas, veuillez vérifier dans vos spams </p>
    </div>

    <form method="post" class="row ">
        <a href="{{route('login')}}" class="btn btn-primary px-5 btn-sm ">Connectez vous</a>
    </form>



</body>

</html>
