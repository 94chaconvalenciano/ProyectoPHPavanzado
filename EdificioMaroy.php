<?php include("header.php"); ?>
            <main>
                
           <section class="cover">
                <p class="tituloprincipal" style="padding-top: 30vh;">Edificio Maroy</p>
            </section>



              <section class="sec50prin">
                <div class="sec33">
                    <img src="assets/Fachada.jpg" alt="Fachada del Edificio" class="imagen" id="fachada"> </div>

                <div class="sec50" id="Arquitectura">
                    <h2>Origenes y Arquitectura</h2>
                    <br>
                    <span id="par1">
                    <p> Localizado entre las calles 3 y la avenida 1, el edificio Maroy (tambien conocido como Edificio Roy) fue contruido en 1923 por el arquitecto Gerardo Rovira. Este pertenecio a Sigurd Roy Holstad y a Maria Jimenez de la Guardia.</p> <br>

    
                   <p> Su estilo arquitectonico es neoclasicista, lo que significa que es una mezcla elementos de diferentes epocas artisticas y arquitectonicas. Es asi como puede compartir rasgos con la estetica romantica y añadir nuevos elementos a la sensillez y claridad de las edificaciones clasicas grecorromanas. </p> <br>

                   <p>Como parte de sus caracteristicas arquitectonicas estan; una cupula como remate del vestibulo, balcones con trabajos de herreria, columnas adosadas con motivos florales y un techo que cuenta con buhardillas o ventanas que sobrasalen de la pendiente del techado. Estos elementos son muy comunes en la arquitectura barroca, la cual se genero en Roma durante el s XVII y se caracterizaba por ser sumamente adornada.</p>
                   </span>
                   <button id="add">Ver Mas</button>

                   <span id="par2">
                   	<p>Cabe descatar que el Edificio Maroy no es la unica estructura con influencia neoclasica en el pais. Otras obras arquitectonicas que importantes son: el Teatron Nacional de Costa Rica, el Teatro Variedades, el Teatro Melico Salazar, el Edificio de Correos y Telegrafos de Costa Rica, el Edificio Metalico, entre otros.</p>
                   </span>

                    </div>
                </section>

                 <section class="sec50prin">

                    <div class="sec50" id="Patrimonio">
                        <h3>Patrimonio Historico y Cultural</h3> <br>
                        
                    	<p> La edificacion tambien tiene un significado cultural, politico y social que va mas alla de su arquitectura. Antes de su construccion, en su lugar se encontraba la antigua editorial del periodico "La informacion". Este, luego fue incendiado en 1919 por un movimiento popular que estaba en contra de la dictara de Federico Tinoco, debido a que la editorial apoyaba el movimiento de la dictora. </p> <br>

                    	<p> En el año 2000, fue restaurado y declarado patrimonio arquitectonico por parte del Centro de Patrimonio del Ministerio de Cultura de Costa Rica. Dentro de las razones para recibir dicho reconocimiento destaca el hecho de que es una de las pocas edificaciones de estilo neoclasico que sobreviven y dan testimonio del periodo historico comprendido entre el sXIX y principios del XX en Costa Rica. </p><br>

                       <p> Otra de las razones es que fue construido con concreto armado, lo que en su momento era considerado una innovacion debido a que el material es resistente a los sismos e incedios, sustituyendo asi otros materiales como el adobe y el bahareque. Por ultimo, fue uno de los primeros eficios en tener mas de 2 pisos, lo cual era poco comun en San Jose, en la epoca de 1920. </p>

                       
                   </div>
                   <div class="sec33"> <img src="assets/pintura.jpg" alt="Acuarela" class="imagen" id="pintura"> </div>
               </section>
    <script>
        	$(document).ready(function(){
        		
   
        		$('#fachada, #pintura').hide().delay(600).fadeIn(800);
        		$('#fachada, #pintura').mouseenter(function(){
        			$(this).css("opacity","0.5");
        		})
        		$('#fachada, #pintura').mouseleave(function(){
        			$(this).css("opacity","1");
        		})
        		$('#par2').hide();

        		$('#add').click(function(){
        			$('#par1').hide();
        			$('#par2').show();
        			$('#add').html('Volver');
        			$('#add').click(function(){
        				$('#par2').hide();
        				$("#par1").show();
        				$('#add').html('Ver Mas');
        			});
        		})

        	})
       
        </script>
        </main>
<?php include("footer.php"); ?>
