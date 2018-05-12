<?php
if (isset($_GET['codReserva'])){
    $codReserva=$_GET['codReserva'];
    $reserva=Reserva::obtenerReserva($codReserva);
//    if(isset($_POST['Eliminar'])){
//        if ($reserva->anularReserva()){//Si el metodo devuelve 1 es que se ha borrado con existo y se redirigira al index
//            header("Location:index.php?pagina=panelReservas");
//        }else{//Si no mostras un mensaje de error.
//            echo "ERROR AL BORRAR";
//        }
//    }
}
$entradaOK=true;//Variable que controla los datos que se le pasan por el formulario.
$mensajeError = array(//Array para guardar los mensajes de errores.
    "errorNombre"=>'',

);
if(isset($_POST['Editar'])){
    $mensajeError["errorNombre"] = comprobarTexto($_POST['nombre'], 100, 1, 1);
    $mensajeError["errorFecha"]=validarFecha($_POST['fecha'],1);
    $mensajeError["errorEmail"]=validarEmail($_POST['email'],100,3,1);
    $mensajeError["errorPersonas"]=comprobarEntero($_POST['personas'],1);

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
        $nombre=$reserva->getNombre();
    }
    if ($_POST['email'] != "") {
        $email= $_POST['email'];
    } else {
        $email = $reserva->getEmail();
    }
    if ($_POST['fecha'] != "") {
        $fecha= $_POST['fecha'];
    } else {
        $fecha = $reserva->getFecha();
    }
    if ($_POST['hora'] != "") {
        $hora= $_POST['hora'];
    } else {
        $hora = $reserva->getHora();
    }
    if ($_POST['personas'] != "") {
        $personas= $_POST['personas'];
    } else {
        $personas = $reserva->getPersonas();
    }



    $reserva->editarReserva($nombre,$email,$fecha,$hora,$personas);
    $arrayReservas=ReservaPDO::getReservas();
    header("Location: index.php?pagina=panelReservas");



}
if (isset($_POST['Volver'])){//Si se pulsa el boton de Volver se redirige a index.php pasandole la pagina de departamentos
    header("Location: index.php?pagina=panelReservas");
}else{//Si no se pulsa volver se muestra el layout
    require_once 'View/layoutpanel.php';
}
?>