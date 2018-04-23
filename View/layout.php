<?php
if (isset($_SESSION['usuario'])) {
    $vista = 'Vista/vinicio.php';
} else {
    $vista = 'View/vinicio.php';
}
if (isset($_GET['pagina'])) {
    $vista = $vistas[$_GET['pagina']];
}
?>
<html>
<head>
    <link rel="stylesheet" href="Webroot/css/estilosLogin.css" type="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php require_once $vista; ?>
<nav>
    <a href="index.php?pagina=inicio"">INICIO</a>
    <a href="index.php?pagina=carta">CARTA</a>
    <a href="index.php?pagina=reservas">RESERVAS</a>
    <a href="index.php?pagina=contacto">CONTACTO</a>


</nav>
</body>
<footer style="position: fixed;
    width: 100%;
    bottom: 0px;">
    <div id="pie">
        <span style="float: left;">Web de Sergio Marqués</span>
        <a class="btn btn-link" href="index.php?pagina=codigo">Codigo</a>
        <a class="btn btn-link"
           href="http://daw-usgit.sauces.local/SMM_1718/dwes/tree/master/ProyectoTema7/LoginLogoff">Repositorio</a>
        <a class="btn btn-link" href="Documentación/phpdoc/index.html">PHPDoc</a>
        <a class="btn btn-link" href="index.php?pagina=tecnologias">Tecnologias</a>
        <a class="btn btn-link"
           href="<?php if (isset($_GET['pagina']) && $_GET['pagina'] != "inicio" && $_GET['pagina'] != "login") {
               echo "index.php?pagina=WIP&anterior=" . $_GET['pagina'];
           } else {
               echo " index.php?pagina=WIP ";
           } ?>">RSS</a>

    </div>
</footer>
</html>