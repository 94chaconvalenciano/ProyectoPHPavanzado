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
            				<h2 class="titulo-h2">Formulario de contacto</h2>
            				
							<form action="Result_Form.html" target="_blank" method="get" id="formulario">
		
								<label for="nombre">Nombre:</label>
								<input type="text" id="nombre" placeholder="Escriba su nombre">
								<p class="alertName" id="alertName">Por favor digite su nombre</p>
								
								<label for="email">Email:</label>
								<input type="email" id="email" placeholder="Escriba su email">
								<p class="alertCorreo" id="alertCorreo">Por favor complete su correo</p>

								<label for="mensaje">Mensaje:</label>
								<textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Escriba su mensaje"></textarea>
								<p class="alertMensaje" id="alertMensaje">Por favor Escriba un mensaje</p>

								<input class="btn" type="submit" value="enviar" id="enviar">
								<p class="alertError" id="alertError">Debe rellenar todos los espacios</p>


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