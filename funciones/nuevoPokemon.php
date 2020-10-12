<?php

    echo"
        
        <form method='post' action='../funciones/cargarPokemonBD.php' enctype='multipart/form-data'>

                    <input name='id' type='text' placeholder='Ingrese id de pokemon'>
                    <input name='nombre' type='text' placeholder='Ingrese nombre'>
                    <input name='tipo' type='text' placeholder='Ingrese tipo'>
                    <input name='descripcion' type='text' placeholder='Ingrese descripcion'>
                    <input name='archivo' type='file' placeholder='Eliga imagen'>
                                        
                    <button type='submit'>Cargar</button>

            </form>";

?>


