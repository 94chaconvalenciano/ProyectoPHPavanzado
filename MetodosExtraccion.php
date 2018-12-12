<?php include("header.php"); ?>
<style>
      .imagen-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.9);
                z-index: 9999;
                display: none;
            }

            .imagen-overlay .imagen-overlay-close {
                display: block;
                position: absolute;
                top: 20px;
                left: 20px;
                width: 40px;
                height: 40px;
                border-radius: 50%;
                border: 1px solid #eee;
                line-height: 35px;
                font-size: 20px;
                color: #eee;
                text-align: center;
                cursor: pointer;
            }

            .imagen-overlay img {
                width: auto;
                max-width: 80%;
                position: absolute;
                top: 50%;
                left: 70%;
                -webkit-transform: translate(-50%, -50%);
                -moz-transform: translate(-50%, -50%);
                -o-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }
            .imagen{
                opacity: 1;
                transition: .5s ease;
                backface-visibility: hidden;
            }
            .imagen:hover{
                opacity: 0.3;
            }
    
            .imagen:hover  .descripcionChemex{
                display: descripcionChemex;
            }

             #Thelist{
                margin-top: 100px;
                margin-left: 300px;
                margin-right: 500px;
                width: 200px;
                height: 600px;
                }

        
        #lista{
             height: 1000px;
           color: white;
             margin-left: 150px;
             margin-top: -590px;
           
              width: 30%;
               }
        #list1 , #list2, #list3 , #list4{
            font-size: 2vh;
        }
           ul {
            
              width:100%;
               }

          li {
            margin-top: 35px;
          }



</style>
        <main>
            
            <!--Cover

            Se pone el titulo de la seccion correspondiente-->
            
            <section class="cover">
                <p class="tituloprincipal">Métodos de Extracción</p>
            </section>
            

            <section class="sec100">

                <p>La forma de beber café ha evolucionado en los últimos años. Esta bebida nunca pasará de moda y si realmente buscas degustarlo correctamente entonces hay que conocerlo. Ahora más establecimientos ofrecen <strong>distintos métodos de extracción</strong>, los cuales no van dedicados únicamente a los expertos. Aunque a simple vista parecen artefactos complicados, con un poco de curiosidad –y antojo- verás que es muy sencillo entenderlos.<br><br>
                
                Cada uno de los métodos ofrece una taza de café distinta aunque se utilice el mismo grano y la misma cantidad de agua, por ello es importante que aprendas a reconocer cuál es tu favorito.<br><br>

                Existen <strong>tres tipos de métodos de extracción: los descendentes</strong> –en los que el agua depende totalmente de la gravedad, se vierte en la parte superior y desciende-; <strong>los de inmersión completa</strong>–el café está completamente en contacto con el agua- y los que <strong>combinan ambos tipos</strong> de extracción.<br><br>

                A continuación te explicamos <strong>seis métodos</strong> para que la próxima vez que vayas a un café te animes a pedir una taza distinta y sin miedo. </p>           
            
            </section>
            
<!-------------Notas para Lider Technico ----------------


Esta seccion sec33prin es sensible a la cantidad de caracteres en la parte descriptiva ya que al modificar el grid el float tira el match completamente a la derecha ya que los demas no calzan dentro de las especificaciones de los styles. 

Recomendacion meterlos dentro de otro div que se ajuste como un TODO para bajar las tres lineas dependiendo de la cantidad de informacion presentada o bien un nested table model ya que a como esta se ajusta individual. 

Notas: 09/04/18: Se crea la pagina con informacion basica para avance, se crean clases adicionales al master css para poder controlar el efecto fade in/fade out. Se documenta la funcionalidad de la funcion. 

Notas: 09/05/18 Se divieron las secciones de 3 en 3 para manejarlas como grupo y no individuales. Se hacen actulizaciones en el codigo y se agrega toogle effect para las caracterticas de cada metodo. 



