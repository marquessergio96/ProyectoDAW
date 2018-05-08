<div class="container" style=" margin-top: 20px;">
    <div class="col-sm-6" style="width: 500px;margin-left: 20%;
    margin-top: 0px;">
        <div class="jumbotron" style="box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.75)" ;>
            <div class="form-group" style="text-align: center;margin-top:-50px;">
                <h2>
                    Borrar producto
                </h2>
            </div>
            <form action="<?PHP echo "index.php?pagina=eliminarProducto" . "&codProducto=$codProducto"; ?>" method="post" class="form-horizontal"
                  style="margin-left: 25%;" enctype="multipart/form-data">
                <!--                --><?php //echo "<span style='color:red;'>",$error,"</span>"; ?>
                <!--                --><?php //echo "<span style='color:red;'>".$mensajeError['errorCodDepartamento']."</span>";?>
                <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-camera"></span>
                    </span>
                <input type="text" name="codProducto" value="<?php echo $reserva->getCodProducto() ?>" style="display: none;">
                    <img style="width:200px;height:160px;" src="<?php echo $reserva->getImagen(); ?>" readonly style="width: 200px;">
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-cutlery"></span>
                    </span>

                    <input type="text" class="form-control" placeholder="Nombre producto" style="width: 200px;"
                           name="nombre" value="<?php echo $reserva->getNombre() ?>" readonly >
                </div>
                <!--                --><?php //echo "<span style='color:red;'>".$mensajeError['errorDescripcion']."</span>";?>
                <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </span>

                    <input type="text" class="form-control" name="descripcion" style="width: 200px;"
                           placeholder="Descripción producto" value="<?php echo $reserva->getDescripcion(); ?>" readonly>
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-eur"></span>
                    </span>
                    <input type="number" class="form-control" min="0" max="500"
                           name="precio" placeholder="Precio" value="<?php echo $reserva->getPrecio(); ?>" placeholder="Precio" readonly style="width: 200px;">
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-tag"></span>
                    </span>
                    <input type="text" class="form-control" style="width: 200px;" value="<?php echo $reserva->getTipo(); ?>" readonly>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-danger" name="Eliminar" value="Eliminar">
                    <input type="submit" class="btn btn-primary" name="Volver" value="Volver">
                </div>

            </form>
        </div>
    </div>
</div>