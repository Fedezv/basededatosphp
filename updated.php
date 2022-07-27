<?php

include 'conexion.php';

$id = mysqli_real_escape_string($conexion,$_GET['id']);
$instrumento = mysqli_real_escape_string($conexion,$_POST['instrumento']);
$marca = mysqli_real_escape_string($conexion,$_POST['marca']);
$modelo = mysqli_real_escape_string($conexion,$_POST['modelo']);
$precio = mysqli_real_escape_string($conexion,$_POST['precio']);
$query = "UPDATE instrumentos set instrumento='$instrumento',marca='$marca',modelo='$modelo',precio='$precio' WHERE id='$id'";
$resultado = mysqli_query($conexion,$query);

if(!$resultado){

    echo 'Error al actualizar los datos';

}
else{

    $_SESSION['message'] = 'Datos Actualizados Correctamente';
    $_SESSION ['message_type'] = 'primary';
    header("Location: formulario.php");

}

?>