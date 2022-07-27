<?php

include 'conexion.php';

$id = mysqli_real_escape_string($conexion,$_GET['id']);
$query = "SELECT * FROM instrumentos WHERE id = '$id'";
$resultado = mysqli_query($conexion,$query);
$row = mysqli_fetch_array($resultado);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>Editar Datos</title>
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4 mx-auto p-2 bg-dark">
                    <form action="updated.php?id=<?php echo $_GET['id']; ?>" method="POST">
                        <h4 class="text-center text-white mb-3">Editar Datos</h4>
                        <div class="form-group">
                            <input class="form-control" type="text" name="instrumento" value="<?php echo $row['instrumento']; ?>" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="marca" value="<?php echo $row['marca']; ?>" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="modelo" value="<?php echo $row['modelo']; ?>" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="precio" value="<?php echo $row['precio']; ?>" required>
                        </div>
                            
                        <input type="submit" name="updated" class="btn btn-success btn-block">
                        
                    </form>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    </body>
</html>
