<div class="container" style=" margin:0 auto;margin-top: 20px;">
    <div class="col-sm-6" style="width: 500px;margin-left: 20%;
    margin-top: 0px;">
        <div class="jumbotron" style="box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.75)" ;>
            <div class="form-group" style="text-align: center;margin-top:-50px;">
                <h2>
                    Editar producto


                </h2>
            </div>
            <form action="<?PHP echo "index.php?pagina=editarProducto" . "&codProducto=$codProducto"; ?>" method="post" class="form-horizontal"
                  style="margin-left: 25%;" enctype="multipart/form-data">
                <!--                --><?php //echo "<span style='color:red;'>",$error,"</span>"; ?>
                <!--                --><?php //echo "<span style='color:red;'>".$mensajeError['errorCodDepartamento']."</span>";?>
                <div class="form-group input-group" >
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-camera"></span>
                    </span>
                    <input type="text" name="codProducto" value="<?php echo $producto->getCodProducto() ?>" style="display: none;">

                    <img style="width:200px;height:200px;" src="<?php echo $producto->getImagen(); ?>">

                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-cutlery"></span>
                    </span>

                    <input type="text" class="form-control" placeholder="Nombre producto" style="width: 200px;"
                           name="nombre" value="<?php echo $producto->getNombre()?>"  >
                </div>
                <!--                --><?php //echo "<span style='color:red;'>".$mensajeError['errorDescripcion']."</span>";?>
                <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </span>

                    <input type="text" class="form-control" name="descripcion" style="width: 200px;"
                           placeholder="Descripción producto" value="<?php echo $producto->getDescripcion(); ?>" >
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-eur"></span>
                    </span>
                    <input type="number" class="form-control" min="0" max="500"
                           name="precio" placeholder="Precio" value="<?php echo $producto->getPrecio(); ?>" placeholder="Precio" step="0.1" style="width: 200px;">
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-tag"></span>
                    </span>
                    <select class="form-control" name="tipo" style="width: 200px;">
                        <option>Tipo de producto</option>
                        <option value="Primero" <?php if($producto->getTipo()=='Primero'){echo 'selected';}?>>Primero</option>
                        <option value="Segundo" <?php if($producto->getTipo()=='Segundo'){echo 'selected';}?>>Segundo</option>
                        <option value="Postre" <?php if($producto->getTipo()=='Postre'){echo 'selected';}?>>Postre</option>
                    </select>
                </div>
                <div class="form-group input-group" style="width: 240px;">
                    <label class="input-group-btn">
                    <span class="btn btn-default" style="background-color:#eee;">

                        <span class="glyphicon glyphicon-camera" style="height:20px;"> Imagen</span>
                     <input type="file" value="<?php echo $producto->getImagen(); ?>" style="display: none; width: 150px;" name="imagen" id="imagen" onchange="cambiarTexto()">
                        <?php echo $mensajeError["errorSubida"]; ?>

                    </span>

                    </label>
                    <input type="text" id="textoImagen"  class="form-control" readonly>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-danger" name="Editar" value="Editar">
                    <input type="submit" class="btn btn-primary" name="Volver" value="Volver">
                </div>

            </form>
        </div>
    </div>
</div>
<script>
    function cambiarTexto() {
        var inputImagen = document.getElementById("imagen");
        var inputTexto = document.getElementById("textoImagen");

        inputTexto.value = inputImagen.value;
    }
</script>