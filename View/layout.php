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
<div style="min-height: 50px;" id="footer-main">

    <ul>
        <li><a href=""><b>Sobre nosotros</b></a></li>
        <li><a href=""><b>Contacta con nosotros</b></a></li>
        <li><a href=""><b>Terminos y condiciones</b></a></li>
        <li><a href=""><b>Blog</b></a></li>
        <li><a href=""><b>Soporte</b></a></li>
    </ul>

    <div id="social-menu">
        <ul>
            <li><a href=""><img style="max-width:18px; margin-top: -7px;" src=""></a></li>
            <li><a href=""><img style="max-width:18px; margin-top: -7px;" src=""></a></li>
            <li><a href=""><img style="max-width:18px; margin-top: -7px;" src=""></a></li>
        </ul>
    </div>

</div>
</body>

</html>