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
    <link rel="stylesheet" href="Webroot/css/estilosPanel.css" type="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="nav-side-menu">
    <div class="brand">Panel de administración</div>

    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
    <div class="menu-list">
        <ul id="menu-content" class="menu-content collapse out">
            <li>
                <a href="../Controller/cpanel.php?accion=panelReservas">
                    <i class="glyphicon glyphicon-pencil"></i> Reservas
                </a>

            <li>
                <a href="../Controller/cpanel.php?accion=productos">
                    <i class="glyphicon glyphicon-cutlery"></i> Productos
                </a>
            </li>
            <li>
                <a href="../Controller/cpanel.php?accion=modificarAdmin">
                    <i class="glyphicon glyphicon-edit"></i> Modificar admin
                </a>
            </li>
            <li>

                <a href="../Controller/cpanel.php?accion=cerrar">
                    <i class="glyphicon glyphicon-log-out"></i> Cerrar sesión
                </a>
            </li>

        </ul>
    </div>
</div>
<div class="container" id="main">
    <div class="row">
        <div class="col-md-12">
            <?php require_once $vista; ?>

        </div>
    </div>
</div>

</body>

</html>