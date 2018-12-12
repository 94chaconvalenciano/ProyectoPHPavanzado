<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <script src="../assets/jsbarcode.js"></script>
    <script src="../assets/jspdf.min.js"></script>
    <script src="../assets/functions.js"></script>

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style type="text/css">
        body {
            padding-top: 5rem;
            background-image: url(assets/pan.jpg);
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: center;
            padding-bottom: 7rem;
        }
    </style>
</head>


<body>

    <main role="main" class="container">

        <form class="col-5 m-auto" method="post">
            <h1 class="col-xl-12 text-center lean" style="color:white">NUEVA ORDEN</h1>
             <p class="col-xl-12 text-center lean" style="color:white">Por favor, complete todos los espacios solicitados </p>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Teléfono" name="Telefono" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Dirección" name="Direccion" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Correo Electrónico" name="correo" required>
            </div>
            <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1" name="Tipo" required>
                    <option>Seleciona un Tipo</option>
                    <option>LLevar</option>
                    <option>Express</option>
                </select>
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="Escriba su órden(443 caracteres máximo)" name="comentario" maxlength="443" style="height: 200px" required></textarea>
            </div>
            <input type="submit" name="Submit" class="btn btn-primary m-auto" value="Enviar Pedido">
            <a href="index.php" class="btn btn-danger m-auto">Volver a Inicio</a>
            <?php
        if(isset($_POST['Submit'])) {
        $nombre = $_POST['nombre'];
        $telefono = $_POST['Telefono'];
        $direccion = $_POST['Direccion'];
        $tipo = $_POST['Tipo'];
        $comentario = $_POST['comentario'];

        include_once("config.php");

        $result = mysqli_query($mysqli, "INSERT INTO
        ordenes(id, nombre, telefono, direccion, calificacion, comentario) VALUES('','$nombre','$telefono','$direccion','$tipo','$comentario')");   
            
            
        }
    ?>
        </form>
    </main><!-- /.container -->


    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>