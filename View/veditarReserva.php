<div class="container" style=" margin-top: 20px;">
    <div class="col-sm-6" style="width: 500px;margin-left: 20%;
    margin-top: 0px;">
        <div class="jumbotron" style="box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.75)" ;>
            <div class="form-group" style="text-align: center;margin-top:-50px;">
                <h2>
                    Editar reserva
                </h2>
            </div>
            <form action="<?PHP echo "index.php?pagina=editarReserva" . "&codReserva=$codReserva"; ?>" method="post" class="form-horizontal"
                  style="margin-left: 25%;" enctype="multipart/form-data">
                <!--                --><?php //echo "<span style='color:red;'>",$error,"</span>"; ?>
                <!--                --><?php //echo "<span style='color:red;'>".$mensajeError['errorCodDepartamento']."</span>";?>

                <input type="text" name="codReserva" value="<?php echo $reserva->getCodReserva() ?>" style="display: none;">

                <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </span>

                    <input type="text" class="form-control" placeholder="Nombre producto" style="width: 200px;"
                           name="nombre" value="<?php echo $reserva->getNombre() ?>" >
                </div>
                <!--                --><?php //echo "<span style='color:red;'>".$mensajeError['errorDescripcion']."</span>";?>
                <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-envelope"></span>
                    </span>

                    <input type="text" class="form-control" name="email" style="width: 200px;"
                           placeholder="Descripción producto" value="<?php echo $reserva->getEmail(); ?>" >
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    <input type="text" name="fecha" class="form-control"
                           value="<?php echo $reserva->getFecha(); ?>"  style="width: 200px;">
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-hourglass"></span>
                    </span>
                    <input type="text" class="form-control" name="hora" style="width: 200px;" value="<?php echo $reserva->getHora(); ?>" >
                </div>

                <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-user"></span>
                    </span>
                    <input type="text" class="form-control" name="personas" style="width: 200px;" value="<?php echo $reserva->getPersonas(); ?>" >
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-danger" name="Editar" value="Editar">
                    <input type="submit" class="btn btn-primary" name="Volver" value="Volver">
                </div>

            </form>
        </div>
    </div>
</div>