-->            
            <section class="sec33prin">
                <div class="sec33">
                    <h3>Chemex</h3>
                    <img src="assets/Chemex.jpg" title="Chemex" alt="Chemex" class="imagen">
                    <br>
                    <!--Poner clases distintas para cada párrafo de cada div, esto nos ayuda a usar la funcion toggle para cambiar entre los parrafos-->
                    <p class="descripcionChemex">El Chemex es un método de goteo, lo cual significa que el agua pasa a través de una capa de café y un filtro normalmente hecho de papel. <br><br>En comparación a otros, el Chemex te brinda una taza de café increíblemente limpia, sus filtros son entre un 20% o 30% más pesados que los demás de modo que puedan retener más de los aceites suspendidos durante el proceso de extracción y los sólidos no puedan atravesarlo.<br>&nbsp;</p>
                    <!--Este Parrafo tiene un display none por que es el que queremos ocultar con el toggle-->
                    <ul class="caractChemex" style="display: none">
                        <li>Método descendente.</li>
                        <li>Se recomienda para aquellos que empiezan a beber café de especialidad.</li>
                        <li>Se obtiene una taza de menor cuerpo, mayor dulzor, nula acidez y muy limpia, es decir, sin residuos.</li>
                    </ul>
                    <br>
                    <br>
                        <!--Poner una clase al boton para ejecutarlo en la funcion JQuery estipulada en los script tags-->
                    <button class="ver button">Ver/ocultar caracteristicas</button>
                </div>
                
                <div class="sec33">
                    <h3>V60</h3>
                    <img src="assets/V60.jpg" title="V60" alt="V60" class="imagen">
                    <br>
                    <!--Poner clases distintas para cada párrafo de cada div, esto nos ayuda a usar la funcion toggle para cambiar entre los parrafos-->
                    <p class="descripcionV60">El V60 es sensible a muchas variables de hecho, muchas más que la de otros conos de goteo. Esto se debe a tres aspectos del diseño:<br><br>
                        
                    La forma del cono en ángulo de 60º permite que el agua fluya hacia el centro, extendiendo el tiempo de contacto y su  único orificio grande permite modificar el sabor al alterar la velocidad del flujo de agua.
                    Las Estrías en espiral suben hacia la superficie y permiten que se libere el aire, maximizando la expansión de la molienda de café.<br>&nbsp;
                    </p>
                    <!--Este Parrafo tiene un display none por que es el que queremos ocultar con el toggle-->
                    <ul class="caractV60" style="display: none">
                        <li>Método descendente.</li>
                        <li>Se llama así porque el recipiente donde se coloca el café tiene forma de V y un ángulo de 60 grados.</li>
                        <li>Se obtiene una taza con cuerpo, textura sedosa, aromática y con acidez que se transforma en dulzor.</li>
                    </ul>
                        <!--Poner una clase al boton para ejecutarlo en la funcion JQuery estipulada en los script tags-->
                    <button class="ver2 button">Ver/ocultar caracteristicas</button>
                </div>
                <div class="sec33">
                    <h3>Kalita</h3>
                    <img src="assets/Kalita.jpg" title="Kalita" alt="Kalita" class="imagen">
                    <br>
                    <!--Poner clases distintas para cada párrafo de cada div, esto nos ayuda a usar la funcion toggle para cambiar entre los parrafos-->
                    <p class="descripcionKalita">Kalita es un método similar al Chemex o V60; se obtiene una taza limpia. Esto contrasta con el perfil de preparaciones de inmersión.<br><br>
                        
                        Kalita Wave tiene una característica diferente en su forma de extracción. En lugar de que el agua gotee de un solo orificio, su parte inferior es plana y tiene tres orificios para la extracción. Los cuales evitan que se canalice agua por la cama de café generando una taza supremamente limpia. <br>&nbsp;</p>
                    <!--Este Parrafo tiene un display none por que es el que queremos ocultar con el toggle-->
                    <ul class="caractKalita" style="display: none">
                        <li>Método descendente.</li>
                        <li>También es de goteo; cuenta con tres orificios pequeños y su filtro ondulado reduce el espacio de contacto entre el método y los granos. </li>
                        <li>Se obtiene una bebida con más cuerpo que el Chemex y el V60, y con una acidez y dulzor equilibrados.</li>
                    </ul>
                    <br>
                    <br>
                        <!--Poner una clase al boton para ejecutarlo en la funcion JQuery estipulada en los script tags-->
                    <button class="ver3 button">Ver/ocultar caracteristicas</button>
                </div>
            </section>
            <section class="sec33prin">
                <div class="sec33">
                    <h3>Prensa<br>Francesa</h3>
                    <img src="assets/Prensa.jpg" title="Prensa Francesa" alt="Prensa Francesa" class="imagen">
                    <br>
                    <!--Poner clases distintas para cada párrafo de cada div, esto nos ayuda a usar la funcion toggle para cambiar entre los parrafos-->
                    <p class="descripcionPrensa">La prensa francesa es un dispositivo de preparación por inmersión completa con un filtro de malla metálica.<br><br>Este garantiza algo en particular, una extracción viscosa con mucho cuerpo y un incremento en la textura debido a que la mayoría de los aceites quedan en la extracción  final pero también menos partículas de café. Les aviso que si no les gusta la sensación arenosa en el café, entonces probablemente la prensa no es para ustedes. </p>
                    <!--Este Parrafo tiene un display none por que es el que queremos ocultar con el toggle-->
                    <ul class="caractPrensa" style="display: none">
                        <li>Método de inmersión.</li>
                        <li>Se obtiene una taza con cuerpo medio, apariencia turbia, textura un poco terrosa –que a muchos resulta incómoda- y sabor alcalino.</li>
                        <li>Este garantiza algo en particular, una extracción viscosa con mucho cuerpo y un incremento en la textura debido a que la mayoría de los aceites quedan en la extracción final pero también menos partículas. </li>
                    </ul>
                    <br>
                    <br>
                    <!--Poner una clase al boton para ejecutarlo en la funcion JQuery estipulada en los script tags-->
                    <button class="ver4 button">Ver/ocultar caracteristicas</button>
                </div>
                <div class="sec33">
                    <h3>AeroPress<br>&nbsp;</h3>
                    <img src="assets/aeropress.jpg" title="AeroPress" alt="AeroPress" class="imagen">
                    <br>
                    <!--Poner clases distintas para cada párrafo de cada div, esto nos ayuda a usar la funcion toggle para cambiar entre los parrafos-->
                    <p class="descripcionAeroPress">La AeroPress es una combinación de cafetera de émbolo o prensa francesa con un filtro de papel que utiliza la presión del aire para elaborar un café con mas aceites y menos sedimentos.
                        <br><br>
                    La presión aplicada manualmente permiten ajustar la fuerza y la cantidad de líquido en la taza. Esto junto a otros factores variables (como dosis, molienda, tiempo y agitación) lleva a que exista una increíble diversidad de métodos de elaboración posibles. <br>&nbsp;</p>
                        

                    <!--Este Parrafo tiene un display none por que es el que queremos ocultar con el toggle-->
                    <ul class="caractAeroPress" style="display: none">
                        <li>Método de inmersión.</li>
                        <li>Puedes obtener café de distintas concentraciones y sabores, variando factores como el tamaño de la molienda del grano, la cantidad y temperatura del agua, y el tiempo de infusión.</li>
                        <li>Se obtiene una taza con mucho cuerpo, acidez, dulzor y un post gusto muy largo.</li>
                    </ul>
                    <br>
                    <br>
                        <!--Poner una clase al boton para ejecutarlo en la funcion JQuery estipulada en los script tags-->
                    <button class="ver5 button">Ver/ocultar caracteristicas</button>
                </div>
                <div class="sec33">
                    <h3>Sifón <br>Japonés</h3>
                    <img src="assets/sifonJapones.jpg" title="Sifón Japonés" alt="Sifón Japonés" class="imagen">
                    <br>
                    <!--Poner clases distintas para cada párrafo de cada div, esto nos ayuda a usar la funcion toggle para cambiar entre los parrafos-->
                    <p class="descripcionSifon">El sifón japonés es un novedoso método, que precisamente viene de japón y que poco a poco ha ido recorriendo el mundo para introducirse en los cursos de barista como una técnica de extracción.
                    <br><br> 
                        Funciona como una cafetera de vacío. Este método cuenta con dos cámaras. Se coloca una fuente de calor debajo de la cámara inferior que contiene el agua; esto provoca que la presión aumente y el agua se eleve a través de una columna que une ambas cámaras.<br>&nbsp;</p>
                    <!--Este Parrafo tiene un display none por que es el que queremos ocultar con el toggle-->
                    <ul class="caractSifon" style="display: none">
                        <li>Método mixto, combina el descendente y el de inmersión.</li>
                        <li>Un sifón japonés funciona como un sifón convencional, donde el aumento de temperatura (y su posterior descenso) cambian la presión del vapor de agua en la parte inferior. </li>
                        <li>Se obtiene una taza con cuerpo, intensidad de sabor, limpia y más dulce conforme se deja enfriar.</li>
                    </ul>
                    <br>
                    <!--Poner una clase al boton para ejecutarlo en la funcion JQuery estipulada en los script tags-->
                    <button class="ver6 button">Ver/ocultar caracteristicas</button>
                </div>
            </section>
        </main>
        <script>
            //Esta funcion llama a mis clases CSS para hacer el efecto galeria y crear un overlay sobre la pagina que existe. Aqui vemos el metodo append visto en clase para agregar un contendor para una equis estizada en CSS que llama al fade out y cierra la galeria. 
       $('body').append('<div class="imagen-overlay"><span class="imagen-overlay-close">x</span><img src=""/><div id=Thelist></div><ul id=lista ><li id=list1></li><li id=list2></li><li id=list3></li><li id=list4></li></ul></div>');
        var productImage = $('.imagen'); //se declaran las imagen con selector tipo elemento
        var productOverlay = $('.imagen-overlay'); //se declara el overlay como un selector tipo clase 
        var productOverlayImage = $('.imagen-overlay img'); // se declara la variable tipo clase

        productImage.click(function () {
            var productImageSource = $(this).attr('src'); //se crea la funcion y se llama al atributo src que contienen las imagenes que declaramos como una nueva variable
            
            productOverlayImage.attr('src', productImageSource);
            productOverlay.fadeIn(100); // Fade in para abrir 
            $('body').css('overflow', 'hidden');

            if(productImageSource == "assets/Chemex.jpg"){
             
             
             $("#list1").text("Uno de los métodos más utilizados por los baristas para preparar cafés más solubles");
             $("#list2").text("con la menor cantidad de residuos sólidos, además de sabores y aromas más claros es a través de la cafetera Chemex");
             $("#list3").text("El vertido en el Chemex es mucho más lento por factores como el filtro y los espacios de aire que, por el contrario, este no genera.");
             $("#list4").text("Otro aspecto importante para tener en cuenta es el tiempo de la extracción del agua. Para evitar que no sean extracciones muy cortas ni muy largas, y dependiendo de la cantidad de café, el tiempo promedio es de entre 3 minutos y medio y 4 minutos.");

         }
            
        if(productImageSource == "assets/V60.jpg"){
             
             
             $("#list1").text("La cafetera V60, fruto del conocimiento de la casa japonesa Hario.  Se trata de un sistema de filtrado que dará lugar a una taza muy suave y aromática.");
             $("#list2").text("Se trata de un método tradicional de preparación de café por goteo y, gracias a eso, ofrece un gran impacto visual y se pude considerar casi un ritual.");
             $("#list3").text(" A partir de este detalle, se logrará resaltar atributos más delicados que los que se destacan con otros métodos; las bebidas finales son más suaves, con cuerpo más ligero y sabores delicados.");
             $("#list4").text("El nombre proviene de vector 60, el ángulo de 60 grados de su cono. Éste método fue elaborado inicialmente en cerámica y vidrio, luego en plástico y finalmente en metal.");
         }
            if(productImageSource == "assets/Kalita.jpg"){
             
             
             $("#list1").text("La serie Kalita Wave maximiza la uniformidad en la extracción de café. La geometría de fondo plano permite una preparación más uniforme y una calidad brillante, sus filtros con ondas ayudan reducir el contacto del café con el dripper.");
             $("#list2").text("Con este método podemos obtener un café con más cuerpo y mayor equilibrio entre acidez y dulzor.");
             $("#list3").text("También el recipiente tiene un contacto mínimo con el filtro lo cual genera consistencia en la temperatura y una dispersión uniforme del agua.");
             $("#list4").text("La tetera de Kalita Wave se puede poner en la estufa, así que no te preocupes si se calienta, esto ayudará a que el agua permanezca tibia a diferencia del agua hervida que debe pasarse del hervidor a un recipiente frío.");
         }
            
        if(productImageSource == "assets/Prensa.jpg"){
             
             
             $("#list1").text("Es difícil elegir el origen de este dispositivo, pero la prensa es uno de los métodos más sencillos para preparar café el cual produce una excelente taza si lo haces bien.");
             $("#list2").text(" La habilidad para controlar todas las variables de una prensa como la temperatura del agua, molienda y tiempo de extracción, permite la mejora de los métodos de preparación de acuerdo con las preferencias personales. Lo más importante es que si lo preparas de la forma correcta, podrás disfrutar de los matices del aroma y los sabores en cada café que preparas.");
             $("#list3").text("Existen algunas variables importantes que deberás tomar en cuenta antes de la preparación, como el tamaño de la Molienda debe ser bastante gruesa, piensa en gránulos en lugar de arena. Si la molienda es muy fina, el agua extraerá demasiado rápido el café. ");
             $("#list4").text("La temperatura del agua, el tiempo de extraccion que van entre los 3 y 5 minutos y la forma de mezclar y el tiempo que se deja en reposo para luego vertirlo en la taza.");
         }
            if(productImageSource == "assets/aeropress.jpg"){
             
             
             $("#list1").text(" Puedes utilizar el AeroPress para lograr “un perfil de sabor suave, que varía, por supuesto, dependiendo del tamaño de la molienda y la temperatura del agua.Pero también lo puedes preparar para obtener acidez, cuerpo y mucho más.");
             $("#list2").text("No importa el método de preparación, el tamaño de la molienda es clave. Pero sólo se puede entender realmente en términos de tiempo de preparación. Cuanto más fino sea la molienda, más rápido se extraerán los compuestos de sabor y aroma del café.");
             $("#list3").text("Dado que la prensa francesa es un método de inmersión, generalmente se utiliza un tiempo de preparación más largo y una molienda gruesa hará más lenta la extracción. Esto es bueno porque los últimos compuestos a extraer son los responsables de la amargura. Sin embargo, con un método de vertido o goteo , el agua pasa más rápido por las partículas.");
             $("#list4").text("Una característica clave del AeroPress es el silbido característico que escucharás al final de la presión que haces. Algunas personas dejan de presionar el instante en que escuchan ese ruido, mientras que otros siguen presionando hasta donde puedan llegar.");
         }
            
        if(productImageSource == "assets/sifonJapones.jpg"){
             
             
             $("#list1").text("Un sifón a veces se utiliza para referirse a una amplia variedad de dispositivos que implican el flujo de líquidos a través de tubos, y siendo más específico se refiere a un tubo en forma de U invertida que hace que un líquido fluya hacia arriba, por encima de la superficie del depósito, sin uso de alguna bombas, para que posteriormente fluya la caída del líquido por el tubo, a través de la fuerza de la gravedad en un recipiente.");
             $("#list2").text("Propiamente el sifón de café sirve para calentar primero el agua hasta que la expansión del agua se propague viéndose obligada a subir por un tubo, hacia el otro recipiente en donde se encuentra el café molido(a medida que aumenta la temperatura del agua, el agua líquida densa se convierte en vapor de agua, el cual ocupa más espacio y por lo tanto aumenta la presión).");
             $("#list3").text("El café se comienza a mezclar con el agua hasta que nuevamente el calor comienza a ejercer presión.Esto ya viene a ser propiamente el método de extracción. Una vez terminado este proceso se retira el calor y por la presión que hay el líquido comienza a caer en gotas por la parte inferior, cayendo a través de un colador terminando así la elaboración del café.");
             $("#list4").text("Como podrá ver, este es “un novedoso método de extracción de café”, pese a que hace hace siglos los sifones ya existían, sus usos eran propiamente para investigación científica entre otras cosas");
         }

            $('.imagen-overlay-close').click(function () {
                productOverlay.fadeOut(100); // Fade out para cerrar, notese que en el append se llama la clase para cerrar con una equis custom en CSS y asi hacer el fade out de la galeria. 
                $('body').css('overflow', 'auto');


            });
        });

            //Este es el codigo para la funcion del toggle y con estas funciones logramos que el boton de ver caracteristicas de cada metodo tenga un area separada para mostrar mas informacion. 
            
            $(".ver").click(function(){
               $(".descripcionChemex").toggle(500); //
                $(".caractChemex").toggle(500);                
            });
               $(".ver2").click(function(){
               $(".descripcionV60").toggle(500);
                $(".caractV60").toggle(500);
                
            });
               $(".ver3").click(function(){
               $(".descripcionKalita").toggle(500);
                $(".caractKalita").toggle(500);
                
            });
                $(".ver4").click(function(){
               $(".descripcionPrensa").toggle(500);
                $(".caractPrensa").toggle(500);
                
            });
               $(".ver5").click(function(){
               $(".descripcionAeroPress").toggle(500);
                $(".caractAeroPress").toggle(500);
                
            });
               $(".ver6").click(function(){
               $(".descripcionSifon").toggle(500);
                $(".caractSifon").toggle(500);
                
            });
        </script>
<?php include("footer.php"); ?>