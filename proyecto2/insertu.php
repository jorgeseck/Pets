<?php

include("conexionbase.php");

if ($mysqli){
    $user=$_POST["usuario"];
    $apell=$_POST["apellido"]; 
    $cont=$_POST["contraseña"];
    $cons=$mysqli->query("INSERT INTO usuarios (nombre,apellidos,contraseña) VALUES('$user','$apell','$cont')");
    
    $resultadoConsulta = mysqli_query($mysqli,$cons);
    
    
    echo "<script>location.href='home.php'</script>";
}

?>