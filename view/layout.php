<?php
    if(isset($_SESSION["usuario"])){
        $vista=$vistas["inicio"];
    }
    else{
        $vista=$vistas["login"];
    }
    
    if(isset($_SESSION["pagina"])){
        $vista=$vistas[$_SESSION["pagina"]];
    }
?>

<html>
    <head>
        <title>MCJ Aplicacion1819</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="webroot/estilos.css">
    </head>
    
    <body>
        <header>
            <h1>Proyecto Aplicacion1819</h1>
        </header>
        <?php
            require_once $vista;
        ?>
        <footer>
            <p>Mario Casquero Jáñez &copy; 2019 DAW2</p>
        </footer>
    </body>
</html>