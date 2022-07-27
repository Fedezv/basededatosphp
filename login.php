<?php

include 'conexion.php';


$consulta = "SELECT * FROM usuario WHERE email='{$_POST['email']}' AND password='{$_POST['password']}'";
$query = mysqli_query($conexion,$consulta);

$num_filas = mysqli_num_rows($query);

if($num_filas){
    
   header('location: formulario.php');
}
else{

   header('location: index.php');
   
}

?>


