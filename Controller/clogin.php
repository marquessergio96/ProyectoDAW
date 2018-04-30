<?php
if (isset($_POST['Enviar'])){
    header("Location: ../index.php?pagina=panel");
}
if(isset($_POST['Volver'])){

}else {
    require_once 'View/vlogin.php';
}
?>
