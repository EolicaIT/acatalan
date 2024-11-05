"use strict";
const URL_MASTER = "https://catalogoacatlan.org/";

const buscar = document.getElementById("btn-search");

// buscar.addEventListener("keypress", (e) => {
//   e.preventDefault();
//   if (13 == e.keyCode) {
//     procesarbusqueda();
//   } else {
//     alert("otra tecla");
//   }
// });
buscar.addEventListener("click", () => {
  // const busqueda = document.getElementById("busqueda-input").value;
  // let cadena = { busqueda };
  // location.href =
  //   URL_MASTER +
  //   "index.php?o=busqueda&data=" +
  //   window.btoa(unescape(encodeURIComponent(JSON.stringify(cadena))));
  procesarbusqueda();
});

function procesarbusqueda(parametros) {
  const busqueda =
    parametros || document.getElementById("busqueda-input").value;
  let cadena = { busqueda };
  location.href =
    URL_MASTER +
    "index.php?o=busqueda&data=" +
    window.btoa(unescape(encodeURIComponent(JSON.stringify(cadena))));
}

function busquedaUrl(pagina, filtroR) {
  // alert("la pagina es " + pagina);
  let filtro = filtroR || document.getElementById("tipo-archivo").value;
  if (filtro) {
    document.getElementById("tipo-archivo").value = filtro;
  }
  let datos = window.location.href;
  document.getElementById("pagina-activa").value = pagina;
  let parametro = datos.split("&");
  let data = parametro[1];
  let cadena = { data, pagina, filtro };
  let separarUrl = data.split("=");

  let cadenaBusqueda = JSON.parse(
    decodeURIComponent(escape(atob(separarUrl[1])))
  );

  paginador(cadena);

  console.log(
    URL_MASTER +
      "/admin/api/search/index.php?o=search-info&data=" +
      window.btoa(unescape(encodeURIComponent(JSON.stringify(cadena))))
  );

  document.getElementById("respuesta-imagenes").innerHTML = "";
  document.getElementById("respuesta-documentos").innerHTML = "";
  document.getElementById("respuesta-audios").innerHTML = "";
  document.getElementById("respuesta-videos").innerHTML = "";

  $.ajax({
    url:
      URL_MASTER +
      "/admin/api/search/index.php?o=search-info&data=" +
      window.btoa(unescape(encodeURIComponent(JSON.stringify(cadena)))),

    success: (result) => {
      if (!result) {
        alert("SIN RESULTADO");
      }

      // console.log(result);
      let resultado = JSON.parse(result);
      resultado.map((valor) => {
        if (valor.response == "200") {
          if (valor.tipo == "image") {
            {
              /* <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="${valor.name}" style="height: 225px; width: 100%; display: block;" src="${URL_MASTER}/admin/uploads/${valor.url}" data-holder-rendered="true"></img> */
            }

            $("#contenedor-imagenes").show();
            let row = `<div class="col-sm-4 col-6" onclick="modalInfoImagen(${valor.id}); contadorClicks(${valor.id});" style="cursor: pointer;">
                        <div class="mb-4">
                          <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="${valor.name}" style="width: 100%; display: block;" src="${URL_MASTER}/admin/uploads/${valor.url}" data-holder-rendered="true">
                          <div class="card-body">
                            <p class="card-text">${valor.name}</p>
                          </div>
                        </div>
                      </div>`;

            $("#respuesta-imagenes").append(row);
          } else if (valor.tipo == "document") {
            $("#contenedor-documentos").show();
            let rowDoc = `<div class="col-sm-4 col-" onclick="contadorClicks(${valor.id});">
        
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        
        <div class="col-4 p-4 d-flex flex-column position-static">
        
        <img src="${URL_MASTER}/assets/img/paidiPDF.png" width="100px;"/>
        
        </div>
        
        <div class="col-8 p-4 d-flex flex-column position-static">
        <h3 class="mb-0"><a href="${URL_MASTER}/admin/uploads/${valor.url}" target="_blank"><span style="font-size:14px; line-height: 15px;">${valor.name}<span></a></h3>
        
        </div>
        </div>
        </div>`;

            $("#respuesta-documentos").append(rowDoc);
          } else if (valor.tipo == "audio") {
            $("#contenedor-audio").show();

            let rowAudio = `<li style="display: -webkit-flex; display: flex;">

            <div  onclick="contadorClicks(${valor.id});" >
                    
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <a href='javascript:void(0)'>
            <div class="row col p-4 d-flex flex-column position-static">

            <div class="col-6"> <img src="${URL_MASTER}/assets/img/wm-div.png" width="100px;"> </div>
            <div class="col-6"><h3 class="mb-0">${valor.name}</h3></div>
                
                </div>
                <div class="col-auto" style="background-color:#D59F0F;">

                <audio controls style="width:100%; background-color:#002B7A;">
                <source src="${URL_MASTER}/admin/uploads/${valor.url}" type="audio/mp3">
                    Tu navegador no soporta audio HTML5.
            </audio>

            
                </div>
                </a>
            </div>
            </div>
            </li>`;

            $("#respuesta-audios").append(rowAudio);
            // audios = row;

            // document.getElementById("lista-audios").value =
            //   JSON.stringify(audios);
          } else if (valor.tipo == "video") {
            $("#contenedor-videos").show();
            let rowAudio = `<div class="col-sm-6 col-" onclick="contadorClicks(${valor.id});" style='text-align: left;
              align-items: flex-start;'>
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <a href='${valor.url}' target="_blank">
            <div class="col p-4 d-flex flex-column position-static">

                    <h6 class="mb-0">${valor.name}</h6>

                </div>
                <div class="col-auto">

                <iframe width="100%" height="350" src="https://www.youtube.com/embed/${valor.url_video}?rel=0&showinfo=0&controls=0&modestbranding=1&showinfo=0" title="${valor.name}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share controls=1" allowfullscreen></iframe>

                </div>
                </a>
            </div>
            </div>`;

            $("#respuesta-videos").append(rowAudio);
          } else {
            document.getElementById(
              "sin-resultados"
            ).innerHTML = `<h2>NO SE ENCONTRARON RESULTADOS PARA SU BÚSQUEDA</h2>`;
          }
        } else {
          document.getElementById(
            "sin-resultados"
          ).innerHTML = `<h2>NO SE ENCONTRARON RESULTADOS PARA SU BÚSQUEDA</h2>`;
        }
      });
    },
  });

  let campoBusqueda;

  switch (cadenaBusqueda.busqueda) {
    case "periodo_1":
      campoBusqueda = "1975 a 1981";
      break;
    case "periodo_2":
      campoBusqueda = "1981 a 1985";
      break;
    case "periodo_3":
      campoBusqueda = "1985 a 1989";
      break;
    case "periodo_4":
      campoBusqueda = "1989 a 1997";
      break;
    case "periodo_5":
      campoBusqueda = "1997 a 2001";
      break;
    case "periodo_6":
      campoBusqueda = "2001 a 2009";
      break;
    case "periodo_7":
      campoBusqueda = "2009 a 2017";
      break;
    case "periodo_8":
      campoBusqueda = "2017 a 2023";
      break;
    default:
      campoBusqueda = cadenaBusqueda.busqueda;
      break;
  }

  document.getElementById("busqueda-txt").innerHTML =
    campoBusqueda.toUpperCase();
  // cadenaBusqueda.busqueda.toUpperCase();
}
// window.btoa(unescape(encodeURIComponent(JSON.stringify(cadena))))

