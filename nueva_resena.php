<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style type="text/css">
        body {
            padding-top: 5rem;
            background-image: url(assets/cupcakes.jpg);
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>


<body>

    <main role="main" class="container">

        <form class="col-5 m-auto" method="post">
            <H1 class="col-xl-12 text-center" style="color:white">RESEÑAS</H1>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Correo Electrónico" name="correo" id="correo" required>
            </div>
            <div class="form-group">
                <select class="form-control" id="calificacion" name="calificacion" required>
                    <option>Seleciona una calificación</option>
                    <option>Positiva</option>
                    <option>Negativa</option>
                </select>
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="Reseña(443 caracteres máximo)" name="texto" maxlength="443" style="height: 200px" id="texto" required></textarea>
            </div>
            <div class="form-group row col-lg-12 justify-content-center">
                        <div class="col-lg-6">
                            <img id="barcode" width="100%" style="margin-top: 20px">
                        </div>

                    </div>
            <input type="submit" name="Submit" onclick="generarcupon()" class="btn btn-primary m-auto" value="Enviar">
            <a href="index.php" class="btn btn-danger m-auto">Volver a Inicio</a>
            <?php
        if(isset($_POST['Submit'])) {
        $fecha= date("Y-m-d H:i:s");
        $nombre = $_POST['nombre'];
        $texto = $_POST['texto'];
        $correo = $_POST['correo'];
        $calificacion = $_POST['calificacion'];

        include_once("config.php");

        $result = mysqli_query($mysqli, "INSERT INTO
        resenas(id, fecha, correo, autor, calificacion, texto) VALUES('','$fecha','$correo','$nombre','$calificacion','$texto')");
            
        if($calificacion == "Positiva"){
            header("Location: cupon.php?nombre=$nombre&correo=$correo&fecha=$fecha");
        }    
            
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