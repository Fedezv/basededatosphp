<?php

include 'conexion.php';


if(isset($_POST['insertar']) && !empty($_POST['insertar']) && isset($_POST['instrumento']) && isset($_POST['marca']) && isset($_POST['modelo']) && isset($_POST['precio'])
   && !empty($_POST['instrumento']) && !empty($_POST['marca']) && !empty($_POST['modelo']) && !empty($_POST['precio']) 
   && !is_numeric($_POST['instrumento']) && !is_numeric($_POST['marca']) && !is_numeric($_POST['modelo']) && is_numeric($_POST['precio'])){

    $insertar = mysqli_real_escape_string($conexion,$_POST['insertar']);

    $instrumento = mysqli_real_escape_string($conexion,$_POST['instrumento']);
    $marca = mysqli_real_escape_string($conexion,$_POST['marca']);
    $modelo = mysqli_real_escape_string($conexion,$_POST['modelo']);
    $precio = mysqli_real_escape_string($conexion,$_POST['precio']);

    $query = "INSERT INTO instrumentos(instrumento,marca,modelo,precio) VALUES ('$instrumento','$marca','$modelo','$precio')";
    
    //echo '<br>';
    //echo $query;
    //echo '<br>';
    
    mysqli_query($conexion,$query); 
    

    $_SESSION['message'] = 'Datos Ingresados Correctamente';
    $_SESSION ['message_type'] = 'success';
    header("Location: formulario.php");
    
}
else{

    
    $_SESSION['message'] = 'Faltan rellenar campos';
    $_SESSION ['message_type'] = 'danger';
    header("Location: formulario.php");
    
}
?>