function paginador(cadena) {
  console.log(
    URL_MASTER +
      "/admin/api/search/index.php?o=paginador-busqueda&data=" +
      window.btoa(unescape(encodeURIComponent(JSON.stringify(cadena))))
  );
  $.ajax({
    url:
      URL_MASTER +
      "/admin/api/search/index.php?o=paginador-busqueda&data=" +
      window.btoa(unescape(encodeURIComponent(JSON.stringify(cadena)))),

    success: (result) => {
      document.getElementById("paginador").innerHTML = result;
    },
  });
}

function modalInfoImagen(id) {
  let cadena = { id };

  let fuenteOrigen;
  $.ajax({
    url:
      URL_MASTER +
      "/admin/api/search/index.php?o=search-info-img&data=" +
      window.btoa(unescape(encodeURIComponent(JSON.stringify(cadena)))),
    success: (result) => {
      let {
        nombre,
        archivo,
        year,
        tipo_publicacion,
        numero_publicacion,
        descripcion,
        fuente,
      } = JSON.parse(result);

      if (fuente) {
        fuenteOrigen = `<p>Fuente: ${fuente}`;
      } else {
        fuenteOrigen = "";
      }
      document.getElementById("titulo-post").innerHTML = nombre;
      document.getElementById(
        "foto-post"
      ).innerHTML = `<img src="${URL_MASTER}/admin/uploads/${archivo}" class="rounded img-fluid img_awesome"/>`;

      let ffila = `<li>Año: ${year}</li>
              <li>Tipo Publicación: ${tipo_publicacion}</li>
              <li>Número de publicación: ${numero_publicacion}</li>
              <br>
              <br>
              <br>
              <p>${descripcion}</p>
              ${fuenteOrigen}
              `;
      document.getElementById("data-post").innerHTML = ffila;

      $(".img_awesome").watermark({
        path: `${URL_MASTER}/assets/img/wm-div2.png`,
        opacity: 0.4,
        gravity: "c",
      });

      $("#foto-modal").modal("show");
    },
    // complete: () => {
    // },
  });
}

function mostrarResultados(valor) {
  switch (valor) {
    case "todos":
      $("#contenedor-imagenes").show();
      $("#contenedor-videos").show();
      $("#contenedor-audios").show();
      $("#contenedor-documentos").show();
      break;
    case "imagenes":
      $("#contenedor-imagenes").show();
      $("#contenedor-videos").hide();
      $("#contenedor-audios").hide();
      $("#contenedor-documentos").hide();
      break;
    case "documentos":
      $("#contenedor-imagenes").hide();
      $("#contenedor-videos").hide();
      $("#contenedor-audios").hide();
      $("#contenedor-documentos").show();
      break;
    case "audios":
      $("#contenedor-imagenes").hide();
      $("#contenedor-videos").hide();
      $("#contenedor-audios").show();
      $("#contenedor-documentos").hide();
      break;
    case "videos":
      $("#contenedor-imagenes").hide();
      $("#contenedor-videos").show();
      $("#contenedor-audios").hide();
      $("#contenedor-documentos").hide();
      break;

    default:
      break;
  }
}

function contadorClicks(id) {
  let cadena = { id };
  $.ajax({
    url:
      URL_MASTER +
      "/admin/api/search/index.php?o=contador-clicks&data=" +
      window.btoa(unescape(encodeURIComponent(JSON.stringify(cadena)))),
  });
}

function retrocederPaginador() {
  let paginaActual = document.getElementById("pagina-activa").value;
  let filtro = document.getElementById("tipo-archivo").value;
  let pagina = parseInt(paginaActual) - 1;

  busquedaUrl(pagina, filtro);
}

function avanzarPaginador() {
  let paginaActual = document.getElementById("pagina-activa").value;
  let filtro = document.getElementById("tipo-archivo").value;
  let pagina = parseInt(paginaActual) + 1;

  busquedaUrl(pagina, filtro);
}
