<!doctype html>
<html lang="es" data-bs-theme="auto">

<head>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Eolica IT">
    <title>Catálogo multimedia interactivo para una memoria colectiva de la FES Acatlán</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/"> -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">


    <style>
        body {
            background: #fff;
        }


        .button-negro {
            display: inline-block;
            padding: 1em 2em;
            background: black;
            color: white;
            border-radius: 2em;
            border: none;
            outline: 2px solid black;
            outline-offset: 3px;
        }

        .button-blanco {
            display: inline-block;
            padding: 1em 2em;
            background: white;
            color: black;
            border-radius: 2em;
            border: none;
            outline: 2px solid black;
            outline-offset: 3px;
        }



        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="checkout.css" rel="stylesheet">
</head>

<body>
    <!-- <body class="bg-body-tertiary"> -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check2" viewBox="0 0 16 16">
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>


    <div class="container">
        <main>
            <!-- <div class="row g-3">
            <div class="col-sm-6"> -->


            <div class="row g-3 pt-5">
                <div class="col-sm-3 text-center"> <img class="d-block mx-auto mb-4" src="assets/img/FESA.png" alt="" width="180" height="180"></div>
                <div class="col-sm-6 text-center"> <img class="d-block mx-auto mb-4" src="assets/img/logo-paidi-front.jpg" alt="" width="70%"></div>
                <div class="col-sm-3"> <img class="d-block mx-auto mb-4" src="assets/img/unam-logo.png" alt="" width="180" height="180"></div>
            </div>


            <!-- <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="assets/img/FESA.png" alt="" width="100" height="100">
                <h2>Checkout form</h2>
                <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
            </div> -->
            <div class="container text-center">
                <div class="row g-3 pt-5 text-center">
                    <div class="col"><button class="button-negro">1975 - 1979</button></div>
                    <div class="col"><button class="button-negro">1979 - 1982</button></div>
                    <div class="col"><button class="button-negro">1982 - 1986</button></div>
                    <div class="col"><button class="button-negro">1986 - 2000</button></div>

                </div>
            </div>

            <div class="container text-center">
                <div class="row g-3 pt-5 text-center">
                    <div class="col"><button class="button-negro">1990 - 1994</button></div>
                    <div class="col"><button class="button-negro">1994 - 1998</button></div>
                    <div class="col"><button class="button-negro">1998 - 2002</button></div>
                    <div class="col"><button class="button-negro">2002 - 2006</button></div>
                    <div class="col"><button class="button-negro">2006 - 2010</button></div>

                </div>
            </div>

            <div class="container text-center">
                <div class="row g-3 pt-5 text-center">
                    <div class="col"><button class="button-negro">2010 - 2014</button></div>
                    <div class="col"><button class="button-negro">2014 - 2018</button></div>
                    <div class="col"><button class="button-negro">2018 - 2022</button></div>
                    <div class="col"><button class="button-negro">2022 - 2026</button></div>

                </div>
            </div>

            <div class="container text-center">
                <div class="row g-3 pt-5 text-center">
                    <div class="col"><button class="button-blanco">ÁREAS</button></div>
                    <div class="col"><button class="button-blanco">AÑO</button></div>
                    <div class="col"><button class="button-blanco">EVENTO</button></div>
                    <div class="col"><button class="button-blanco">CARRERA</button></div>
                    <div class="col"><button class="button-blanco">PROFESORES</button></div>
                </div>
            </div>
            <div class="container text-center">
                <div class="row g-3 pt-5 text-center">
                    <div class="col"><button class="button-blanco">ACTIVIDADES</button></div>
                    <div class="col"><button class="button-blanco">PUBLICACIONES</button></div>
                    <div class="col"><button class="button-blanco">INFRAESTRUCTURA</button></div>
                    <div class="col"><button class="button-blanco">ADMINISTRATIVOS</button></div>
                    <div class="col"><button class="button-blanco">ALUMNOS</button></div>
                </div>
            </div>


            <div class="container text-center">
                <div class="row g-3 pt-5 text-center">

                    <!-- <form role="search">
                        <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
                    </form> -->


                    <!-- <form role="search"> -->
                    <div class="input-group has-validation">
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" id="username" placeholder="Username" required="">
                        <div class="invalid-feedback">
                            Your username is required.
                        </div>
                    </div>


                    <button class="w-20 btn btn-primary" type="submit">Buscar</button>
                    <!-- </form> -->

                </div>
            </div>

        </main>

        <footer class="my-5 pt-5 text-body-secondary text-center text-small">

            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Historia de la FES Acatlán</a></li>
                <li class="list-inline-item"><a href="#">Participantes</a></li>
                <li class="list-inline-item"><a href="#">Contacto</a></li>
                <li class="list-inline-item"><a href="#">Aviso</a></li>
                <li class="list-inline-item"><a href="#">Mapa del sitio</a></li>
            </ul>
        </footer>
    </div>


    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- <script src="checkout.js"></script> -->
</body>

</html>