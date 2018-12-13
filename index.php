<?php include("header.php"); ?>
<?php

include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM resenas ORDER BY id DESC");

?>

    <main>

        <!--Cover

            Se pone el titulo de la seccion correspondiente-->

        <section class="cover" id="coverinicio">
            <div class="tituloprincipal" id="tinicio">Café Au Lait

                <p id="descrip">Lo mejor del café en un solo lugar</p>
                <img src="assets/down.png" id="down"></div>

        </section>

        <!--Sec100

            -Solo se debe colocar a un section la clase "sec100"
            -A las imagenes se debe colocar la clase "imagen" y debe tener una relacion de aspecto 4:3
            -->


        <section class="sec100" id="sobrenosotros">
            <h1>Sobre Nosotros</h1>
            <br>
            <p id="firstchild">
                Café Au Lait nació de la idea de ofrecer el mejor café y las mejores crepas de la capital, en un ambiente cálido y comodo con un servicio de primera. En 2018, un grupo de amigos, en una reunión, tuvieron la idea de abrir una cafetería en un edificio historico de San José donde pudieran dar productos de gran calidad a un precio accesible, pensando en una población jóven de la ciudad.
            </p>
            <br>
            <br>
            <p id="secondchild">
                Nuestro principal objetivo es hacer de su visita una experiencia única, ofreciendole la mayor calidad en nuestras bebidas y platillos. Amamos lo que hacemos y lo reflejamos en como elaboramos nuestros productos, eso es lo que nos diferencia de las demás cafeterías.
            </p>

        </section>



        <!--sec50prin

            -Los div con la clase "sec50", deben ir dentro de un section la clase "sec50prin
            -A las imagenes se debe colocar la clase "imagen" y debe tener una relacion de aspecto 4:3-->

        <section class="sec100" id="nuestrocafe">
            <h1>Nuestro café</h1>
            <br>
            <p>
                Usamos diferentes tipos de café, cada uno de un sector distinto del país. La excelencia del café de Costa Rica puede disfrutarse de ocho formas distintas, pues son ocho las zonas productoras de café, cuyas características especiales son famosas en todo el mundo. Por lo privilegiado de su clima, este país puede producir diversidad para satisfacer todos los gustos.
            </p>

            <br>
            <br>
            <p id="materiaprima">
                La materia prima de cada una de nuestras tazas de café proviene lugares como Turrialba, Orosi, Guanacaste, Tres Ríos, sector Brunca, Tarrazú, San Ramón y algunos lugares del Valle Central.
            </p>

        </section>


        <!--sec33prin
            
            -Los div con la clase "sec33", deben ir dentro de un section la clase "sec33prin
            -A las imagenes se debe colocar la clase "imagen" y deben tener una relacion de aspecto 4:3-->


        <section class="sec50prin" id="mapa">
            <div class="sec50" id="deu">
                <h2 id="titledeu">¿Dónde estamos ubicados?</h2>
                <br>
                <p id="pdeu">Nuestra cafetería está ubicada en el Edificio Maroy, 150 metros norte de la Plaza de la cultura, entre Calle 5 y Avenida 1, esquina noreste, San José</p>

            </div>
            <div class="sec50">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15719.967155494644!2d-84.0762274!3d9.9346406!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x369237ccf2c44f99!2sEdificio+Maroy!5e0!3m2!1ses!2scr!4v1536178299756" width="100%" height="300vh" frameborder="0" style="border:0" id="googlemaps" allowfullscreen></iframe>
            </div>

        </section>
        <section class="sec50prin" id="linkreserva">
            <div class="sec50">
                <img src="assets/cafeteria.jpg" class="imagen" id="imgcafeteria">
            </div>
            <div class="sec50">
                <h2 id="treserva">¿Quieres reservar un lugar en la cafetería?</h2>
                <button class="button" onclick="location.href='contacto.html'">Hacer una reserva</button>
            </div>
        </section>
        <section class="sec50prin" id="secredes">
            <div class="sec50" id="tredes">
                <h1>¡Síguenos en nuestras redes!</h1>
            </div>
            <br>
            <div class="sec50" id="bredes">
                <br>
                <button class="button redes" onclick="location.href='" style="background-color: royalblue;border: 0px"><img src="assets/facebook.png">Facebook</button>
                <button class="button redes" onclick="location.href=''" style="background-color: cornflowerblue; border: 0px"><img src="assets/twitter.png">Twitter</button>
                <button class="button redes" onclick="location.href=''" style="background-image: url(assets/bginstagram.jpg);  background-size:cover; border: 0px; background-position: center;"><img src="assets/instagram.png">Instagram</button>
            </div>
            <div class="row">
                
            </div>

            <br>
        </section>
        <div class="row col-12 m-0" id="row-resenas">
                <H1 class="col-xl-12 text-center" style="color:white">RESEÑAS</H1>
                <div id="carouselExampleControls" class="carousel slide col-12" data-ride="carousel">
                    <div class="row carousel-inner justify-content-center">
                        <div class="row carousel-item active col-12 justify-content-center">
                            <div class="col-xl-5 col-lg-5 col-md-8 col-sm-10 col-12 m-auto p-5"  id="elemento-carousel" style="height: 350px;">
                                <h4>JEREMY MONGE SOLÍS</h4>
                                <p>Aliquam rutrum leo elit, a convallis ex sodales in. Praesent venenatis, elit non lobortis congue, dui diam posuere nulla, sit amet consequat risus nunc et nunc. Phasellus tempus hendrerit elit. Pellentesque egestas sapien at luctus vulputate. Praesent felis erat, volutpat sed euismod eget, volutpat in sapien. Cras euismod magna non libero fermentum, at eleifend nibh fermentum. Sed elementum nibh ac nunc scelerisque, in faucibus mi pretium.</p>
                            </div>
                            
                        </div>
                        
                        
                         <?php
        
                        while($user_data=mysqli_fetch_array($result)){
                            echo " <div class='row carousel-item col-12 justify-content-center'>
                            <div class='col-xl-5 col-lg-5 col-md-8 col-sm-10 col-12 m-auto p-5' id='elemento-carousel' style='height: 350px;'>
                            <h4>".$user_data['autor']."</h4><p>".$user_data['texto']."</p></div></div>";

                        }
            
        ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            <a class="btn btn-info m-auto" href="nueva_resena.php">Agregar Reseña</a>
            </div>
        <div class="row justify-content-center bg-dark">
             <h1 class="col-xl-12 text-center lean" style="color:white">¡Ahora con servicio de ordenes en línea!</h1>
            <a class="btn btn-light" href="nuevaorden.php">Hacer una orden en linea</a>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <?php include("footer.php"); ?>