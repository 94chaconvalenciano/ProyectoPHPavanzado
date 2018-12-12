<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css" type="text/css">
    <link rel="stylesheet" href="assets/flexboxgrid.min.css" type="text/css">
    <link rel="stylesheet" href="assets/inicio.css" type="text/css">
    <title>Café Au Lait</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <script src="assets/jquery.js"></script>
    <script src="assets/headerinicio.js"></script>
</head>
<!-------------Instrucciones----------------------


-No tocar el archivo style.css
-si se le quiere agregar nuevos estilos, hacerlos en un archivo .css diferente, colocando el nombre se la seccion que le corresponde
-No eliminar lineas de texto del head ni del header
-Si quiere hacer efectos con jquery, crear un nuevo archivo con el nombre de la seccion correspondiente
-No tocar el archivo header.js
-

-->
<header id="header">
    <div id="logoheader">
        <img src="assets/iconoinicio.png">
    </div>
    <div id="menu">
        <div class="linkmenu" onclick="location.href='inicio.php'">Inicio</div>
        <div class="linkmenu" onclick="location.href='EdificioMaroy.php'">Edificio Maroy</div>
        <div class="linkmenu" onclick="location.href='MetodosExtraccion.php'">Extracción</div>
        <div class="linkmenu" onclick="location.href='Menu.php'">Menú</div>
        <div class="linkmenu" onclick="location.href='variedadesDeCafe.php'">Variedades de Café</div>
        <div class="linkmenu" onclick="location.href='blog.php'" id="blog">Blog</div>
        <div class="linkmenu" onclick="location.href='contacto.php'" id="contacto">Contacto</div>
    </div>
    <div id="menu-responsive">
        <a><img src="assets/menu.png" id="iconomenu"></a>
        <ul class="desplegable">
            <li class="bot" onclick="location.href='inicio.php'">Inicio</li>
            <li class="bot" onclick="location.href='EdificioMaroy.php'">Edificio Maroy</li>
            <li class="bot" onclick="location.href='MetodosExtraccion.php'">Extracción</li>
            <li class="bot" onclick="location.href='Menu.php'">Menú</li>
            <li class="bot" onclick="location.href='variedadesDeCafe.php'">Clases de Café</li>
            <li class="bot" onclick="location.href='blog.php'">Blog</li>
            <li class="bot" onclick="location.href='contacto.php'">Contacto</li>
        </ul>
    </div>
</header>

<body>