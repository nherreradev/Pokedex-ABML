<?php

include_once ("path.php");
$conexion = getPath("funciones/editarPokemon.php");

/*-------------------------------------------------------------------------------------------------------------*/


$idAEditar = $_POST["valorEditar"];




echo "
        
        <form method='post' action='editarPokemonEnBD.php' enctype='multipart/form-data'>

                    <input name='id' type='text' placeholder='Ingrese id de pokemon' value='$idAEditar'>
                    <input name='nombre' type='text' placeholder='Ingrese nombre'>
                    <input name='tipo' type='text' placeholder='Ingrese tipo'>
                    <input name='descripcion' type='text' placeholder='Ingrese descripcion'>
                    <input name='archivo' type='file' placeholder='Eliga imagen'>
                                        
                    <button type='submit'>Editar</button>

            </form>";


?>
