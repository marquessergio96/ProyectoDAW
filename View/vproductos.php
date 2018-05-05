<div style="margin-top: 20px;">
<a href="index.php?pagina=insertarProducto"> <button class="btn btn-default" style="background-color: #0e0e0e;color:red"><span class="glyphicon glyphicon-plus-sign"></span> Añadir Producto </button></a>
<table class="table table-striped" style="border: 1px solid black;">
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
        echo "<tr style='background-color: white;width: auto;'>";
        echo '<td><img style="width:80px;height:80px;" src='.$producto['imagenes'].'></img></td>';
        echo "<td><div style='width: auto;height: auto;margin-top:30px;'> " . $producto['nombre'] . "</div></td>";
        echo "<td><div style='width: auto;height: auto;margin-top:30px;'>" . $producto['descripcion'] . "</div></td>";
        echo "<td><div style='width: auto;height: auto;margin-top:30px;'>" . $producto['precio'] . "€</div></td>";
        echo "<td><div style='width: auto;height: auto;margin-top:30px;'>" . $producto['tipo'] . "</div></td>";
        echo "<td><div style='width: auto;height: auto;margin-top:30px;'>";
        echo "<div class='btn-toolbar' role='toolbar'>";
        echo "<div class='btn-group'>";
        echo '<a href="index.php?nombre='.$producto['nombre'].'&pagina=editarProducto" class="btn btn-warning"/>';
        echo    "<span class='glyphicon glyphicon-cog'></span>";
        echo '<a href="index.php?nombre='.$producto['nombre'].'&pagina=eliminarProducto" class="btn btn-danger"/>';
        echo "<span class='glyphicon glyphicon-trash'></span>";



        echo "</div>";
        echo "</div>";
        echo "</div>";

        echo "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</div>
