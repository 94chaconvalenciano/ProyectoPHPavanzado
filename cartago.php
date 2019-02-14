<?php include("header.php"); ?>
<section class="cover">

                <p class="tituloprincipal">cartago</p>

                <p></p>
            </section>

        

       <demo id="idcafe">
            

            <section class="sec100">

                <h1>lugares donde producen cafe   </h1>
           
                <p >Cartago es el centro poblado del Norte del Valle del Cauca, una zona afectada por las cordilleras central y oriental, lo que le otorga las cualidades geográficas necesarias para la producción de café.
                    La zona cafetalera se ubica en tierra de influencia del Volcán Irazú y esa cercanía ha permitido producir una bebida gourmet que se conoce como el Bordeaux de Costa Rica y aparte esta orosi, es una  zona cafetalera  se puede describir como un valle alargado protegido por sus laderas. Comprende las subregiones: Orosi, Cachí y Paraíso. produce café en fincas con altitudes que van de los 1.000 a los 1.400 metros; Cachí entre los 1.000 y 1.300 y Paraíso de 1.200 a 1.350 metros. Tiene suelos de origen volcánico, de alta fertilidad.
                ahora conocida como Los Santos. Protegida por sierras en la vertiente del Pacífico, esta región es un santuario de aves místicas y bosques. Caturra y Catuaí son las principales variedades, que producen café con una cafeína muy suave, una característica muy apreciada por los mercados más exigentes del mundo.  .</p>

<br>
               <button type="button" class="bnt bnt-primary" onclick="cargarDatos()">tipos de cafes</button>
               <table id="idproducecafe" class="table table-striped"></table>
                 <br>
            </section>

           
<section class="sec100">
    <div id="contenido"></div>
    <button class="bnt bnt-succeso" onclick="cambiar()" >plantas cafe</button>
    <h3>Características de cafe</h3>
    <p>la región produzca un café suave que ofrece una copa equilibrada, con buena acidez, cuerpo y aromaAcidez, de media a ligera, Cuerpo: bueno  y su Aroma: buena</p>
    <p>Caturra y Catuaí son las principales variedades, que producen café con una cafeína muy suave, una característica muy apreciada por los mercados más exigentes del mundo. </p>
     
    <div id="contenido3" class="container"></div>
   
    
</section>
<
<section class="sec100">
    <h4> la Cosecha</h4>
    <p> Orosi y Paraíso se recolecta el café entre agosto y febrero; en Cachí de octubre a febrero.</p>
    <div id="contenido2"></div>
    
     
     
</section>
<section class="sec100">
<h6>la produccion de cafe de cartago </h6>
  <div class="container">
    <form class="form-grup">
   tipo de cafe <input type="text" class="form-control" onkeyup="buscar(this.value)">
   </form>
   <p>Buscar los tipos de cafe </p><br>
   <span id="resultado"></span>

</section>
                    
<p id="demo"></p>
                   

                      <footer>

                <p>Hecho con ❤ </p>

             </footer>

    
           
<script type="text/javascript">
	function ir(){
		window.location.href='mapa.php';
	}
</script>





<script type="text/javascript">
    function cargarDatos() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
     if (this.readyState == 4 && this.status == 200) {
          leer(this);
     }

    };
    xhttp.open("GET","sele.xml",true);
    xhttp.send();

    };
    
    function leer(xml){
        var i;
        var xmlDocumento = xml.responseXML;
        var tabla = "<tr>TIPOS</tr><tr>PRODUCION</tr>";
        var lista = xmlDocumento.getElementsByTagName("CAFE");


     for (var i = 0; i <lista.length; i++) {
       tabla+= "<tr><td>" + 
       lista[i].getElementsByTagName("TIPOS")[0].childNodes[0].nodeValue + "<td></td>" + 
       lista[i].getElementsByTagName("PRODUCION")[0].childNodes[0].nodeValue +
       "<td></tr>"
     }

     document.getElementById("idproducecafe").innerHTML =tabla;

    }

</script>
    
<script type="text/javascript">
    function cambiar(){
        $("#contenido").load("text.txt");
    }
</script>

<script type="text/javascript">
  function buscar(caracters){
    if (caracters.length == 0) {
      document.getElementById("resultado").innerHTML="";
      return;

    }else{

      xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
          document.getElementById("resultado").innerHTML = this.responseText;

        }
      };
      xmlhttp.open("Get","datos.php?preguntar="+caracteres,true);
      xmlhttp.send();


    }
  }
</script>