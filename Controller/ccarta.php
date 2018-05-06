<?php
$arrayProductos=Producto::getProductosTipo('Primero');//Array para recoger todos los productos.
$arrayProductos2=Producto::getProductosTipo('Segundo');//Array para recoger todos los productos.
$arrayProductos3=Producto::getProductosTipo('Postre');//Array para recoger todos los productos.

require_once 'View/layout.php';
?>