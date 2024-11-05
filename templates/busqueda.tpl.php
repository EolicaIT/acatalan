<!doctype html>
<html lang="es" data-bs-theme="auto">

<head>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="UTF-8">
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
    <!-- <meta name="theme-color" content="#712cf9"> -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />


    <!-- REPRODUCTOR -->
    <!-- <link rel="stylesheet" href="libs/dist/style/main.css"> -->
    <!-- <link rel="stylesheet" href="libs/dist/style/font-awsome/css/all.min.css"> -->
    <!-- <script src="libs/dist/index.js"></script> -->
    <!-- <script src="libs/dist/index.js"></script> -->


    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 48
        }

        .marca-agua {
            background: url('assets/img/wm-div.png');
            /* width: 500px;
            height: 341px;
            margin: 0 auto;
            display: block; */
            position: relative;
        }
    </style>




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
    <script src="assets/js/masonry.pkgd.min"></script>
    <!-- <script src="assets/js/watermark.js"></script> -->
    <!-- Custom styles for this template -->
    <!-- <link href="checkout.css" rel="stylesheet"> -->
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




    <div class="container">
        <main>
            <!-- <div class="row g-3">
            <div class="col-sm-6"> -->


            <div class="row g-3 pt-5">
                <div class="col text-center"> <a href="https://www.acatlan.unam.mx/" target="_blank"><img class="d-block mx-auto mb-4 img-fluid" src="assets/img/FESA.png" alt="" width="150" height="150"></a></div>
                <div class="col-6 text-center"> <a href="/"><img class="d-block mx-auto mb-4 img-fluid" src="assets/img/logo-paidi-front.jpg" alt="" width="70%"></a></div>
                <div class="col"><a href="https://www.unam.mx/" target="_blank"> <img class="d-block mx-auto mb-4 img-fluid" src="assets/img/unam-logo.png" alt="" width="100" height="100"></a></div>
            </div>
            <div class="row g-3" style="text-align:center">
                <!-- <h2 style="color:#002b7A;">Memoria colectiva de la FES Acatlán</h2>
                <h3 style="color:#002b7A;">Catálogo Multimedia</h3> -->
                <h2 style="color:#002b7A;">Memoria colectiva de la FES Acatlán<br><span style="font-size:28px">Catálogo Multimedia</span></h2>
            </div>


            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#foto-modal">Open modal for @mdo</button> -->


    </div>


    <form action="" method="POST" id="form">
        <div class="container">
            <div class="row">
                <div class="col-sm-10">
                    <div class="input-group has-validation">
                        <span class="input-group-text"><span class="material-symbols-outlined">
                                search
                            </span></span>
                        <input type="text" class="form-control" id="busqueda-input" placeholder="Buscar..." required="">
                    </div>
                    <!-- <input type="text" class="form-control" id="busqueda" placeholder="Buscar..." required=""> -->
                </div>
                <div class="col-sm-2">
                    <button class="w-20 btn btn-dark btn-lg" type="button" id="btn-search">Buscar</button>
                </div>
            </div>
        </div>
    </form>

    <h3 style="text-align:center; padding-top:20px;">Resultados para la búsqueda : <span id="busqueda-txt"></span></h3>
    <div style="text-align:center; padding-top:20px; color:#D59F0F" id="sin-resultados"></div>
    <div class="container pt-5">

        <div class="row g-3" style="text-align: center">


            <!-- <div class="col text-center" style="cursor:pointer" onclick="mostrarResultados('todos');"> -->
            <div class="col text-center" style="cursor:pointer" onclick="busquedaUrl('0', 'todos');">
                <span class="material-symbols-outlined" id="resultados-todos">
                    search
                </span> Todos
            </div>
            <!-- <div class="col text-center" style="cursor:pointer" onclick="mostrarResultados('imagenes');"> -->
            <div class="col text-center" style="cursor:pointer" onclick="busquedaUrl('0', 'image');">
                <span class="material-symbols-outlined" id="resultados-imagenes">
                    image
                </span> Imágenes
            </div>
            <!-- <div class="col text-center" style="cursor:pointer" onclick="mostrarResultados('documentos');"> -->
            <div class="col text-center" style="cursor:pointer" onclick="busquedaUrl('0', 'document');">
                <span class="material-symbols-outlined" id="resultados-documentos">
                    picture_as_pdf
                </span> Documentos
            </div>
            <!-- <div class="col text-center" style="cursor:pointer" onclick="mostrarResultados('audios');"> -->
            <div class="col text-center" style="cursor:pointer" onclick="busquedaUrl('0', 'audio');">
                <span class="material-symbols-outlined" id="resultados-audios">
                    headphones
                </span> Audios
            </div>
            <!-- <div class="col text-center" style="cursor:pointer" onclick="mostrarResultados('videos');"> -->
            <div class="col text-center" style="cursor:pointer" onclick="busquedaUrl('0', 'video');">
                <span class="material-symbols-outlined" id="resultados-videos">
                    play_circle
                </span> Videos
            </div>
        </div>

    </div>



    <div id="contenedor-imagenes" class="container">
        <!-- <h3>Imágenes</h3> -->
        <!-- <div class="p-5" id="titulo-imagenes"> -->
        <!-- <span class="button-negro"><span class="material-symbols-outlined">
                    image
                </span> Imágenes</span> -->
        <!-- </div> -->
        <div class="row" id="respuesta-imagenes">
        </div>
    </div>

    <div class="container" id="contenedor-documentos">
        <!-- <div class="p-5"> -->
        <!-- <span class="button-negro">Documentos</span> -->
        <!-- </div> -->
        <div class="row" id="respuesta-documentos">
        </div>
    </div>

    <div class="container" id="contenedor-audios">
        <!-- <div class="p-5"> -->
        <!-- <span class="button-negro">Audios</span> -->

        <div class="row">

            <ul style="display: -webkit-flex; display: flex; -webkit-flex-wrap: wrap; flex-wrap: wrap;" id="respuesta-audios">

            </ul>
            <!-- </div> -->

            <!-- <div class="audio-player" id="skin">


                <div class="holder">
                    <div class="cover">

                        <img src="https://pruebaseolicait.com/fesa/assets/img/wm-div.png">
                    </div>
                    <div class="audio-wrapper" id="player-container" href="javascript:;">
                        <audio id="player" preload="metadata" onloadedmetadata="mDur()" ontimeupdate="initProgressBar()">
                            <source src="" type="audio/mp3">
                        </audio>
                    </div>
                    <div class="player-controls scrubber">
                        <div>
                            <div>
                                <p class="title"></p>
                            </div>
                            <div class="range">
                                <input id="dur" type="range" class="range" name="rng" min="0" max="1" step="0.00000001" value="0" onchange="mSet()" style="width: 100%">
                            </div>
                            <br>
                            <span class="time start-time"></span>
                            <span class="time end-time"></span>
                            <br>
                            <div class="ctrl">
                                <div>
                                    <a href="#prev" class="ctrl_btn " id="prev"><i class="fa fa-arrow-left"></i></a>
                                    <span id="play-btn" class="fa fa-play "></span>
                                    <a href="#next" class="ctrl_btn " id="next"><i class="fa fa-arrow-right"></i></a>
                                </div>
                                <div class="volumeControl">
                                    <div class="wrapper">
                                        <i class="fa fa-volume-up"></i>
                                        <span class="outer">
                                            <span class="inner"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>


            </div> -->
        </div>

        <!-- <script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
            <script type="text/javascript" src="src/script.js"></script>

            -->



    </div>
    <div class="container" id="contenedor-videos">
        <!-- <div class="p-5">
            <span class="button-negro">Videos</span>
        </div> -->
        <div class="row" id="respuesta-videos">
        </div>
    </div>

    <input type="hidden" id="pagina-activa">
    <input type="hidden" id="tipo-archivo">


    <div class="container col-">

        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center pagination-sm" id="paginador">
                <!-- <li class="page-item"><a class="page-link" href="#">Anterior</a></li> -->
                <!-- <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                <!-- <li class="page-item"><a class="page-link" href="#">Siguiente</a></li> -->
            </ul>
        </nav>
    </div>

    <input type="hidden" id="pagina-activa">



    <!-- <div id="player" class="epico_default-layout">
        <div class="epico_player-container epico_player-container-u500h">

        </div>
    </div> -->

    </main>
    $modalFotos
    $footer
    </div>


    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="assets/js/jquery.watermark.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/etiquetas.js"></script>
    <script>
        var load = false;
        window.onload = () => {
            busquedaUrl(pagina = 0, 'todos');
        }


        const inputEnter = document.getElementById("busqueda-input").addEventListener("keypress", (e) => {
            if (e.keyCode == '13') {
                console.log("Se dio enter")
                procesarbusqueda();
            }

        });
    </script>


    <script>
        $(function() {
            $('.grid').masonry({
                // options
                itemSelector: '.griditem',
                columnWidth: 10
            });
        });
    </script>
</body>

</html>