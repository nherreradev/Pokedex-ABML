<?php

include_once ("path.php");
$conexion = getPath("funciones/editarPokemonEnBD.php");

if (isset($_POST["id"])) {
    $id = $_POST["id"];
}

if (isset($_POST["nombre"])) {
    $nombre = $_POST["nombre"];
}

if (isset($_POST["tipo"])) {
    $tipo = $_POST["tipo"];
}

if (isset($_POST["descripcion"])) {
    $descripcion  = $_POST["descripcion"];;
}




$valorErrorArchivo = $_FILES["archivo"]["error"];

if ( $valorErrorArchivo > 0){

    echo "error en el archivo";

}else{

    $carpeta = "../imagenes/";

    $ubicacionTemporalDeLaImagen = $_FILES["archivo"]["tmp_name"];

    $nombreDelArchivo = $_FILES["archivo"]["name"];



    move_uploaded_file($ubicacionTemporalDeLaImagen , $carpeta . $nombreDelArchivo);


}

$urlImagen = $carpeta.$nombreDelArchivo;

strtolower($tipo);



$consultaSql = "UPDATE pokemon set
                id = $id, 
                url_imagen = '$urlImagen',
                nombre = '$nombre',
                tipo = '$tipo',
                descripcion = '$descripcion'
                 where pokemon.id = $id";


$resultadoDeLaConsulta = $conexion->query($consultaSql);

if($conexion->errno){
    echo"ocurrio un error";

}else{
    echo "filas afectadas" . $conexion->affected_rows;

}

header("Location: ../index.php");
exit();

?>
