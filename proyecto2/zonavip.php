<?php
session_start();
if(isset($_SESSION["VIP"])){
    echo"Bienvenido/a a la zona VIP";
}
else{
    echo"No tienes permiso de entrar a la zona VIPs";
}
?>