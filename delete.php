<?php

include 'conexion.php';

$id = $_GET['id'];

$query = "DELETE FROM instrumentos WHERE id = '$id'";
$resultado = mysqli_query($conexion,$query);

if(!$resultado){

    echo 'Error';

}
else {

    $_SESSION['message'] = 'Datos Borrados Correctamente';
    $_SESSION ['message_type'] = 'primary';
    header("Location: formulario.php");

}
?>
