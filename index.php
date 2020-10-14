<?php
session_start();

include_once ("funciones/path.php");
$conexion = getPath("index.php");




/*-------------------------------------------------------------------------------------------------------------*/


$variableSession = isset($_SESSION["estado"]);

if( $variableSession != 1){

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
        <form action='funciones/procesarLogin.php' method='post' class='w3-content w3-padding-24'>
            <input type='text' name='usuario'  placeholder='Usuario'>
            <input type='text' name='password'  placeholder='Password'>
            <button type='submit'>Ingresar</button>
        </form>
    </div>

</div>
    
    
    <form action='funciones/buscarPokemon.php' method='post' class='w3-container w3-padding-24'>


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
                 
                 
             
               </tr>";

        for($i=0;$i<count($filaObtenida);$i++) {

            echo "<tr>";

            for($j=0;$j<count($filaObtenida[$i]);$j++) {

                if($j == 0){
                    $id = $filaObtenida[$i][$j];
                    echo"<td>$id</td>";

                }

                if($j == 1){
                    $imagenObtenida = $filaObtenida[$i][$j];
                    echo"<td><img width='50'src='$imagenObtenida'></td>";

                }

                if($j == 2){
                    $nombre = $filaObtenida[$i][$j];
                    echo"<td>$nombre</td>";
                }

                if($j == 3){

                    $tipoString = $filaObtenida[$i][$j];

                    switch ($tipoString) {
                        case "electrico" : echo "<td><img width='50'src='imagenesTiposPokemon/electrico.png'></td>";
                            break;

                        case "veneno" : echo "<td><img width='50'src='imagenesTiposPokemon/veneno.png'></td>";
                            break;

                        case "acero" : echo "<td><img width='30'src='imagenesTiposPokemon/acero.jpg'></td>";
                            break;

                        case "agua" : echo "<td><img width='30'src='imagenesTiposPokemon/agua.jpg'></td>";
                            break;

                        case "bicho" : echo "<td><img width='30'src='imagenesTiposPokemon/bicho.png'></td>";
                            break;

                        case "dragon" : echo "<td><img width='30'src='imagenesTiposPokemon/dragon.jpg'></td>";
                            break;

                        case "fantasma" : echo "<td><img width='30'src='imagenesTiposPokemon/fantasma.png'></td>";
                            break;

                        case "fuego" : echo "<td><img width='30'src='imagenesTiposPokemon/fuego.png'></td>";
                            break;

                        case "hada" : echo "<td><img width='30'src='imagenesTiposPokemon/hada.png'></td>";
                            break;

                        case "hielo" : echo "<td><img width='30'src='imagenesTiposPokemon/hielo.png'></td>";
                            break;

                        case "lucha" : echo "<td><img width='30'src='imagenesTiposPokemon/lucha.jpg'></td>";
                            break;

                        case "normal" : echo "<td><img width='30'src='imagenesTiposPokemon/normal.jpg'></td>";
                            break;

                        case "piedra" : echo "<td><img width='30'src='imagenesTiposPokemon/piedra.jpg'></td>";
                            break;

                        case "planta" : echo "<td><img width='30'src='imagenesTiposPokemon/planta.jpg'></td>";
                            break;

                        case "psiquico" : echo "<td><img width='30'src='imagenesTiposPokemon/psiquico.png'></td>";
                            break;

                        case "siniestro" : echo "<td><img width='30'src='imagenesTiposPokemon/siniestro.png'></td>";
                            break;

                        case "tierra" : echo "<td><img width='40'src='imagenesTiposPokemon/tierra.jpg'></td>";
                            break;

                        case "volador" : echo "<td><img width='30'src='imagenesTiposPokemon/volador.jpg'></td>";
                            break;

                    }


                }

                if($j == 4){
                    $descripcion = $filaObtenida[$i][$j];
                    echo"<td>$descripcion</td>";
                }








            }













        }




    }






}else{
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
        <h2>Bienvenido</h2>
    </div>

</div>
    
    
    <form action='funciones/buscarPokemon.php' method='post' class='w3-container w3-padding-24'>


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

                if($j == 0){
                    $id = $filaObtenida[$i][$j];
                    echo"<td>$id</td>";

                }

                if($j == 1){
                    $imagenObtenida = $filaObtenida[$i][$j];
                    echo"<td><img width='50'src='$imagenObtenida'></td>";

                }

                if($j == 2){
                    $nombre = $filaObtenida[$i][$j];
                    echo"<td>$nombre</td>";
                }

                if($j == 3){

                    $tipoString = $filaObtenida[$i][$j];

                    switch ($tipoString) {
                        case "electrico" : echo "<td><img width='50'src='imagenesTiposPokemon/electrico.png'></td>";
                            break;

                        case "veneno" : echo "<td><img width='50'src='imagenesTiposPokemon/veneno.png'></td>";
                            break;

                        case "acero" : echo "<td><img width='30'src='imagenesTiposPokemon/acero.jpg'></td>";
                            break;

                        case "agua" : echo "<td><img width='30'src='imagenesTiposPokemon/agua.jpg'></td>";
                            break;

                        case "bicho" : echo "<td><img width='30'src='imagenesTiposPokemon/bicho.png'></td>";
                            break;

                        case "dragon" : echo "<td><img width='30'src='imagenesTiposPokemon/dragon.jpg'></td>";
                            break;

                        case "fantasma" : echo "<td><img width='30'src='imagenesTiposPokemon/fantasma.png'></td>";
                            break;

                        case "fuego" : echo "<td><img width='30'src='imagenesTiposPokemon/fuego.png'></td>";
                            break;

                        case "hada" : echo "<td><img width='30'src='imagenesTiposPokemon/hada.png'></td>";
                            break;

                        case "hielo" : echo "<td><img width='30'src='imagenesTiposPokemon/hielo.png'></td>";
                            break;

                        case "lucha" : echo "<td><img width='30'src='imagenesTiposPokemon/lucha.jpg'></td>";
                            break;

                        case "normal" : echo "<td><img width='30'src='imagenesTiposPokemon/normal.jpg'></td>";
                            break;

                        case "piedra" : echo "<td><img width='30'src='imagenesTiposPokemon/piedra.jpg'></td>";
                            break;

                        case "planta" : echo "<td><img width='30'src='imagenesTiposPokemon/planta.jpg'></td>";
                            break;

                        case "psiquico" : echo "<td><img width='30'src='imagenesTiposPokemon/psiquico.png'></td>";
                            break;

                        case "siniestro" : echo "<td><img width='30'src='imagenesTiposPokemon/siniestro.png'></td>";
                            break;

                        case "tierra" : echo "<td><img width='40'src='imagenesTiposPokemon/tierra.jpg'></td>";
                            break;

                        case "volador" : echo "<td><img width='30'src='imagenesTiposPokemon/volador.jpg'></td>";
                            break;

                    }


                }

                if($j == 4){
                    $descripcion = $filaObtenida[$i][$j];
                    echo"<td>$descripcion</td>";
                }





                /*aca iba el otro else*/


            }

            $idObtenido = $filaObtenida[$i][0];



            echo


            "   <td> <form method='post' action='funciones/eliminarPokemon.php'>
    
                    <button name='valorBoton' type='submit' value='$idObtenido'>Baja</button>
                    

            </form>
            
            <form method='post' action='funciones/editarPokemon.php'>
    
                    <button name='valorEditar' type='submit ' value='$idObtenido'>Modificacion</button>

            </form></td>";

            echo"</tr>";





        }
        echo " </table>";



    }

    echo

    " <form class='w3-padding-large' method='post' action='funciones/nuevoPokemon.php'>

                    <button type='submit'>Nuevo pokemon</button>

            </form>";
}

?>





