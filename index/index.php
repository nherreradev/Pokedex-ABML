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

echo

"    
    <!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>

</head>
<body>




<div class='w3-container w3-teal'>
    <div class='w3-half'>
        <h1>
            Pokedex
        </h1>
    </div>
    <div class='w3-half'>
        <form action='' class='w3-content w3-padding-24'>
            <input type='text' name='' id='' placeholder='Usuario'>
            <input type='text' name='' id='' placeholder='Password'>
            <button type='submit'>Ingresar</button>
        </form>
    </div>

</div>
    
    
    <form action='../funciones/buscarPokemon.php' method='post' class='w3-container w3-padding-24'>


<input class='w3-input w3-border ' name='nombrePokemon' type='text' placeholder='Ingrese el nombre del pokemon que desea buscar'>


<button class='w3-btn w3-blue w3-margin-top'>Buscar</button>
 
</form>
    
    
    ";

$consulta = "select * from pokemon";

$resultadoQuery = $conexion->query($consulta);

if(!$resultadoQuery){

}else{
    $filaObtenida = $resultadoQuery->fetch_all();


    echo "<table class='w3-table-all w3-small w3-padding-large'>
        <tr>
             
                 <th>Numero</th>
             
                 <th>Imagen</th>
             
                 <th>Nombre</th>

                 <th>Tipo</th>
                 
                 <th>Descripcion</th>
                 
                 <th>Acciones</th>
             
               </tr>";

    for($i=0;$i<count($filaObtenida);$i++) {

        echo "<tr>";

        for($j=0;$j<count($filaObtenida[$i]);$j++) {

                if($j == 1){
                    $imagenObtenida = $filaObtenida[$i][$j];
                    echo"<td><img width='50'src='$imagenObtenida'></td>";
                }
                else{
                    echo'<td>';
                    echo $filaObtenida[$i][$j];
                    echo '</td>';
                }
        }

        $idObtenido = $filaObtenida[$i][0];

        echo


        "   <td> <form method='post' action='../funciones/eliminarPokemon.php'>
    
                    <button name='valorBoton' type='submit' value='$idObtenido'>Baja</button>
                    

            </form>
            
            <form method='post' action='../funciones/editarPokemon.php'>
    
                    <button name='valorEditar' type='submit ' value='$idObtenido'>Modificacion</button>

            </form></td>";

        echo"</tr>";





    }
    echo " </table>";



}




    echo

    " <form class='w3-padding-large' method='post' action='../funciones/nuevoPokemon.php'>

                    <button type='submit'>Nuevo pokemon</button>

            </form>";





?>





