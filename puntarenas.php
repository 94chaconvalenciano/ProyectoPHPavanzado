<?php include("header.php"); ?>
	<!-- INDICE 
	
	    1. Region Cafetalera Brunca
	        a. Coto Brus
	        b. Perez Zeledon	    
	    2. Galeria de Imagenes
	    
	    3. AJAX de Region Cafetalera Brunca
	    4. AJAX de Galeria de Imagenes
	-->

	<main>
	<section class="cover">
                <p class="tituloprincipal" style="padding-top: 30vh;">Cafe de Puntarenas</p>
            </section>


    <!--    ********* Region Cafetalera Brunca ******-->	
	<div class="sec100">
		<h2>Region Cafetalera Brunca</h2>
		<p>Está situada en el sur de Costa Rica. La conforman los dos cantones productores de café más jóvenes: Coto Brus, con frontera con Panamá, y Pérez Zeledón.</p>
		<p>Coto Brus se ubica en las faldas de la Cordillera de Talamanca, que divide Costa Rica con respecto a los océanos Pacifico y Atlántico. También Pérez Zeledón, pero más al noroeste cerca del pico más alto de Costa Rica, el Chirripó (3.820 mts.)</p>
		<p id="texto"></p>
		
     <!--    ********* a. Coto Brus y b. Perez Zeledon ******-->	   
        <div id="regiones">
    
		</div>
		<button onclick="mostrar()" id="vermas">Mostrar Mas</button>
		<button onclick="ocultar()" id="vermenos">Mostrar Menos</button>
		<button onclick="regiones()" id="region">Regiones</button>
		

	</div>
	
	<!--    ********* 2. Galeria de Imagenes ******-->	
	<div  class="sec100">
         
        <div class="sec100" id="listaImagenes">
       
	   <img src="assets/perez1.jpg" width="333" height="auto" onmouseover="aumentar(this)">
	   <img src="assets/perez2.png" width="333" height="auto" onmouseover="aumentar(this)">
	  <img src="assets/cotobrus1.gif" width="333" height="auto" onmouseover="aumentar(this)">
	     
	    </div>
	  <div class="sec100" id="imagenGrande"></div>
	</div>
	
	
	
	
	
	</main>


	<script type="text/javascript">
        /*----------- 3. Ajax de Region Cafetalera Brunca ---------*/
		$("#vermenos").hide();
        $("#regiones").hide();
		function mostrar(){
			$("#texto").show();
			$("#texto").load("assets/puntarenas.txt");
			$("#vermas").hide();
			$("#vermenos").show();
		}

		function ocultar(){
			$("#texto").hide();
			$("#vermenos").hide();
			$("#vermas").show();
		}


		function regiones(){
            $('#regiones').show();
            
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
				if (this.readyState == 4 && this.status == 200){
					var contenido = xhr.responseText;
                     leer(this);
					//Parte de Galeria de Imagenes
                    var imagen = new Image();
					imagen.src = contenido;
                   
				}
			};
            
			xhttp.open("GET", "assets/brunca.xml", true);
            xhttp.send();
          
            //Parte de Galeria de Imagenes
            xhttp.open("GET",urlImagen,true);
			xhttp.send(null);
		}
        
        function leer(xml){
            var i;
            var xmlDocumento = xml.responseXML;
            var lista = "<ul>";
            var item = xmlDocumento.getElementsByTagName("REGION");
            
            for(i=0; i < item.length; i++) {
                lista += "<li>"+ 
                    item[i].getElementsByTagName("NOMBRE")[0].childNodes[0].nodeValue+"</li><li>"+
                    item[i].getElementsByTagName("INTRO")[0].childNodes[0].nodeValue+"</li><li>"+
                    item[i].getElementsByTagName("CARACTERISTICAS")[0].childNodes[0].nodeValue+"</li><li>"+
                    item[i].getElementsByTagName("COSECHA")[0].childNodes[0].nodeValue+"</li><li>"+
                    item[i].getElementsByTagName("ORGANOLEPTICO")[0].childNodes[0].nodeValue+"</li>"
                
            }
            
            document.getElementById("#regiones").innerHTML = lista;
        }

         /*----------- 4. Ajax de Galeria de Imagenes ---------*/
         function aumentar(imagen){
            var directorio = imagen.src;
            var imagenAumentada = "<img src='" + directorio + "'>";
            document.getElementById("imagenGrande").innerHTML = imagenAumentada;
        }
        
        


	</script>

<?php include("footer.php"); ?>