<?php

include 'conexion.php';


$consultasql = "SELECT * FROM instrumentos";
$query = mysqli_query($conexion,$consultasql);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="style.css" rel="stylecheet">
        <title>Formulario</title>
    </head>
    <body>
        <!--<div class="container p-3 border">
        <a href="logout.php" class="btn btn-secondary btn-block btn-sm d-inline ml-2">Cerrar Sesión</a>
        </div>-->

        <div class="container px-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-secondary d-flex justify-content-between">
                <span class="navbar-brand h1 text-white my-2" href="#">Lista de Productos</span>
                
                
                <button class="btn btn-dark ">
                    <a href="logout.php" class="btn btn-dark btn-sm">Cerrar Sesión</a>
                </button>
                
            </nav>

        </div>





        
        <div class="container p-4 border">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="text-center">Ingreso de Datos</h4>
                    <form action="insertar.php" method="POST" id="formulario">
                        <div class="form-group">
                            <input type="text" name="instrumento" id="campo1" class="form-control" placeholder="Instrumento" maxlength="10">
                            
                            <small id="error1"></small>

                        </div>
                        <div class="form-group">
                            <input type="text" name="marca" id="campo2" class="form-control" placeholder="Marca" maxlength="10">
                            <small id="error2"></small>
                        </div>
                        <div class="form-group">
                            <input type="text" name="modelo" id="campo3" class="form-control" placeholder="Modelo"  maxlength="15">
                            <small id="error3"></small>
                        </div>
                        <div class="form-group">
                            <input type="text" name="precio" id="campo4" class="form-control" placeholder="Precio"  maxlength="6">
                            <small id="error4"></small>
                        </div>
                        <input type="submit" id="insertar" class="btn btn-success btn-block" name="insertar">
                    </form>

                    <form action="buscar.php" method="POST" id="buscar">
                        
                        <input class="form-control mt-4 mb-2" name="buscar" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
                        
                    </form>

                    <?php if(isset($_SESSION['message'])) { ?>
                        <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message']; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php session_unset(); } ?>
                </div>
                <div class="col-md-8">
                    <h4 class="text-center">Consulta de Datos</h4>
                    <table class="table table-bordered table-secondary">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Instrumento</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <?php
                        while($filas = $listado = mysqli_fetch_array($query))
                        {?>
                        <tr>
                            <td>  <?php   echo $filas['id']; ?></td>
                            <td>  <?php   echo $filas['instrumento']; ?></td>
                            <td>  <?php   echo $filas['marca']; ?> </td>
                            <td>  <?php   echo $filas['modelo']; ?> </td>
                            <td>  <?php   echo $filas['precio']; ?> </td>
                            <td>  
                                <a href="update.php?id=<?php echo $filas['id']; ?>">
                                    <i class="fa fa-pencil ml-2" aria-hidden="true"></i>
                                </a>
                                <a href="delete.php?id=<?php echo $filas['id']; ?>" class="text-danger ml-4">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <?php } ?> 
                    </table>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <!--<script src="javascript.js"></script>-->
        <script src="dom.js"></script>
    </body>
</html>