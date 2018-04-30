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
<body style="background-color: darkslategray">
<nav class="navbar navbar-inverse" style="height: auto;background-color: #0F0F0F">
<span STYLE="COLOR:WHITE;width: 800px;font-size:40px;">ÁREA DE ADMINISTRACIÓN</span>
    <a class="btn btn-danger" href="index.php?pagin=inicio" style="float:right;margin-top:10px;margin-right:10px;">VOLVER</a>
</nav>
<div style="background-color: midnightblue;width:300px;height:200px;margin:0 auto;padding: 20px;">
<form action="../Controller/clogin.php" method="post" class="form-horizontal" style="margin-left: 10%;">
<!--    --><?php //echo "<span style='color:red;'>",$error,"</span>"; ?>
    <div class="form-group input-group" style="margin-top: 20px;">

                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-user"></span>
                    </span>

        <input type="text" class="form-control" name="codUsuario" placeholder="Nombre de usuario " style="width: 200px;">
    </div>
    <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-lock"></span>
                    </span>
        <input type="password" class="form-control" name="password" placeholder="Contraseña" style="width: 200px;">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="Enviar" value="Iniciar sesión">
    </div>
</form>
</div>
</body>
</html>
