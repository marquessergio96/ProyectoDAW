<?php
if (isset($_GET['codReserva'])) {
    $codReserva = $_GET['codReserva'];
    $reserva = Reserva::obtenerReserva($codReserva);
    if ($reserva->terminarReserva()) {//Si el metodo devuelve 1 es que se ha borrado con existo y se redirigira al index
        header("Location:index.php?pagina=panelReservas");
    } else {//Si no mostras un mensaje de error.
        echo "ERROR AL BORRAR";
    }
}
    header("Location:index.php?pagina=panelReservas");

