<?php include("header.php"); ?>
           
	<body>
         <!--Cover

            Se pone el titulo de la seccion correspondiente-->
            
            <section class="cover-c">
                <p class="tituloprincipal">Reserva</p>
            </section>
            
            
            
            <!--Sec100

            -Solo se debe colocar a un section la clase "sec100"
            -A las imagenes se debe colocar la clase "imagen" y debe tener una relacion de aspecto 4:3
            -->
            <div class="container-fluid">
	            <div class="container">
	            	<div class="row">
						<div class="col-xs-12 columna1" ></div>
						
		                	<h1 class="titulo-c">Visita nuestra cafetería</h1>
		                	<p class="parrafo-c">Café Au Lait esta ubicada en el centro de San José, si deseas hacer una reservación, favor contactarnos a la siguiente información.</p>
		                </div>
	             </div>
             </div>
           
            
         
            
            <!--Reservaciones-->
            <div id="reservacion">
                 
                 <h2 class="subti-c">¿Quieres hacer una reservación? <strong> +506 2254-6788</strong></h2>
               
            </div>
        
      <?php
        
        
        if (isset($_POST["Nombre"])){
            
            
            echo '<div class="sec100prin"> <h1>Informacion de su Reserva </h1>' .
            '<div class="sec100"><div class="sec100" style="border: 2px solid orange; text-align: center">Nombre:' .' '. $_POST["Nombre"] . ' '. $_POST["Apellido"] .
                "<br>".
            'Cedula:' . ' '. $_POST["Cedula"] . 
                "<br>".
            'Telefono:' .' '. $_POST["Telefono"] .
                "<br>".
            'Email:' .' '. $_POST["Correo"] . ' ' . 
                "<br>".
            'La fecha de su reserva es:' .' '.$_POST["Fecha"] . 
                 
                "<br></div></div> </div>" ;}

        else{
            echo "hubo un error";
        }
        
    ?>
        <?php
        
        $Nombre = "";
        if(!empty($_POST["Nombre"])){
            $Nombre = $_POST["Nombre"];
        }
        $Apellido = "";
        if(!empty($_POST["Apellido"])){
            $Apellido = $_POST["Apellido"];
        }
        $Cedula = "";
        if(!empty($_POST["Cedula"])){
            $Cedula = $_POST["Cedula"];
        }
        $Telefono = "";
        if(!empty($_POST["Telefono"])){
            $Telefono = $_POST["Telefono"];
        }
        $Correo = "";
        if(!empty($_POST["Correo"])){
            $Correo = $_POST["Correo"];
        }
        $Fecha = "";
        if(!empty($_POST["Fecha"])){
            $Contratacion= $_POST["Fecha"];
        }
        
        
        $archivos="datos.txt";
        
        
        $archivos="$Nombre".".txt";
            $archivos=fopen("$archivos","a+");
            fwrite($archivos,$Nombre." ".$Apellido." - ".$Cedula." - ".$Telefono." - ".$Fecha." - ");
            fclose($archivos);
        
        ?>


    
<?php include("footer.php"); ?>
        
