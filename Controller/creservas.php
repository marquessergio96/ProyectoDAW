<?php
if (isset($_POST['Reservar'])) {


    echo $_POST['nombre'];
    echo $_POST['email'];
    echo $_POST['fecha'];
    echo $_POST['hora'];
    echo $_POST['personas'];

    if(Reserva::registrarReserva($_POST['nombre'],$_POST['email'],$_POST['fecha'],$_POST['hora'],$_POST['personas'],'Activa')){
        header("Location: ../index.php?pagina=reservas");
    }

}
require_once 'View/layout.php';
?>