<div class="container" style=" margin-top: 20px;">
    <div class="col-sm-6" style="width: 500px;margin-left: 20%;
    margin-top: 0px;">
        <div class="jumbotron" style="box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.75)" ;>
            <div class="form-group" style="text-align: center;margin-top:-50px;">
                <h2>
                    Anular reserva
                </h2>
            </div>
            <form action="<?PHP echo "index.php?pagina=borrarReserva" . "&codReserva=$codReserva"; ?>" method="post" class="form-horizontal"
                  style="margin-left: 25%;" enctype="multipart/form-data">
                <!--                --><?php //echo "<span style='color:red;'>",$error,"</span>"; ?>
                <!--                --><?php //echo "<span style='color:red;'>".$mensajeError['errorCodDepartamento']."</span>";?>

                    <input type="text" name="codProducto" value="<?php echo $reserva->getCodReserva() ?>" style="display: none;">

                <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </span>

                    <input type="text" class="form-control" placeholder="Nombre producto" style="width: 200px;"
                           name="nombre" value="<?php echo $reserva->getNombre() ?>" readonly >
                </div>
                <!--                --><?php //echo "<span style='color:red;'>".$mensajeError['errorDescripcion']."</span>";?>
                <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-envelope"></span>
                    </span>

                    <input type="text" class="form-control" name="descripcion" style="width: 200px;"
                           placeholder="Descripción producto" value="<?php echo $reserva->getEmail(); ?>" readonly>
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    <input type="text" class="form-control"
                             value="<?php echo $reserva->getFecha(); ?>"  readonly style="width: 200px;">
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-hourglass"></span>
                    </span>
                    <input type="text" class="form-control" style="width: 200px;" value="<?php echo $reserva->getHora(); ?>" readonly>
                </div>

                <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-user"></span>
                    </span>
                    <input type="text" class="form-control" style="width: 200px;" value="<?php echo $reserva->getPersonas(); ?>" readonly>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-danger" name="Eliminar" value="Eliminar">
                    <input type="submit" class="btn btn-primary" name="Volver" value="Volver">
                </div>

            </form>
        </div>
    </div>
</div>