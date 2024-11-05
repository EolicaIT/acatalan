<?php
header('Access-Control-Allow-Origin: *');
require_once("clases/template.class.php");
require_once("clases/conecta.class.php");
date_default_timezone_set("America/Mexico_City");
session_start();

// print_r($_SESSION);
$oTemplate = new gb_template("templates");

$url_master = "https://catalogoacatlan.org";

if (isset($_POST["o"])) {
    $opcion = $_POST["o"];
} else {
    $opcion = isset($_GET["o"]) ? $_GET["o"] : "";
}

$request = $opcion;

$strHTMLIndex = "";


switch ($opcion) {
    default:


        // eval("\$modalManual .= \"" . $oTemplate->get_template("modal-manual-plataforma.tpl.php") . "\";");
        eval("\$modalContacto .= \"" . $oTemplate->get_template("modal-contacto.tpl.php") . "\";");
        eval("\$modalEtiquetas .= \"" . $oTemplate->get_template("modal-etiquetas.tpl.php") . "\";");
        eval("\$modalAviso .= \"" . $oTemplate->get_template("modal-aviso.tpl.php") . "\";");
        eval("\$modalParticipantes .= \"" . $oTemplate->get_template("modal-participantes.tpl.php") . "\";");
        eval("\$modalProyecto .= \"" . $oTemplate->get_template("modal-proyecto.tpl.php") . "\";");
        eval("\$modalHistoria .= \"" . $oTemplate->get_template("modal-historia.tpl.php") . "\";");
        eval("\$modalAgradecimientos .= \"" . $oTemplate->get_template("modal-agradecimientos.tpl.php") . "\";");
        eval("\$footer .= \"" . $oTemplate->get_template("footer.tpl.php") . "\";");
        eval("\$strHTMLIndex .= \"" . $oTemplate->get_template("home.tpl.php") . "\";");
        break;

    case 'busqueda':
        eval("\$modalFotos .= \"" . $oTemplate->get_template("modal.tpl.php") . "\";");
        eval("\$modalContacto .= \"" . $oTemplate->get_template("modal-contacto.tpl.php") . "\";");
        eval("\$modalEtiquetas .= \"" . $oTemplate->get_template("modal-etiquetas.tpl.php") . "\";");
        eval("\$modalAviso .= \"" . $oTemplate->get_template("modal-aviso.tpl.php") . "\";");
        eval("\$modalParticipantes .= \"" . $oTemplate->get_template("modal-participantes.tpl.php") . "\";");
        eval("\$modalProyecto .= \"" . $oTemplate->get_template("modal-proyecto.tpl.php") . "\";");
        eval("\$modalHistoria .= \"" . $oTemplate->get_template("modal-historia.tpl.php") . "\";");
        eval("\$modalAgradecimientos .= \"" . $oTemplate->get_template("modal-agradecimientos.tpl.php") . "\";");
        eval("\$footer .= \"" . $oTemplate->get_template("footer.tpl.php") . "\";");
        eval("\$strHTMLIndex .= \"" . $oTemplate->get_template("busqueda.tpl.php") . "\";");

        break;


    case 'salir':

        session_unset();
        session_destroy();
        header("Location: home");

        break;
};


echo $strHTMLIndex;
