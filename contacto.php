<?php include("header.php"); ?>
        <main>
            
            <!--Cover

            Se pone el titulo de la seccion correspondiente-->
            
            <section class="cover-c">
                <p class="tituloprincipal">Contáctenos</p>
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
            

            <!--Fin reservaciones-->

            <!--Inicio de formulario-->
            <div class="container-fluid">

            	<div class="container">
              		<div class="row">
            			<div class="col col-xs-12 secOn">
            				<h2 class="titulo-h2">Formulario de Reservas</h2>
            				
							<form method="post" action="test.php">
                   
                            <input type="text" id="nombre" name="Nombre" placeholder="Nombre">
                            <br>
                            <br>
                            <input type="text" id="apellido" name="Apellido" placeholder="Apellido">
                            <br>
                            <br>
                            <input type="text" id="cedula" name="Cedula" placeholder="Cedula">
                            <br>
                            <br>
                            <input type="tel" id="telefono" name="Telefono" placeholder="Teléfono">
                            <br>
                            <br>
                            <input type="email" id="correo" name="Correo" placeholder="Correo">
                            <br>
                            <br>
                            <input type="text" id="fecha" name="Fecha" placeholder="Fecha">
                            <br>
                            <br>
                            <input type="submit" id="boton" name="boton" title="boton" value="Enviar">
                    <br>
                </form>


								


					
            			</div>


               		</div>
               		<div id="gracias">
                 
		                 <h2 class="subti-g">Gracias por preferirnos, lo contactaremos en unos momentos</h2>
		               
		            </div>
		            	
		               		
                   				
						

							

						       		
            
				</div>
            </div>
            <!-----Final de formulario-->

             
        </main>
<?php include("footer.php"); ?>