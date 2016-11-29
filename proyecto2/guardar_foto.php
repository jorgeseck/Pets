<?php
$conexion = mysqli_connect('localhost', 'root', 'lalogarciar', 'cuartoa');

$nombre = $_POST['nombre'];
$raza = $_POST['Raza'];
$edad = $_POST['Edad'];
$telefono = $_POST['Telefono'];
$descripcion = $_POST['Descripcion'];
    $nombre_file = mktime() .'.jpg';
    $posicion = 0;

    $consulta = <<<SQL
INSERT INTO 
   foto
    
SET
    nombre='$nombre',
    raza='$raza',
    edad='$edad',
    telefono='$telefono',
    descripcion='$descripcion',
    archivo='$nombre_file'
SQL;
    mysqli_query($conexion, $consulta);

        $origen = $_FILES['archivo']['tmp_name'];
        $destino = "fotos/$nombre_file";
     
        move_uploaded_file ($origen, $destino);

        header("Location: home.php");    
?>