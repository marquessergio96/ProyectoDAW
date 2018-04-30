<?php
if (isset($_POST['Volver'])){
    echo 'GOLAAAAAAAAAAAAAAAAAAAAAAAAA';
    header("Location: ../index.php?pagina=inicio");
}else {
    require_once 'View/vpanel.php';
}
?>
