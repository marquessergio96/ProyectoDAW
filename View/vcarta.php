
<nav class="navbar navbar-inverse" style="position: fixed;
  top: 0;
  width: 100%;  opacity: 0.9;
">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#" id="tituloNav"><u>PROYECTO DAW</u></a>
        </div>
        <ul class="nav navbar-nav" style="float:right;margin-right: 40px;height:75px;">
            <li class="botonesInicio"><a href="index.php?pagina=inicio"">INICIO</a></li>
            <li class="botonesInicio">    <a href="index.php?pagina=carta">CARTA</a>
            </li>
            <li class="botonesInicio">    <a href="index.php?pagina=reservas">RESERVAS</a>
            </li>
            <li class="botonesInicio">    <a href="index.php?pagina=contacto">CONTACTO</a>
            </li>
        </ul>
    </div>
</nav>
<table class="table table-striped">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Precio</th>
        <th scope="col">Tipo</th>
        <th scope="col">Imagen</th>
    </tr>
    </thead>
    <tbody>
<?php
echo "CARTA";
//print_r($arrayProductos);

        foreach ($arrayProductos as $producto) {
            echo "<tr>";
            echo "<td>" . $producto['nombre'] . "</td>";
            echo "<td>" . $producto['descripcion'] . "</td>";
            echo "<td>" . $producto['precio'] . "</td>";
            echo "<td>" . $producto['tipo'] . "</td>";
            echo '<td><img style="width:80px;height:80px;" src='.$producto['imagenes'].'></img></td>';
            echo "</tr>";
        }
?>
    </tbody>
</table>



