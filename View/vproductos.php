
<a href="index.php?pagina=insertarProducto"> <button class="btn btn-info"><span class="glyphicon glyphicon-plus-sign"></span> Añadir Producto </button></a>
<table class="table table-striped" style="">
    <thead class="thead-dark">
    <tr style="background-color: white">
        <th scope="row">Imagen</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Precio</th>
        <th scope="col">Tipo</th>
        <th scope="col">Acciones</th>
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
        echo "<td>";
        echo "<div class='btn-toolbar' role='toolbar'>";
        echo "<div class='btn-group'>";
        echo '<a href="index.php?nombre='.$producto['nombre'].'&pagina=editarProducto" class="btn btn-warning"/>';
        echo    "<span class='glyphicon glyphicon-cog'></span>";
        echo '<a href="index.php?nombre='.$producto['nombre'].'&pagina=eliminarProducto" class="btn btn-danger"/>';
        echo "<span class='glyphicon glyphicon-trash'></span>";



        echo "</div>";
        echo "</div>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
