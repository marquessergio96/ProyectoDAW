
<div style="margin-top: 20px;">
    <a class="btn btn-default" href="index.php?pagina=panelReservas&mostrar=Activa">Reservas activas</a>
    <a class="btn btn-default" href="index.php?pagina=panelReservas&mostrar=Anulada">Reservas anuladas</a>
    <a class="btn btn-default" href="index.php?pagina=panelReservas&mostrar=Todas">Historial reservas</a>
    <table class="table table-striped" style="border: 1px solid black;">
        <thead class="thead-dark">
        <tr style="background-color: white">
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Fecha</th>
            <th scope="col">Hora</th>
            <th scope="col">Personas</th>
          <?php  if (isset($_GET['mostrar'])&& $_GET['mostrar']=='Activa' || !isset($_GET['mostrar'])) {?>

            <th scope="col">Acciones</th>
            <?php }else{ ?>
            <th scope="col">Estado</th>
            <?php } ?>
        </tr>
        </thead>
        <tbody style="padding: 20px;">
        <?php


        foreach ($arrayReservas as $reserva) {
            $fecha=explode('-',$reserva['fecha']);
            echo "<tr style='background-color: white;width: auto;'>";
            echo "<td><div style='width: auto;height: auto;'> " . $reserva['nombre'] . "</div></td>";
            echo "<td><div style='width: auto;height: auto;'>" . $reserva['email'] . "</div></td>";
            echo "<td><div style='width: auto;height: auto;'>" . $fecha[2]."-".$fecha[1]."-".$fecha[0]. "</div></td>";
            echo "<td><div style='width: auto;height: auto;'>" . $reserva['hora'] . "</div></td>";
            echo "<td><div style='width: auto;height: auto;'>" . $reserva['numeroPersonas'] . "</div></td>";
            if (isset($_GET['mostrar'])&& $_GET['mostrar']=='Activa' || !isset($_GET['mostrar'])) {
                echo "<td><div style='width: auto;height: auto;'>";
                echo "<div class='btn-toolbar' role='toolbar'>";
                echo "<div class='btn-group'>";
                echo '<a href="index.php?codReserva=' . $reserva['codReserva'] . '&pagina=terminarReserva" class="btn btn-success"/>';
                echo "<span class='glyphicon glyphicon-ok'></span>";
                echo '<a href="index.php?codReserva=' . $reserva['codReserva'] . '&pagina=editarReserva" class="btn btn-warning"/>';
                echo "<span class='glyphicon glyphicon-cog'></span>";
                echo '<a href="index.php?codReserva=' . $reserva['codReserva'] . '&pagina=borrarReserva" class="btn btn-danger"/>';
                echo "<span class='glyphicon glyphicon-remove'></span>";


                echo "</div>";
                echo "</div>";
                echo "</div>";

                echo "</td>";
            }else{
                echo "<td><div style='width: auto;height: auto;'>" . $reserva['estado'] . "</div></td>";

            }
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>