<?php

$archivoConfig = "../conexionBD/conexion.ini";
$configuracion = parse_ini_file($archivoConfig, true);

$host = $configuracion["bd"]["host"];
$usuario = $configuracion["bd"]["usuario"];
$password = $configuracion["bd"]["password"];
$bd = $configuracion["bd"]["bd"];

$conexion = new mysqli($host, $usuario, $password, $bd);

if($conexion->connect_error){
    echo "ocurrio un error";
}else{



}

/*-------------------------------------------------------------------------------------------------------------*/


$idAEditar = $_POST["valorEditar"];




echo "
        
        <form method='post' action='../funciones/editarPokemonEnBD.php' enctype='multipart/form-data'>

                    <input name='id' type='text' placeholder='Ingrese id de pokemon' value='$idAEditar'>
                    <input name='nombre' type='text' placeholder='Ingrese nombre'>
                    <input name='tipo' type='text' placeholder='Ingrese tipo'>
                    <input name='descripcion' type='text' placeholder='Ingrese descripcion'>
                    <input name='archivo' type='file' placeholder='Eliga imagen'>
                                        
                    <button type='submit'>Editar</button>

            </form>";


?>
