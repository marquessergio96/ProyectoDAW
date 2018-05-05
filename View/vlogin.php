<?php
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: lightgrey">
<nav class="navbar navbar-inverse" style="height: auto;background-color: #0F0F0F">
<span STYLE="COLOR:WHITE;width: 800px;font-size:40px;">ACCESO ADMINISTRADOR</span>
    <a class="btn btn-danger" href="index.php?pagin=inicio" style="float:right;margin-top:10px;margin-right:10px;">VOLVER A INICIO</a>
</nav>
<div style="background-color: snow;width:450px;height:300px;margin:0 auto;padding: 20px;border-radius: 5px;">
    <h1 style="text-align: center;color:black;text-decoration: underline">Panel administración</h1>
    <div style="width:100px;height:100px;display: inline-flex;margin-top:20px;">
        <img src="Webroot/media/adminLogo.png" style="width:100px;height:100px;"/>
    </div>
<form action="index.php?pagina=login" method="post" class="form-horizontal" style="width:200px;float: right;margin-right:10px;">
    <?php echo "<span style='color:red;'>",$error,"</span>"; ?>

    <div class="form-group input-group" style="margin-top: 20px;">

                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-user"></span>
                    </span>

        <input type="text" class="form-control" name="codUsuario" placeholder="Nombre de usuario " >
    </div>
    <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-lock"></span>
                    </span>
        <input type="password" class="form-control" name="password" placeholder="Contraseña" >
    </div>
    <div class="form-group" style="float:right">
        <input type="submit" class="btn btn-primary" name="Enviar" value="Iniciar sesión">
    </div>
</form>
</div>
</body>
</html>
