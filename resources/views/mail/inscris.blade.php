<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="assets/css/icons.min.css">
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <title>medi resume</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,500;0,600;0,700;0,800;0,900;1,100&display=swap');

        * {
            font-family: poppins;
        }

        body {

            background-image:
                /*url('assets/images/motif\ medi\ resume\ element.svg')url('assets/images/motif\ medi\ resume\ element\ 2.svg'),*/
                url('assets/images/pattern\ element\ 1.png'), url('assets/images/pattern\ element\ 2.png');
            background-repeat: no-repeat no-repeat;
            background-position:
                /*left top, bottom right,*/
                10vw 60.52vh, 80vw 38vh;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            background-color: #F6FBFE;
            box-sizing: border-box;
            gap: 20px;
        }

        .logo1 {
            margin-top: 70px;
        }

        .bande {
            height: 20%;
            background-color: #1171A5;
            width: 100%;


        }

        .hx {

            color: #1171A5 !important;
            position: relative;
            font-size: 22px;


        }

        .hx::after {

            color: #1171A5 !important;
            content: "";
            display: block;
            position: absolute;
            background-color: #E7F1F6;
            height: 30px;
            width: 120%;
            z-index: -1;
            transition: transform 0.2s ease-out;
            top: 10px;
            right: -10%;


        }

        .container-fluid {
            height: 80% !important;
            /* padding-bottom: 70px !important; */
            display: flex;
            flex-direction: column;
            justify-items: center;
            gap: 10px;
            /* padding: 40px; */
        }



        .row {
            display: flex;
            /* flex-direction: column; */
            justify-content: center;

        }

        #row {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-content: center;
        }

        p {
            font-size: 18px;
            color: #1171A5;
            font-size: small;
        }

        .link {
            color: #2FD391;
        }

        .subtitle {
            margin-bottom: 40px;
        }

        @media screen and (max-width:576px) {

            body {

                background-position: 80%, center;
                position: relative;
            }

            p {
                margin: auto 30px;
                text-align: left;
                font-size: small;
                margin-bottom: 20px !important;
            }

            .hx {

                color: #1171A5 !important;
                position: relative;
                font-size: medium;
                margin-bottom: 20px;

            }

            .logo1 {
                margin-bottom: 70px;
            }

            img {
                width: 70%;
            }

            .subtitle {
                margin-bottom: 70px;
            }

        }
    </style>
</head>

<body class="">
    <div class="container-fluid">

        <div class="row ">
            <img src="{{ asset('assets/images/logo_medi_resume.png') }}" alt="" class="logo1"
                style="margin-bottom: 30px; width: 70%;">
        </div>

        <div class="row ">

            <h1 class="mb-5 hx">Confirmez votre email</h1>

        </div>

        <div class=" my-4 d-flex flex-column align-content-center " id="row">
            <p>Hello <span style="font-weight: bold;">{{ $infos['nom'] }}</span>.<br>
             Bienvenue chez <span style="font-weight: bold;">Medi resume</span></p>
            <p>votre mot de passe de connexion est : {{$infos['password']}}</p>

        </div>

        <a href="{{ route('login') }}" id="cnxn"
            style="text-decoration: none; align-self: center; background-color: #1171A5; padding: 10px 10px;color:white; border-radius: 6px ">
            connectez-vous</a>

        <div class="row subtitle">
            <h4 class="link">La team Medi resume</h4>
        </div>
    </div>

    {{-- <div class="row bande d-flex justify-content-center align-content-center ">

        <a href="" class="link"><i class="fa fa-linkedin"></i>mediresume237</a><a href="" class="ml-5 link"> <i
                class="fa fa-twitter"></i>mediresume237</a>

    </div> --}}

</body>

</html>
