<?php
if(!isset($_SESSION))
{
    session_start();
}
if (!isset($_SESSION['usuario'])){
    header("Location: ../index.php?pagina=login");
}
if (isset($_GET['accion'])){
  if ($_GET['accion']=='cerrar'){
      session_destroy();
      session_unset();
      header("Location: ../index.php?pagina=inicio");
  }
    if ($_GET['accion']=='productos'){
        header("Location: ../index.php?pagina=productos");
    }
    if($_GET['accion']=='modificarAdmin'){
        header("Location: ../index.php?pagina=modificarAdmin");
    }
} else {
    require_once 'View/layoutpanel.php';
}
?>
