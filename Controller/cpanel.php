<?php
if (!isset($_SESSION['usuario'])){
    header("Location: ../index.php?pagina=login");
}
if (isset($_GET['accion'])){
  if ($_GET['accion']=='cerrar'){
      session_destroy();
      session_unset();
      header("Location: ../index.php?pagina=inicio");
  }
} else {
    require_once 'View/vpanel.php';
}
?>
