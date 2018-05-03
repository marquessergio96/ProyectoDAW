<?php
if (isset($_GET['nombre'])){
    $nombre=$_GET['nombre'];
    $producto=Producto::obtenerProducto($nombre);
    if(isset($_POST['Eliminar'])){
        if ($producto->eliminarProducto()){//Si el metodo devuelve 1 es que se ha borrado con existo y se redirigira al index
            header("Location:index.php?pagina=productos");
        }else{//Si no mostras un mensaje de error.
            echo "ERROR AL BORRAR";
        }
    }
}

if (isset($_POST['Volver'])){//Si se pulsa el boton de Volver se redirige a index.php pasandole la pagina de departamentos
    header("Location: index.php?pagina=productos");
}else{//Si no se pulsa volver se muestra el layout
    require_once 'View/layoutpanel.php';
}
?>