<?php
// Desplegar usuarios por el id seleccionado
// Getting id from url
$nombre = $_GET['nombre'];
$correo = $_GET['correo'];
$fecha = $_GET['fecha'];
?>
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
            background-image: url(assets/cafeteriabn.jpg);
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
            <h1 class="col-xl-12 text-center lean" style="color:white">GRACIAS POR DEJARNOS TU OPINIÓN</h1>
             <p class="col-xl-12 text-center lean" style="color:white">Te dejamos este cupón de cortesía</p>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" value="<?php echo $nombre;?>" disabled>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Correo Electrónico" name="correo" id="correo" value="<?php echo $correo;?>" disabled>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Fecha" name="fecha" id="fecha" value="<?php echo $fecha;?>" disabled>
            </div>
            <div class="row form-group">
                <div class="col-8">
                <input type="text" class="form-control" placeholder="Código" name="codigo" id="codigo" required readonly="readonly">
                </div>
                 <div class="col-4">
                <input type="button" class="btn btn-info" value="Generar Cupón" id="generar_codigo" name="generar_codigo" onclick="generarSKU()">
                </div>
            </div>
            <div class="form-group row col-lg-12 justify-content-center">
                <div class="col-lg-6">
                    <img id="barcode" width="100%" style="margin-top: 20px">
                    <img id="headerpdf" src="assets/header_pdf.png" width="100%" style="margin-top: 20px; display: none">
                </div>

            </div>
            <input type="submit" onclick="guardarSKU()" name="Submit" class="btn btn-success m-auto" value="Descargar cupón y volver a inicio.">
            <?php
                if(isset($_POST['Submit'])) {
                    
                $nombre = $_GET['nombre'];
                $correo = $_GET['correo'];
                $fecha = $_GET['fecha'];
                $codigo = $_POST['codigo'];
                    
                    

                include_once("config.php");

                $result = mysqli_query($mysqli, "INSERT INTO
                cupones(id_cupon, fecha, cliente, correo, codigo) VALUES('','$fecha','$nombre','$correo','$codigo')");
                    
                    header("Location:index.php");
                    
                

                }
            ?>
        </form>
    </main><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="js/jsbarcode.js"></script>
    <script type="text/javascript" src="js/jspdf.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>