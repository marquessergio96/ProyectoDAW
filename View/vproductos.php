
<a href="index.php?pagina=insertarProducto"> <button class="btn btn-info"><span class="glyphicon glyphicon-plus-sign"></span> Añadir Producto </button></a>
<table class="table table-striped" style="">
    <thead class="thead-dark">
    <tr style="background-color: white">
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Precio</th>
        <th scope="col">Tipo</th>
        <th scope="col">Imagen</th>
    </tr>
    </thead>
    <tbody>
    <?php


    foreach ($arrayProductos as $producto) {
        echo "<tr style='background-color: white'>";
        echo '<td><img style="width:80px;height:80px;" src='.$producto['imagenes'].'></img></td>';
        echo "<td>" . $producto['nombre'] . "</td>";
        echo "<td>" . $producto['descripcion'] . "</td>";
        echo "<td>" . $producto['precio'] . "</td>";
        echo "<td>" . $producto['tipo'] . "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>