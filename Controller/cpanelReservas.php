<?php
$estado='Activa';
if (isset($_GET['mostrar'])){
    $estado=$_GET['mostrar'];
}
$arrayReservas=Reserva::getReservas($estado);//Array para recoger todos los productos.

require_once 'View/layoutpanel.php';
?>