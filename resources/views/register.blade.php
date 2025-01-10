<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
            integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />

    <link rel="stylesheet" href="{{asset('assets/css/choose.css')}}" />

    <title>Document</title>
</head>

<body>

    <div class=" container-fluid py-auto">

        <div class="main-bloc row justify-content-center align-items-center">

            <div class=" content-bloc pt-3 col-lg-6 col-12 d-flex text-center justify-content-space-between align-items-center flex-column">

                <div class="bloc-logo">
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="/en/"><img src="{{asset('assets/images/logo medi-resume for s-v.png')}}" alt="MediResume logo" class="logo">
                        </a>
                    </div>
                </div>

                <div class="status_content d-flex justify-content-center align-items-center flex-column">
                    <h2 class="mb-5 ">Quel est votre statut ?</h2>

                    <div class="status_cardButton shadow-sm p-0 mb-4 card">
                        <div class="p-0 card-body">
                            <a class="btn btn-link text-decoration-none d-block fs-5 p-3"
                                href="{{route('user.register')}}">
                                <span class="d-flex align-items-center"><img src="{{asset('assets/images/patient-status-icon.png')}}"
                                        alt="patient status" class="d-none d-sm-block">
                                    <span class="d-inline-block flex-fill text-start px-4">
                                        <span class="status-title undefined d-block text-ternary ff-secondary fs-6 fw-bold">Patient
                                        </span>
                                        <span class=" d-block fs-6 fw-normal ff-secondary"
                                            style="color: rgb(39, 43, 43);">Je crée mon
                                            profil</span></span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 16 16" width="1em" height="1em" fill="currentColor"
                                        class="flex-grow-1 text-ternary">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                        </path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="status_cardButton shadow-sm p-0 card">
                        <div class="p-0 card-body"><a class="btn btn-link text-decoration-none d-block fs-5 p-3"
                                href="{{route('hopital.create')}}"><span class="d-flex align-items-center"><img
                                        src="{{asset('assets/images/centre-hospitalier-status-icon.png')}}" alt="centre-hospitalier status"
                                        class="d-none d-sm-block"><span
                                        class="d-inline-block flex-fill text-start px-4"><span
                                            class="status-title undefined d-block text-ternary ff-secondary fs-6 fw-bold">Centre
                                            hospitalier</span><span class="d-block fs-6 fw-normal ff-secondary"
                                            style="color: rgb(39, 43, 43);">J'enregistre le centre</span></span><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em"
                                        fill="currentColor" class="text-ternary flex-grow-1">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                        </path>
                                    </svg></span></a></div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
</body>

</html>
