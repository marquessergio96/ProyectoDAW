<?php
if (isset($_POST['Reservar'])) {


    echo $_POST['nombre'];
    echo $_POST['email'];
    echo $_POST['fecha'];
    echo $_POST['hora'];
    echo $_POST['personas'];

    Reserva::registrarReserva($_POST['nombre'],$_POST['email'],$_POST['fecha'],$_POST['hora'],$_POST['personas'],1);

}
require_once 'View/layout.php';
?>