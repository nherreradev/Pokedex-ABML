<?php

include_once ("path.php");



$conexion = getPath("funciones/procesarLogin.php");



$usuario = $_POST["usuario"];




$password = $_POST["password"];

$sql = "SELECT * FROM `usuario` WHERE usuario.usuario = '$usuario'";

$resultadoConsulta = $conexion->query($sql);






if ($resultadoConsulta){

    $array = $resultadoConsulta->fetch_row();

    if ($array!=null){

    if($array[2] == $password){
        session_start();
        $_SESSION["estado"] = 1;
        header("Location: ../index.php");

    }

    }else{
        header("Location: ../index.php");

    }



}else{
    header("Location: ../index.php");


}



?>
