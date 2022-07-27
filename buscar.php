<?php

include 'conexion.php';

//echo 'hola soy buscar';

/*Comodin de Sql=>...like=>...  '%a'   que me traiga algo que empiece con a
                                'a%'   que me traiga algo que termine con a
                                '%a%'  que me traiga algo que contenga a

*/

//echo '<pre>';
//var_dump($_POST); Para saber que me trae el formulario
//echo '</pre>';

//$busqueda = $_POST['buscar']; Sin revisar caracteres extraños

//Para Depurar (?)

/*
if(isset($_POST ['buscar'])){ 
}

if(is_null($_POST ['buscar'])){
}

if(is_numeric($_POST ['buscar'])){
}

if(empty($_POST ['buscar'])){
}
*/

//Guardar en una funcion que revisa que no tenga caracteres extraños
$buscar = mysqli_real_escape_string($conexion,$_POST['buscar']);



//$consultas ="SELECT * FROM instrumentos WHERE marca LIKE '%$busqueda%'"; Busqueda que contenga
$consultas ="SELECT * FROM instrumentos WHERE marca LIKE '$buscar'"; //Para inyeccion SQL, busca la palabra en concreto que le paso


echo $consultas;
echo '<br>';

$query = mysqli_query($conexion,$consultas);

echo '<br>';
echo '<pre>';
var_dump($query);
echo '</pre>';
echo '<br>';


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>Buscar</title>
    </head>
    <body>
    

        <table class="table table-bordered table-dark">
            <?php
                while($filas = $listado=mysqli_fetch_array($query))
                {?>

                <tr>
                    <td> <?php echo $filas['marca'];?> </td>
                </tr>

            <?php }  ?>

        </table>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </body>
</html>