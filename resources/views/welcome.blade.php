<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />

    <link rel="stylesheet" href="{{asset('assets/css/style.landing.css')}}" />

    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-xl navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src='{{asset('assets/images/logo medi-resume for l-p.png')}}' alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  justify-content-end " id="navbarNav">
                <ul class="navbar-nav ml-auto first-navb-grp mr-5">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>


                </ul>

                <ul class="navbar-nav ml-auto second-navb-grp">
                    <li class="nav-item ">
                        <a class="nav-link ml-6 mes-btn--medium mes-btn--secondary mes-btn--default mes-btn"
                            href="{{route('register.chose')}}">S'enregistrer</a>
                    </li>
                    <li class="nav-item text-white text-center">
                        <a class="nav-link cnxn" href="{{route('login')}}">Se connecter</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>





    <div class="container-fluid mx-0 px-0">

        <section class="hero-section text-left">
            <div class="row justify-content-center align-items-center mb-5 bg-custom">
                <div class="texts-bloc hs-txt-bloc col-md-4 text-right justify-content-center align-items-center">

                    <h1 class="hero-sectn-title  mb-2 ">
                        <span class="d-block">Votre Santé à</span>
                        <span class="d-block">Portée de Main</span>
                    </h1>
                    <!-- <h1 class="section-title fw-bolder">Decouvrez l’univers
                        de l’e-santé</h1> -->
                    <p class="hero-section-texts">
                        Toutes vos informations médicales conservées<br>
                        de manière sécurisée au même endroit et<br>accessibles
                        en un instant grâce à MediResume
                    </p>
                    <div id="btn-area">
                        <button class="hs-cnxn-2">Activer les services</button>
                    </div>
                </div>

                <div class="col-md-4 d-flex justify-content-center align-items-center bloc-img-hs">
                    <img src="{{asset('assets/images/hero section subject.png')}}" alt="profil medical low re view"
                        class=" section-img img-fluid" />
                </div>
            </div>
        </section>

    </div>

    <div class="container-fluid ">

        <section id="mon-profil-medical" class="text-left  ">

            <div class="row justify-content-center align-items-center img-bloc">
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <img src="{{asset('assets/images/profil medical low re view img.png')}}" alt="profil medical low re view"
                        class=" section-img img-fluid" />
                </div>
                <div class="texts-bloc col-md-4 text-right justify-content-center align-items-center">
                    <h3 class="fonc ">Mon profil médical</h3>
                    <h1 class="section-title fw-bolder">Partagez l essentiel de vos informations de santé</h1>
                    <p class="section-texts">
                        Ajoutez vos informations de santé importantes tels que :<br />
                    <ul class="section-texts-list">
                        <li>Vos maladies et sujets de santé</li>
                        <li>Vos traitements</li>
                        <li>Vos allergies</li>
                        <li>Vos vaccinations</li>
                        <li>Vos mesures de santé</li>
                    </ul>
                    </p>
                </div>
            </div>
        </section>

        <section id="Mes-Documents-de-santé" class="text-left divider ">
            <div class="row justify-content-center align-items-center">
                <div class="texts-bloc col-md-4 text-right justify-content-center align-items-center">
                    <h3 class="fonc ">Mes Documents de santé</h3>
                    <h1 class="section-title fw-bolder">Centralisez tous vos documents médicaux
                        en un seul emplacement</h1>
                    <p class="section-texts">
                        Tout comme vos professionnels de santé,<br />vous avez la possibilité de stocker tous
                        vos<br />documents importants dans Mon espace santé.

                    </p>
                </div>

                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <img src="{{asset('assets/images/Mes Documents de santé low re view img.png')}}" alt="profil medical low re view"
                        class=" section-img img-fluid" />
                </div>
            </div>
        </section>

        <section id="mon-historique-medical" class="text-left  ">
            <!-- <h2 class="my-5">Our promise:</h2> -->

            <div class="row justify-content-center align-items-center">
                <div class="col-md-4 d-flex justify-content-center align-items-center ">
                    <img src='{{asset('assets/images/profil medical low re view img.png')}}' alt="profil medical low re view"
                        class=" section-img img-fluid" />
                </div>
                <div class="texts-bloc col-md-4 text-right justify-content-center align-items-center">
                    <h3 class="fonc ">Mon historique médical</h3>
                    <h1 class="section-title fw-bolder">Conservez et explorez votre historique medical</h1>
                    <p class="section-texts">
                        L'historique de consultations et prescriptions vous offre un moyen pratique de gérer, suivre et
                        accéder à vos informations médicales passées.
                    </p>

                    <p class="section-texts">
                        Il favorise une meilleure compréhension de votre parcours médical et facilite la communication
                        avec les professionnels de santé, garantissant ainsi des soins de santé plus efficaces et
                        personnalisés.
                    </p>
                </div>
            </div>
        </section>

        <section id="Why-medi-resume" class="text-center divider ">

            <div class="row justify-content-center align-items-center">

                <h1 class="sectn-title text-center mt-2 mb-5 ">
                    <span class="d-block">Pourquoi choisir</span>
                    <span class="d-block">Medi Resume ?</span>
                </h1>

                <div class="container justify-content-center align-items-center">

                    <div class="row my-5 justify-content-center align-items-center">

                        <div class="col-lg-3 col-md-12 col-12 mx-3 justify-content-center align-items-center">

                            <div class="icon-bloc text-center">

                                <svg width="162" height="162" viewBox="0 0 162 162" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="81" cy="81" r="81" fill="#ECF7FC" />
                                    <circle cx="81" cy="81" r="64" fill="#DEF0F8" />
                                    <g clip-path="url(#clip0_748_15)">
                                        <path
                                            d="M68.1214 116.662C69.1379 116.358 70.1836 116.157 71.2421 116.061C74.7301 116.133 78.1906 115.765 81.6601 115.63C89.0674 115.352 96.4839 115.325 103.864 114.732C107.792 114.436 111.748 114.849 115.631 114.086C116.338 113.943 117.182 114.086 117.182 113.072C117.182 107.56 117.485 102.039 116.081 96.5996C115.163 93.2244 112.785 91.061 110.206 89.1041C107.578 87.1715 104.702 85.584 101.652 84.3824C100.256 83.8079 99.6597 84.14 99.0631 85.3609C96.7868 90.0557 94.4737 94.7235 92.1147 99.4093C90.1596 103.341 87.9385 107.129 85.6438 110.873C83.6979 114.041 81.8803 114.041 79.4939 111.079C75.29 105.837 70.6731 100.899 67.0016 95.2621C65.4005 93.0613 64.0754 90.6804 63.0547 88.1705C62.7151 87.1921 62.1368 87.1203 61.2189 87.4165C57.8068 88.5335 54.8272 90.6471 52.6819 93.4722C50.5367 96.2974 49.3291 99.698 49.2222 103.215C49.2222 107.776 49.3231 112.327 49.6444 116.869C49.8188 119.257 50.0483 119.499 52.4623 119.454C64.3948 119.257 76.3823 119.266 88.324 118.96C96.9979 118.736 105.672 118.889 114.337 118.709C115.037 118.553 115.771 118.632 116.42 118.934C116.42 119.427 116.071 119.427 115.759 119.445C110.068 119.715 104.369 119.903 98.6777 120.253C91.096 120.729 83.5143 121.151 75.9142 121.465C71.0127 121.654 66.0929 121.896 61.2281 122.264C58.0339 122.506 54.803 122.318 51.6271 122.865C48.2493 123.449 46.9275 122.192 46.2115 117.892C45.4442 113.017 45.0333 108.094 44.9817 103.162C44.9864 98.8337 46.316 94.6064 48.7993 91.0242C51.2826 87.4421 54.8059 84.6692 58.915 83.0628C60.1909 82.5601 61.4483 82.0036 62.7517 81.5727C64.5875 80.9623 65.8727 81.4291 66.5611 83.2065C69.8746 91.7702 75.9416 98.5655 81.5315 105.648C82.2199 106.546 82.5321 106.698 83.2481 105.576C88.1516 97.8128 92.6073 89.7871 96.5941 81.5368C97.6772 79.3285 98.5307 79.0054 100.89 79.9928C106.275 82.081 111.178 85.2035 115.31 89.1759C117.667 91.6204 119.146 94.7496 119.523 98.0898C120.34 103.476 119.78 108.862 119.936 114.248C119.982 115.702 119.229 116.25 117.77 116.357C112.391 116.779 107.012 116.671 101.633 116.725C91.252 116.824 80.8708 116.977 70.4896 117.093C69.6729 117.248 68.8266 117.094 68.1214 116.662Z"
                                            fill="#159FED" />
                                        <path
                                            d="M103.451 58.7271C103.451 65.6481 100.091 71.0969 94.5749 75.5404C90.7932 78.5924 86.3138 80.4416 82.2751 83.1526C81.7611 83.5027 81.1278 83.8258 80.7056 83.2513C80.2834 82.6768 80.8066 81.9856 81.2288 81.5458C83.5151 79.3378 85.9432 77.275 88.4984 75.3698C93.8404 71.0251 97.8792 65.8546 97.8058 58.7181C97.6773 47.4434 84.8177 39.4632 74.5375 44.7235C71.0545 46.4996 68.2457 49.3214 66.5242 52.7743C64.8026 56.2272 64.2591 60.1291 64.9732 63.9066C66.194 70.7289 69.7919 75.4506 76.7035 77.4704C77.8439 77.7436 78.9993 77.9534 80.164 78.0987C80.7055 78.1975 81.238 78.2962 81.2105 78.9964C81.1829 79.6966 80.724 80.0108 80.0539 80.0556C75.2259 80.3429 70.765 79.3555 66.9558 76.3034C57.777 68.9066 56.7765 54.9479 63.3577 46.3303C66.6254 42.0574 71.0678 39.6876 76.2997 38.5117C87.9201 35.9084 100.376 43.3142 103.139 54.4542C103.478 55.8097 103.249 57.1472 103.451 58.7271Z"
                                            fill="#159FED" />
                                        <path
                                            d="M103.606 110.585C101.863 111.007 101.248 110.145 101.367 108.189C101.505 105.837 101.156 105.648 98.76 106.106C96.603 106.519 96.2543 106.312 96.3002 104.212C96.3002 102.821 95.1529 101.268 96.181 100.128C97.209 98.9875 98.7508 99.4902 100.109 99.3376C101.468 99.185 101.101 98.0718 100.862 97.3717C100.275 95.5763 100.862 95.0108 102.698 95.1006C103.676 95.0751 104.651 94.9609 105.608 94.7595C107.177 94.562 107.7 95.3609 107.746 96.7792C107.829 99.0593 108.205 99.4722 110.399 98.8887C112.593 98.3052 112.85 99.1311 112.923 100.953C113.088 104.957 113.18 104.984 109.252 105.549C108.398 105.675 108.214 106.079 108.15 106.824C107.746 110.54 107.709 110.558 103.606 110.585Z"
                                            fill="#159FED" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_748_15">
                                            <rect width="75" height="85" fill="white" transform="translate(45 38)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </div>

                            <div class="confidentialité-bloc py-4 px-1 text-center">
                                <h4 class="sub-sectn-title text-center fw-bold">La confidentialité</h4>
                                <p class="sub-section-texts ">
                                    Les proféssionnels de santé sont créés<br />de facon unique dans la plateforme
                                    et<br />peuvent
                                    etre rattachés à un ou plusieurs<br />centres hospitaliers afin de pouvoir
                                    interagir<br />avec
                                    les patients
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-12 col-12 mx-3 justify-content-center align-items-center">

                            <div class="icon-bloc text-center">

                                <svg width="162" height="162" viewBox="0 0 162 162" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="81" cy="81" r="81" fill="#ECF7FC" />
                                    <circle cx="81" cy="81" r="64" fill="#DEF0F8" />
                                    <g clip-path="url(#clip0_748_16)">
                                        <path
                                            d="M130.917 75.9818C130.808 75.5501 130.552 75.1695 130.192 74.9051C129.832 74.6407 129.392 74.5087 128.945 74.5318C127.768 74.4392 126.602 74.2644 125.435 74.0999C117.722 72.9789 111.299 69.6675 106.653 63.2402C104.763 60.6281 103.143 57.8103 100.685 55.5993C96.8958 52.1851 91.4852 53.378 89.6473 58.1291C88.8877 60.2774 88.2975 62.4814 87.8817 64.721C87.2313 67.6622 86.7048 70.7062 84.1751 72.9481C83.9892 72.097 83.9026 71.2274 83.917 70.3566C83.7105 65.2867 84.4021 60.1859 83.4522 55.1468C82.9979 52.6787 81.1498 51.5887 78.7234 52.1543C76.2969 52.7199 75.8115 54.3858 75.9664 56.2678C76.3794 61.749 76.9989 67.22 77.4945 72.7218C77.4945 73.2257 77.8972 73.8222 77.4945 74.1718C77.0918 74.5215 76.369 74.0999 75.925 73.7605C74.1297 72.3132 72.89 70.2939 72.4145 68.0427C71.4853 64.6491 71.2684 61.06 69.7816 57.8103C67.7165 53.3575 62.7294 52.4216 59.4563 55.9901C58.0279 57.4857 56.8246 59.1796 55.8838 61.0189C54.1691 64.7404 51.1306 67.6971 47.3551 69.3179C45.5895 70.0686 43.793 70.7473 42.0067 71.4364C39.0434 72.5676 35.8116 72.9172 32.9411 74.3158C30.5457 75.4882 30.4424 77.113 32.6313 78.5836C35.7794 80.561 39.4829 81.4768 43.194 81.1957C43.9271 81.1957 45.0423 80.7843 45.2591 81.9155C46.0851 86.2964 49.3894 86.8517 52.9413 86.9032C54.6553 86.9032 56.3176 86.6563 57.7941 88.1475C58.744 89.1142 60.3031 88.7954 61.6247 88.4971C63.5293 88.2041 65.3471 87.5024 66.9524 86.4404C68.1399 85.5354 69.0177 86.6049 69.6991 87.0986C70.68 87.7979 69.3789 88.2298 69.0588 88.7645C68.7388 89.2993 68.2534 89.7929 67.923 90.3996C65.8579 94.0401 68.8731 99.655 73.0032 99.8607C72.6211 98.9763 71.702 98.6884 71.0722 98.1022C68.7284 95.9015 67.5514 92.9603 69.8436 90.6156C71.2788 89.1347 72.652 87.5305 74.7584 86.9649C75.7083 86.6975 76.1834 86.101 75.8839 85.1652C75.5845 84.2294 74.7998 84.507 74.0667 84.7744C72.0946 85.5046 70.3082 85.4634 69.0485 83.417C68.5322 82.5737 67.9025 82.4709 67.0558 83.1907C65.2091 84.8116 62.8368 85.7137 60.3754 85.7308C60.0243 85.7308 59.6217 86.029 59.3429 85.6794C59.0641 85.3297 59.2809 84.8361 59.5803 84.507C60.2618 83.746 60.9328 82.8925 59.9726 82.0286C59.0123 81.1648 58.0934 81.6584 57.2055 82.3886C56.4934 82.9724 55.6649 83.3989 54.7749 83.64C53.8849 83.8811 52.9537 83.9313 52.0429 83.7872C51.4452 83.796 50.8561 83.6452 50.3368 83.3504C49.8174 83.0556 49.3867 82.6276 49.0897 82.1109C48.5012 80.6712 50.1224 80.5786 50.7832 79.9616C51.444 79.3446 52.5075 78.5219 51.8157 77.3701C51.5449 76.9171 51.1051 76.5893 50.5924 76.4583C50.0797 76.3273 49.5357 76.4037 49.0794 76.6708C48.743 76.8061 48.3981 76.9194 48.0469 77.0102C44.495 77.9768 42.3062 77.8946 39.983 76.6194C41.5008 76.1875 42.9257 75.8481 44.3196 75.3956C49.5545 73.6577 54.6447 71.642 57.8662 66.7881C59.2911 64.6491 60.6954 62.4929 62.079 60.3196C62.6675 59.4043 63.3594 58.5508 64.5262 58.777C65.6929 59.0033 65.7651 60.155 66.0026 61.0497C66.7357 63.8161 67.3553 66.6235 68.1297 69.3796C69.3067 73.5857 71.3407 77.3907 75.7082 78.7995C78.3102 79.6325 78.6716 81.062 78.8058 83.2627C79.033 87.9521 79.3222 92.6415 79.7559 97.3103C80.0553 100.519 80.1792 100.395 76.9061 101.146C74.4694 101.681 71.9498 102.072 69.7505 103.388C68.9787 103.769 68.3565 104.396 67.9824 105.169C67.6084 105.942 67.5039 106.817 67.6855 107.656C67.9953 109.363 69.3066 109.908 70.7831 110.402C73.4573 111.296 76.0594 110.515 78.651 110.134C79.8384 109.97 80.365 110.031 80.7161 111.317C81.0671 112.602 80.8605 113.24 79.5389 113.61C78.0417 114.021 76.5757 114.556 75.1302 115.112C74.6593 115.234 74.2412 115.506 73.9394 115.887C73.6376 116.267 73.4685 116.735 73.4574 117.22C73.4574 118.444 74.3144 118.875 75.254 119.143C76.5175 119.548 77.8126 119.847 79.1259 120.038C80.396 120.181 81.4182 120.202 81.4801 121.93C81.5421 123.657 80.303 123.812 79.0639 124.1C78.4139 124.176 77.7717 124.307 77.1436 124.49C76.6798 124.611 76.2593 124.859 75.9306 125.206C75.6019 125.554 75.3782 125.986 75.285 126.455C75.2334 126.804 75.574 127.195 75.956 127.483C76.9163 128.295 78.145 129.18 79.3634 128.789C81.542 128.09 81.9653 131.699 82.6674 130.753C83.9581 129.026 85.3417 129.427 86.7975 129.283C87.5616 129.221 88.3567 129.92 89.699 129.18C88.3083 128.857 86.8974 128.626 85.4759 128.491C83.9994 128.491 83.6382 127.863 83.6072 126.434C83.6072 124.675 84.1026 123.935 85.9921 123.884C87.4583 123.884 89.5441 123.74 89.73 121.878C89.9468 119.75 87.7373 119.513 86.2402 119.235C84.743 118.958 83.9272 118.783 84.0511 117.024C84.175 115.43 83.9686 114.063 86.2092 113.651C88.8526 113.294 91.3918 112.39 93.664 110.998C94.1057 110.667 94.4392 110.213 94.6229 109.693C94.8066 109.173 94.8322 108.611 94.6965 108.077C94.5933 106.936 93.8291 106.453 92.8276 106.165C90.8809 105.704 88.8599 105.648 86.8906 106C85.9406 106.113 84.8254 106.864 84.5054 105.147C84.416 104.864 84.395 104.565 84.4436 104.273C84.4922 103.981 84.6091 103.705 84.7852 103.466C84.9612 103.228 85.1914 103.034 85.4567 102.901C85.722 102.767 86.0151 102.698 86.3123 102.699C88.0664 102.387 89.7927 101.937 91.4749 101.352C99.064 98.7295 101.16 93.7316 97.3192 87.4174C99.1777 86.7695 101.336 86.9032 102.874 85.4943C103.214 85.1755 103.634 84.9531 104.09 84.85C104.545 84.747 105.02 84.767 105.466 84.9081C107.355 85.2269 109.596 85.4737 110.566 83.3553C111.341 81.7201 112.291 81.823 113.664 82.0698C116.538 82.6154 119.495 82.5502 122.342 81.8786C125.189 81.2069 127.861 79.9439 130.184 78.1722C130.512 77.9221 130.758 77.5796 130.889 77.1891C131.019 76.7986 131.029 76.378 130.917 75.9818ZM79.4461 107.244C77.9504 107.63 76.4046 107.786 74.8617 107.707C73.8292 107.707 72.8896 107.707 72.012 107.707C71.4854 107.707 70.9793 107.584 70.8037 106.967C70.754 106.707 70.8067 106.438 70.951 106.216C71.0952 105.994 71.3198 105.835 71.5781 105.774C74.1725 104.769 76.906 104.166 79.6836 103.985C80.5406 103.913 80.3546 104.807 80.3443 105.332C80.3339 106.072 80.6954 107.008 79.4461 107.244ZM80.6954 117.765C80.3753 118.557 79.5803 118.248 78.8575 118.351C77.732 118.084 75.76 118.351 75.5741 117.199C75.3883 116.047 77.4636 115.986 78.6717 115.708C79.3015 115.554 80.0862 114.844 80.6644 115.708C80.8357 116.023 80.928 116.374 80.9334 116.733C80.9388 117.091 80.8571 117.445 80.6954 117.765ZM81.1393 127.843C80.7779 128.604 79.7764 128.1 79.0743 127.997C77.7423 127.791 76.2247 127.658 75.9149 125.889H75.987C76.9317 125.561 77.8977 125.296 78.8782 125.097C79.6216 124.984 80.6645 124.634 81.0466 125.56C81.3448 126.288 81.3666 127.1 81.1083 127.843H81.1393ZM85.3314 120.572C86.1471 120.922 88.0573 120.757 87.9541 121.899C87.8508 123.04 85.8889 122.866 84.7532 123.133C83.7929 123.359 83.5142 122.68 83.5038 121.806C83.4729 120.675 84.144 120.48 85.3004 120.572H85.3314ZM85.001 109.024L89.854 108.119C90.8349 108.232 91.7537 107.923 91.9808 108.674C92.208 109.425 91.3613 109.959 90.7212 110.216C89.0898 110.902 87.4308 111.502 85.7443 112.016C85.0629 112.232 84.1337 112.356 84.0201 111.286C83.8962 110.422 83.5141 109.281 84.9699 109.024H85.001ZM114.005 79.7148C113.137 79.5914 112.28 79.3549 111.413 79.1698C108.987 78.6453 108.687 78.8407 108.615 81.3088C108.615 82.2343 108.068 82.4091 107.345 82.4811C106.306 82.5238 105.286 82.1996 104.464 81.5659C103.504 80.9694 102.337 80.7637 101.821 82.0184C100.923 84.2088 99.0433 84.5379 97.1331 84.6613C95.0731 84.9645 92.9699 84.7561 91.0103 84.0546C90.2256 83.7152 89.317 83.6432 88.9453 84.6407C88.5736 85.6383 89.4617 85.8851 90.1122 86.245C92.1772 87.3762 94.2421 88.4766 95.3882 90.739C95.834 91.4721 96.0099 92.3369 95.8856 93.185C95.7612 94.0331 95.3445 94.8117 94.7068 95.3873C92.1152 97.9685 88.7697 98.7912 85.3108 99.3671C84.3918 99.5214 84.3403 98.9969 84.3506 98.3387C84.3506 92.1685 84.3506 85.9982 84.3506 79.8279C84.3472 79.4947 84.4435 79.1679 84.6274 78.8895C84.8113 78.6111 85.0745 78.3936 85.3831 78.2648C89.0692 76.1155 90.4734 72.4956 91.4852 68.67C92.1667 66.1196 92.6416 63.5281 93.2715 60.9572C94.1078 57.5635 96.0595 56.9465 98.6098 59.3426C100.613 61.2246 101.862 63.703 103.483 65.8728C108.088 72.0431 114.356 75.663 121.707 77.5861C121.996 77.658 122.275 77.73 122.554 77.8226C122.554 77.8226 122.616 77.9357 122.771 78.2339C120.037 79.5096 117.007 80.0215 114.005 79.7148Z"
                                            fill="#159FED" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_748_16">
                                            <rect width="100" height="79" fill="white" transform="translate(31 52)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </div>

                            <div class="centres-Hospitaliers-bloc py-4 px-1 text-center">
                                <h4 class="sub-sectn-title text-center fw-bold">Les centres Hospitaliers</h4>
                                <p class="sub-section-texts ">Medi resume prend en charge la création des centres
                                    hospitaliers réels et officiels dans la plateforme, et leur permet de superviser
                                    l’inter action des personnels de santé avec les patients
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-12 col-12 mx-3 justify-content-center align-items-center">

                            <div class="icon-bloc text-center">

                                <svg width="162" height="162" viewBox="0 0 162 162" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="81" cy="81" r="81" fill="#ECF7FC" />
                                    <circle cx="81" cy="81" r="64" fill="#DEF0F8" />
                                    <g clip-path="url(#clip0_748_17)">
                                        <path
                                            d="M72.9 51.6492C72.9392 50.5821 73.3898 49.5707 74.1588 48.8236C74.9279 48.0765 75.9568 47.6506 77.0331 47.634C79.1769 47.5462 81.3161 47.895 83.3186 48.659C84.463 49.0486 85.0266 48.7522 85.7013 47.8119C87.4093 45.4993 89.5783 43.983 92.6014 43.9915C94.4828 43.9915 96.2876 44.7317 97.6196 46.0498C98.9516 47.3678 99.7021 49.1561 99.7066 51.0224C99.7664 54.0041 99.7665 54.0041 102.508 55.0715C103.703 55.5289 104.899 56.0033 106.086 56.4861C106.997 56.7869 107.774 57.3927 108.283 58.1995C108.793 59.0064 109.003 59.9639 108.879 60.908C108.827 61.3993 108.827 61.9499 108.195 62.0346C107.563 62.1193 107.538 61.6195 107.427 61.1875C107.229 60.5187 106.849 59.9174 106.327 59.4507C105.805 58.984 105.163 58.6703 104.472 58.5446C102.474 57.9855 100.501 57.3332 98.4941 56.7657C96.7861 56.2744 96.137 55.4273 96.7006 53.5467C97.5546 50.6158 96.4958 48.0999 94.2925 47.2443C92.2856 46.4735 89.792 47.7102 88.3145 50.243C88.0327 50.709 87.8362 51.2257 87.5544 51.7C86.8456 52.886 85.8978 53.3942 84.4801 52.8436C82.7721 52.166 81.0642 51.5052 79.3562 50.9207C77.0419 50.1414 76.6404 50.3278 75.3679 52.5726C77.2638 53.0469 78.0751 54.3599 78.4253 56.1812C78.8181 58.1973 79.4244 60.171 79.8856 62.1786C79.9484 62.534 80.1142 62.8636 80.363 63.1269C80.6118 63.3902 80.9325 63.5758 81.286 63.661C85.556 65.0333 89.9114 66.3887 94.1728 67.8965C94.6838 68.1409 95.2646 68.2019 95.8159 68.069C96.3672 67.9362 96.8549 67.6177 97.196 67.168C98.7161 65.5924 100.407 64.1862 102.012 62.7038C102.358 62.3609 102.8 62.1303 103.28 62.0425C103.761 61.9548 104.257 62.0141 104.703 62.2125C108.119 63.3984 111.535 64.4827 114.95 65.6009C117.068 66.304 117.427 66.9901 116.658 69.1587C114.797 74.4163 112.915 79.6683 111.013 84.9146C108.651 91.4824 106.28 98.0446 103.9 104.601C102.192 109.396 100.398 114.173 98.7161 119.002C98.2122 120.416 97.4265 120.696 96.043 120.221C85.8862 116.539 75.7237 112.869 65.5556 109.209C64.582 108.862 63.6 108.523 62.6264 108.167C62.2336 108.032 61.6187 107.956 61.7724 107.43C61.9603 106.778 62.5581 107.083 63.0021 107.227C65.7861 108.074 68.5787 109.006 71.3542 109.921C79.3248 112.524 87.2697 115.133 95.189 117.748C96.2565 118.104 96.7945 117.816 97.1276 116.799C100.06 107.871 103 98.9425 105.949 90.0141C107.857 84.2539 109.767 78.4965 111.68 72.7419C113.012 68.7266 112.85 69.1417 108.904 67.5576C104.959 65.9736 102.354 66.8207 100.074 70.0312C99.7262 70.4551 99.3373 70.8438 98.9125 71.1917C98.3087 71.8613 97.5059 72.3231 96.6201 72.5103C95.7343 72.6976 94.8115 72.6007 93.985 72.2336C88.861 70.4632 83.6175 69.0062 78.3911 67.5238C77.6785 67.363 77.0306 66.995 76.53 66.4668C76.0295 65.9386 75.6992 65.2743 75.5814 64.5589C75.1032 62.5513 74.4882 60.5861 74.0356 58.5785C73.9652 58.1293 73.7596 57.7118 73.4456 57.3807C73.1316 57.0496 72.7242 56.8204 72.2766 56.7233C69.9879 56.0795 67.7163 55.3764 65.4446 54.7072C64.5223 54.4362 63.9928 54.7072 63.7367 55.7153C59.814 71.2736 55.8599 86.8262 51.8746 102.373C51.5074 103.813 51.7038 104.508 53.1898 105.135C65.8915 110.505 78.5647 115.935 91.2095 121.424C91.8671 121.704 92.7637 121.806 93.0455 123C89.843 122.051 86.82 121.196 83.814 120.264C72.4274 116.729 61.0664 113.176 49.7311 109.607C44.5559 107.989 44.4534 107.913 45.7174 102.619C49.0138 88.7096 52.6348 74.885 56.4692 61.1113C57.3232 58.0787 58.2539 55.063 59.1592 52.0474C60.2181 48.515 61.2344 48.0067 64.7187 49.1079C67.4514 49.955 70.0904 51.1156 72.9256 51.6492L73.0707 51.717L72.9 51.6492Z"
                                            fill="#159FED" />
                                        <path d="M72.9 51.6493L73.028 51.7255L72.8829 51.6578L72.9 51.6493Z"
                                            fill="#159FED" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_748_17">
                                            <rect width="72" height="79" fill="white" transform="translate(45 44)" />
                                        </clipPath>
                                    </defs>
                                </svg>


                            </div>

                            <div class="carnet-universel-bloc py-4 px-1 text-center">
                                <h4 class="sub-sectn-title text-center fw-bold">Le carnet universel</h4>
                                <p class="sub-section-texts ">
                                    Medi resume permet à chaque patient davoir un unique carnet de santé numérique
                                    universel i.e exploitable dans tous les centres hospitaliers existants et inscrits
                                    dans la plateforme
                                </p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section id="Decouvrez-medi-resume" class="text-left">
            <div class="row justify-content-center align-items-center">
                <div class="texts-bloc col-md-4 text-right justify-content-center align-items-center">

                    <h1 class="sectn-title-2  mb-2 ">
                        <span class="d-block">Decouvrez l’univers</span>
                        <span class="d-block">de l’e-santé</span>
                    </h1>
                    <!-- <h1 class="section-title fw-bolder">Decouvrez l’univers
                        de l’e-santé</h1> -->
                    <p class="section-texts">
                        Cliquez sur le bouton suivant pour vivre l’expérience<br>de la santé intélligente grace à medi
                        resume
                    </p>
                    <div id="btn-area">
                        <button class="cnxn-2">S'inscrire</button>
                    </div>
                </div>

                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <img src="{{asset('assets/images/discover medi resume section subject.png')}}" alt="profil medical low re view"
                        class=" section-img img-fluid" />
                </div>
            </div>
        </section>

        <section id="Nous-contacter" class="py-5 divider">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-8 mx-auto py-5 justify-content-center align-items-center">
                        <h2 class="sectn-title text-center mb-4">Nous contacter</h2>
                        <form class="">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="name" placeholder="Entrez votre nom">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse e-mail</label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="Entrez votre adresse e-mail">
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Sujet</label>
                                <input type="text" class="form-control" id="subject"
                                    placeholder="Entrez le sujet du message">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="5"
                                    placeholder="Entrez votre message"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary sbmt-btn text-center">Envoyer le message</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>



        <section id="Faq" class="text-left ">

            <div class="row justify-content-center align-items-center">

                <h1 class="sectn-title text-center mt-2 mb-5 ">
                    <span class="d-block">Réponses aux questions</span>
                    <span class="d-block">les plus fréquentes</span>
                </h1>

                <div class="texts-bloc col-md-6 justify-content-center align-items-center mt-3">

                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed .custom-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Comment créer mon profil de santé ?
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                          </div>
                        </div>

                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Quels sont les avantages d'utiliser un carnet de santé numérique ?
                            </button>
                          </h2>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                          </div>
                        </div>

                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Quelles informations puis-je stocker dans mon carnet de santé numérique ?
                            </button>
                          </h2>
                          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                          </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                Ma vie privée et la sécurité de mes données sont-elles protégées ?
                              </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                Ma vie privée et la sécurité de mes données sont-elles protégées ?
                              </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSix">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                Ma vie privée et la sécurité de mes données sont-elles protégées ?
                              </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>

    <footer class=" text-light py-4">
        <div class="blc container my-auto">
            <div class="row ">
                <div class="ft-logo-bloc col-lg-8">
                    <img src="{{asset('assets/images/logo medi-resume for footer.png')}}" alt="Logo" class="ft-logo img-fluid">
                    <h5>Douala, Cameroun.</h5>
                    <h5>mediresume@gmail.com</h5>
                    <h5>+237 690 553 705 - 675 511 537</h5>
                </div>
                <div class="links-bloc col-lg-2">
                    <h4 class="mb-3">Liens</h4>
                    <p><a href="">Se connecter</a></p>
                    <p><a href="">A propos de nous</a></p>
                    <p><a href="">S’inscrire</a></p>

                </div>
                <div class="links-bloc-2 col-lg-2">
                    <h4 class="mb-3">Resources</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a href="">Contactez nous</a></li>
                        <li class="mb-3"><a href="">FAQs</a></li>

                    </ul>
                </div>
            </div>

            <div class="row text-center mt-5 cpr">
                <h5>
                    @ 2023 MediResume. All Rights Reserved
                </h5>
            </div>

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>
</body>

</html>
