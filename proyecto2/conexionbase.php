<?php
$mysqli=new mysqli("localhost","root","lalogarciar","cuartoa");
if($mysqli->connect_errno){
    echo"No se pudo conectar a la base de datos".$mysqli->connect_error;
}

?>