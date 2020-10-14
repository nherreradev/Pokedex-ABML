<?php

include_once ("path.php");
$conexion = getPath("funciones/eliminarPokemon.php");

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
