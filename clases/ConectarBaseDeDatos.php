<?php



class ConectarBaseDeDatos{


    function conectar(){

        $archivoConfig = "conexionBD/conexion.ini";
        $configuracion = parse_ini_file($archivoConfig, true);

        $host = $configuracion["bd"]["host"];
        $usuario = $configuracion["bd"]["usuario"];
        $password = $configuracion["bd"]["password"];
        $bd = $configuracion["bd"]["bd"];

        $conexion = new mysqli($host, $usuario, $password, $bd);

        return $conexion;
    }

}