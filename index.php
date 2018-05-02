<?php
require_once 'Model/Usuario.php';
require_once 'Model/Producto.php';
require_once 'Config/DBconfig.php';
require_once 'Core/LibreriaValidacion.php';
require_once 'Config/config.php';
$controlador=$controladores['inicio'];
$error='';//Mensaje que se mostrara por pantalla en caso de que el usuario sea incorrecto
session_start();//Se inicia la sesion o si existe se recupera
if(isset($_SESSION['usuario']) && !isset($_GET['pagina'])){    //Comprobamos que existe la sesion del usuario y usamos el controlador de inicio.
    include_once $controlador;
}
if (isset($_GET['pagina'])){
    $controlador=$controladores[$_GET['pagina']];
    include_once $controlador;
}
else{
    $controlador=$controladores['inicio'];
    include_once $controlador;
}
?>