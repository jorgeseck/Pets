<?php

include("conexionbase.php");

$user=$_POST["Nombre"];
$pass=$_POST["contraseña"];

    
$resultados=$mysqli->query("SELECT * FROM usuarios WHERE Nombre='$user' AND contraseña='$pass'");
$filas=$resultados->fetch_all();

if(count($filas)==0){
    echo"El usuario o la contraseña son incorrectas";
    $_SESSION["VIP"]=NULL;
    
}
else{
    echo"Ya tienes acceso a la zona VIP";
    session_start();
    $_SESSION["VIP"]=$user;
    $url="home.php";
    header("Location:".$url);
    die();
}
?>