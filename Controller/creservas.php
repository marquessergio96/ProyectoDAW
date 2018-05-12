<?php
$entradaOK=true;//Variable que controla los datos que se le pasan por el formulario.
$mensajeError = array(//Array para guardar los mensajes de errores.
    "errorNombre"=>'',
    "errorFecha"=>'',
    "errorEmail"=>'',
    "errorPersonas"=>'',
);
$mensaje='';
if(isset($_POST['Reservar'])){
    $nombre=str_replace(' ', '', $_POST['nombre']);
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
if (isset($_POST['Reservar']) && $entradaOK) {
    $estado='Activa';
    if(Reserva::registrarReserva($_POST['nombre'],$_POST['email'],$_POST['fecha'],$_POST['hora'],$_POST['personas'],$estado)){
        header("Location: ../index.php?pagina=reservas");
    }

}
require_once 'View/layout.php';
?>