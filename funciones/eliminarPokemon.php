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

$idPokemonAEliminar = $_POST["valorBoton"];

echo $idPokemonAEliminar;

$consulta = "DELETE FROM pokemon where pokemon.id = $idPokemonAEliminar";

$resultadoQuery = $conexion->query($consulta);

if(!$resultadoQuery){
    echo "hubo un error en la consulta";
}else{

    header("Location: ../index.php");
    exit();


}

?>
