<?php
if(isset($_POST['Enviar'])) {//Si se pulsa el boton de enviar se valida el usuario.
    $codUsuario = $_POST['codUsuario'];
    $password = $_POST['password'];
    $usuario = Usuario::validarUsuario($codUsuario, $password);

    if (is_null($usuario)) {//Si el usuario devuelto es null se muestra un mensaje por pantalla.
        $error = 'El nombre o la contraseña son incorrectos';
        $_GET['pagina']='login';
        require_once('View/vlogin.php');
    } else {//Si devuelve el usuario
        $_SESSION['usuario'] = $usuario;
        header("Location: ../index.php?pagina=panel");
    }
}else{
    $_GET['pagina']='login';
    require_once('View/vlogin.php');
}
?>
