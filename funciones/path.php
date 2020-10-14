<?php

function getPath($rutaEspecifica){

    $ruta = $_SERVER["DOCUMENT_ROOT"] . "/" . $rutaEspecifica;

    $archivoConfig = $_SERVER["DOCUMENT_ROOT"] . "/conexionBD/conexion.ini";

    $configuracion = parse_ini_file($archivoConfig, true);

    $host = $configuracion["bd"]["host"];
    $usuario = $configuracion["bd"]["usuario"];
    $password = $configuracion["bd"]["password"];
    $bd = $configuracion["bd"]["bd"];

    $conexion = new mysqli($host, $usuario, $password, $bd);

    return $conexion;

    return $ruta;


}