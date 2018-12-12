<?php include("header.php"); ?>
        <main>
            
            <!--Cover

            Se pone el titulo de la seccion correspondiente-->
            
            <section class="cover">
            <p class="tituloprincipal" id="titulo_principal">Nuevo Producto</p>
        </section>
            
            <!--Sec100

            -Solo se debe colocar a un section la clase "sec100"
            -A las imagenes se debe colocar la clase "imagen" y debe tener una relacion de aspecto 4:3
            -->
            <div class="container-fluid">
	            <div class="container">
	            	<div class="row">
						<div class="col-xs-12 columna1" ></div>
						
                        <h1 class="titulo-c">Agregar Producto</h1>
		                </div>
	             </div>
             </div>
           
            
            <!--Inicio de formulario-->
            <div class="container-fluid">

            	<div class="container">
              		<div class="row">
            			<div class="col col-xs-12 secOn">
            				<h2 class="titulo-h2"></h2>
            				
							<form action="Menu.php"  method="post" id="formulario">

								<input type="text" id="titulo" name="titulo" placeholder="Escriba El titulo del Producto">
								
								<input type="file" id="imagenp" name="imagenp" placeholder="Seleccione una imagen">

								<textarea name="descripcion" id="descripcion" cols="30" rows="30" placeholder="Escriba la descripción"></textarea>

								<input class="agregar" type="submit" value="Agregar" id="Agregar">
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