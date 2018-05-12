<?php
require_once 'Config/config.php';

$entradaOK=true;//Variable que controla los datos que se le pasan por el formulario.
$mensajeError = array(//Array para guardar los mensajes de errores.
    "errorNombre"=>'',
    "errorDescripcion"=>'',
    "errorSubida"=>'',
    "errorPrecio"=>'',
    "errorTipo"=>''
);
if(isset($_POST['Añadir'])){
    $nombre=str_replace(' ', '', $_POST['nombre']);
    $mensajeError["errorNombre"] = comprobarTexto($_POST['nombre'], 100, 1, 1);
    $mensajeError["errorDescripcion"]=comprobarTexto($_POST['descripcion'],1000,1,1);
    $mensajeError["errorPrecio"]=comprobarFloat($_POST['precio'],1);
    if($_POST['tipo']=''){
        $mensajeError["errorTipo"]='Debes seleccionar un tipo';
    }

        $rutaImagenPerfil = PATHIMAGENES . $nombre.".jpg";
        //Subida  de la imagen de perfil
            if (!move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaImagenPerfil)) {
                $mensajeError["errorSubida"] = "No se ha podido subir la imagen";
            }
    foreach ($mensajeError as $valor){//Bucle que recorre el array mensajeError, si hay algun mensaje la variable entradaOK cambia a false.
        if ($valor!=null){
            $entradaOK=false;
        }
    }
}
if (isset($_POST['Añadir']) && $entradaOK){
    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
    $precio=$_POST['precio'];
    $tipo=$_POST['tipo'];
    $producto=Producto::registrarProducto($nombre,$descripcion,$precio,$tipo,$rutaImagenPerfil);
    if (is_null($producto)){//Si el producto es null se vuelve a cargar la pagina ya que significa que ha habido algún error
        header("Location: index.php?pagina=insertarProducto");
    }else{//Si no es null significa que ha salido bien y se redirige a la pagina principal de productos.
        header("Location: index.php?pagina=productos");
        $arrayProductos=Producto::getProductos();//Se vuelven a cargar los productos.
    }
}

if (isset($_POST['Volver'])){//Si se pulsa el boton de Volver se redirige a index.php pasandole la pagina de productos
    header("Location: index.php?pagina=productos");
}else{//Si no se pulsa volver se muestra el layout
    require_once 'View/layoutpanel.php';
}
?>