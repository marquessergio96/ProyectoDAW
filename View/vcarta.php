
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
<h1 id="Titulo" style=" width: 300px;margin: auto;margin-top: 100px; height: auto;">Menú</h1>

    <?php
    echo '<div style="width: 800px;
    height: auto;
    margin: 0 auto;"> <h1 id="primero" style="background:#D3D3D3;width:700px;box-shadow: 10px 10px 5px -1px rgba(0,0,0,1);
 ">Primeros platos</h1>';
        foreach ($arrayProductos as $producto){

                    echo '<div style="background-color:#A9A9A9;box-shadow: 5px 4px 5px -1px rgba(0,0,0,1);
width: 700px;height: auto;display: inline-flex;margin-bottom: 15px;">';

                    echo '<img style="width:200px;height:200px;border:2px solid #2F4F4F	" src='.$producto['imagenes'].'></img>';
                    echo '<div style="height: auto;
    width: auto;
    padding-left: 20px;">';
                    echo '<div style="height: auto;">';
                    echo '<h1 id="nombreProducto" style="background-color: #696969;width: 100%;border: 1px solid #2F4F4F	">'.$producto['nombre'].'</h1><br>';
                    echo '</div>';
                    echo '<div style="margin-top: 10px; width: auto">';
                    echo '<h4>'.$producto['descripcion'].'</h4>';
                    echo '</div>';
                    echo '</div>';
            echo '</div>';


        }
        echo '</div>';
    ?>


<?php
echo '<div style="width: 800px;
    height: auto;
    margin: 0 auto;"> <h1 id="primero"  style="background:#D3D3D3;width:700px;box-shadow: 10px 10px 5px -1px rgba(0,0,0,1);">Segundos platos</h1>';
foreach ($arrayProductos2 as $producto){

    echo '<div style="background-color:#A9A9A9;box-shadow: 5px 4px 5px -1px rgba(0,0,0,1);width: 700px;height: auto;display: inline-flex;margin-bottom: 15px;">';
    echo '<img style="width:200px;height:200px;" src='.$producto['imagenes'].'></img>';

    echo '<div style="height: auto;
    width: auto;
    padding-left: 20px;">';
    echo '<div style="height: auto">';
    echo '<h1 style="background-color: #696969;width: 100%;border: 1px solid #2F4F4F	" id="nombreProducto">'.$producto['nombre'].'</h1><br>';
    echo '</div>';
    echo '<div style="margin-top: 10px; width: auto">';
    echo '<h4>'.$producto['descripcion'].'</h4>';
    echo '</div>';
    echo '</div>';

    echo '</div>';


}
echo '</div>';
?>

<?php
echo '<div style="width: 800px;
    height: auto;
    margin: 0 auto;"> <h1 id="primero"  style="background:#D3D3D3;width:700px;box-shadow: 10px 10px 5px -1px rgba(0,0,0,1);">Postres</h1>';
foreach ($arrayProductos3 as $producto){

    echo '<div style="background-color:#A9A9A9;box-shadow: 5px 4px 5px -1px rgba(0,0,0,1);width: 700px;height: auto;display: inline-flex;margin-bottom: 15px;">';

    echo '<img style="width:200px;height:200px;" src='.$producto['imagenes'].'></img>';
    echo '<div style="height: auto;
    width: auto;
    padding-left: 20px;">';
    echo '<div style="height: auto">';
    echo '<h1 id="nombreProducto" style="background-color: #696969;width: 100%;border: 1px solid #2F4F4F	">'.$producto['nombre'].'</h1><br>';
    echo '</div>';
    echo '<div style="margin-top: 10px; width: auto">';
    echo '<h4>'.$producto['descripcion'].'</h4>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

}
echo '</div>';
?>
