<?php
if (isset($_SESSION['usuario'])) {
    $vista = 'View/vinicio.php';
} else {
    $vista = 'View/vinicio.php';
}
if (isset($_GET['pagina'])) {
    $vista = $vistas[$_GET['pagina']];
}
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="Webroot/css/estilosInicio.css" type="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php require_once $vista; ?>
<footer style="position: relative;
    width: 100%;
    height:70px;
    background-color: white;
    bottom: 0px;text-align: center">
    <h3 >DERECHOS RESERVADOS MARQUÉS COMPANY S.L.</h3><a style="float:right"href="#"><span class="
glyphicon glyphicon-arrow-up">ir arriba</span> </a>
</footer>
</body>

</html>