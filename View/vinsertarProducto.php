
<div class="container" style=" margin:0 auto;">
    <div class="col-sm-10" style="width: 500px;margin-left: 20%;
    margin-top: 50px;">
        <div class="jumbotron" style="box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.75)" ;>
            <div class="form-group" style="text-align: center;margin-top:-50px;">
                <h2>
                    Añadir producto
                </h2>
            </div>
            <form action="index.php?pagina=insertarProducto" method="post" class="form-horizontal"
                  style="margin-left: 25%;" enctype="multipart/form-data">
                <!--                --><?php //echo "<span style='color:red;'>",$error,"</span>"; ?>
                <!--                --><?php //echo "<span style='color:red;'>".$mensajeError['errorCodDepartamento']."</span>";?>
                <?php if (isset($mensajeError['errorNombre'])){echo '<span style="color:red">'.$mensajeError['errorNombre'].'</span>';} ?>

                <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-cutlery
"></span>
                    </span>

                    <input type="text" class="form-control" placeholder="Nombre producto" style="width: 200px;"
                           name="nombre" <?php if (isset($_POST['nombre'])) {
                        echo "value=" . $_POST['nombre'];
                    } ?> >
                </div>
                <?php if (isset($mensajeError['errorDescripcion'])){echo '<span style="color:red">'.$mensajeError['errorDescripcion'];} ?>
                <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </span>

                    <input type="text" class="form-control" name="descripcion" style="width: 200px;"
                           placeholder="Descripción producto" <?php if (isset($_POST['descripcion'])) {
                        echo "value=" . $_POST['descripcion'];
                    } ?> >
                </div>
                <?php if (isset($mensajeError['errorPrecio'])){echo '<span style="color:red">'.$mensajeError['errorPrecio'].'</span>';} ?>

                <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-eur"></span>
                    </span>
                    <input type="number" class="form-control" min="0" max="500"
                           name="precio" placeholder="Precio" <?php if (isset($_POST['precio'])) {
                        echo "value=" . $_POST['precio'];
                    } ?> placeholder="Precio" style="width: 200px;">
                </div>
                <?php if (isset($mensajeError['errorTipo'])){echo '<span style="color:red">'.$mensajeError['errorTipo'].'</span>';} ?>

                <div class="form-group input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-tag"></span>
                    </span>
                    <select class="form-control" name="tipo" style="width: 200px;">
                        <option>Tipo de producto</option>
                        <option value="Primero" <?php if(isset($_POST['tipo'])&& $_POST['tipo']=='Primero'){echo 'selected';}?>>Primero</option>
                        <option value="Segundo" <?php if(isset($_POST['tipo'])&& $_POST['tipo']=='Segundo'){echo 'selected';}?>>Segundo</option>
                        <option value="Postre" <?php if(isset($_POST['tipo'])&& $_POST['tipo']=='Postre'){echo 'selected';}?>>Postre</option>
                    </select>
                </div>
                <?php echo '<span style="color:red">'.$mensajeError["errorSubida"].'</span>'; ?>

                <div class="form-group input-group" style="width: 240px;">
                    <label class="input-group-btn">
                    <span class="btn btn-default" style="background-color:#eee;">

                        <span class="glyphicon glyphicon-camera" style="height:20px;"> Imagen</span>
                     <input type="file"  style="display: none; width: 150px;" name="imagen" id="imagen" onchange="cambiarTexto()" >

                    </span>

                    </label>
                    <input type="text" id="textoImagen"  readonly class="form-control" name="textoImagen" <?php if (isset($_POST['textoImagen'])) {
                        echo "value=" . $_POST['textoImagen'];
                    } ?> >
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="Añadir" value="Añadir">
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