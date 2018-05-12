<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
$entradaOK=true;//Variable que controla los datos que se le pasan por el formulario.
$mensajeError = array(//Array para guardar los mensajes de errores.
    "errorNombre"=>'',
    "errorDescripcion"=>'',
    "errorSubida"=>'',
    "errorPrecio"=>'',
);
if (isset($_GET['codProducto'])) {
    $codProducto = $_GET['codProducto'];
    $producto = Producto::obtenerProducto($codProducto);
}
if(isset($_POST['Editar'])){
    $nombre=str_replace(' ', '', $_POST['nombre']);
    $mensajeError["errorNombre"] = comprobarTexto($_POST['nombre'], 100, 1, 1);
    $mensajeError["errorDescripcion"]=comprobarTexto($_POST['descripcion'],1000,1,1);
    $mensajeError["errorPrecio"]=comprobarFloat($_POST['precio'],1);

    if ($_FILES["imagen"]["tmp_name"] != "") {
        $rutaImagenPerfil = PATHIMAGENES . $nombre.".jpg";
        //Subida  de la imagen de perfil
            if (!move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaImagenPerfil)) {
                $mensajeError["errorSubida"] = "No se ha podido subir la imagen";
            }
    }
    foreach ($mensajeError as $valor){//Bucle que recorre el array mensajeError, si hay algun mensaje la variable entradaOK cambia a false.
        if ($valor!=null){
            $entradaOK=false;
        }
    }
}

if (isset($_POST['Editar']) && $entradaOK){
    if($_POST['nombre']!=""){
        $nombre=$_POST['nombre'];
    }else{
        $nombre=$producto->getNombre();
    }
    if ($_POST['descripcion'] != "") {
        $descripcion = $_POST['descripcion'];
    } else {
        $descripcion = $producto->getDescripcion();
    }
    if ($_POST['precio'] != "") {
        $precio= $_POST['precio'];
    } else {
        $precio = $producto->getPrecio();
    }
    if ($_POST['tipo'] != "") {
        $tipo= $_POST['tipo'];
    } else {
        $tipo = $producto->getTipo();
    }
    if (isset($rutaImagenPerfil)) {
        $imagenPerfil = $rutaImagenPerfil;
    } else {
        $imagenPerfil = $producto->getImagen();
    }

    $producto->editarProducto($nombre,$descripcion,$precio,$tipo,$imagenPerfil);
    $arrayProductos=ProductoPDO::getProductos();
    header("Location: index.php?pagina=productos");



}


if (isset($_POST['Volver'])){//Si se pulsa el boton de Volver se redirige a index.php pasandole la pagina de productos
    header("Location: index.php?pagina=productos");
}else{//Si no se pulsa volver se muestra el layout
    require_once 'View/layoutpanel.php';
}