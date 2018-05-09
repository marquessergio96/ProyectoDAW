<?php
if (isset($_GET['codReserva'])){
    $codReserva=$_GET['codReserva'];
    $reserva=Reserva::obtenerReserva($codReserva);
    if(isset($_POST['Eliminar'])){
        if ($reserva->anularReserva()){//Si el metodo devuelve 1 es que se ha borrado con existo y se redirigira al index
            header("Location:index.php?pagina=panelReservas");
        }else{//Si no mostras un mensaje de error.
            echo "ERROR AL BORRAR";
        }
    }
}

if (isset($_POST['Volver'])){//Si se pulsa el boton de Volver se redirige a index.php pasandole la pagina de departamentos
    header("Location: index.php?pagina=panelReservas");
}else{//Si no se pulsa volver se muestra el layout
    require_once 'View/layoutpanel.php';
}
?>