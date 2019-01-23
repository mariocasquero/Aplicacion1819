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
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    </head>
    
    <body>
        <header>
            <h1>Proyecto Aplicacion1819</h1>
        </header>
        <?php
            require_once $vista;
        ?>
        <footer>
            <p><a href="../indexProyectoDWES.php"><i class="fas fa-home"></i></a> Mario Casquero Jáñez &copy; 2019 DAW2 <a href=""><i class="fab fa-gitlab"></i></a></p>
        </footer>
    </body>
</html>