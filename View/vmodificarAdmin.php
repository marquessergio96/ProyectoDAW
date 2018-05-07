

<div class="container" style=" margin:0 auto;">
    <div class="col-sm-8" style="width: 500px;margin-left: 20%;
    margin-top: 50px;">
        <div class="jumbotron" style="box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.75)" ;>
            <div class="form-group" style="text-align: center;margin-top:-50px;">
                <h2>
                    Modificar contraseña
                </h2>
            </div>
            <form action="index.php?pagina=modificarAdmin" method="post" class="form-horizontal"
                  style="margin-left: 25%;" enctype="multipart/form-data">

                <?php
                if (isset($mensajeError['errorPassword'])){ echo '<span style="color:red;">'.$mensajeError["errorPassword"].'</span>';}
                ?>
                <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-lock"></span>
                    </span>

                    <input type="password" class="form-control" placeholder="Nueva contraseña" style="width: 200px;"
                           name="password">
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-lock"></span>
                    </span>

                    <input type="password" class="form-control" placeholder="Repetir contraseña" style="width: 200px;"
                           name="password2">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="Modificar" value="Modificar">
                    <input type="submit" class="btn btn-primary" name="Volver" value="Volver">
                </div>
            </form>
        </div>
    </div>
</div>
