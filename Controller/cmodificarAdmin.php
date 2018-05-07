<?php
$entradaOK=true;//Variable que controla los datos que se le pasan por el formulario.
$mensajeError = array(//Array para guardar los mensajes de errores.
    "errorPassword"=>''
);
if(isset($_POST['Modificar'])) {
    $mensajeError["errorPassword"] = comprobarAlfaNumerico($_POST['password'], 100, 1, 1);
    if ($_POST['password']!=$_POST['password2']){
        $mensajeError["errorPassword"] = "Las contraseñas no coinciden";
    }
    if($_POST['password']==$_SESSION['usuario']->getPassword()){
        $mensajeError["errorPassword"] = "No puede ser igual que la antigua";

    }
    foreach ($mensajeError as $valor){//Bucle que recorre el array mensajeError, si hay algun mensaje la variable entradaOK cambia a false.
        if ($valor!=null){
            $entradaOK=false;
        }
    }
}
if(isset($_POST['Modificar']) && $entradaOK){
    $password = hash('sha256', $_POST['password']);

    if ($_SESSION['usuario']->editarUsuario($password)){

        header("Location: ../index.php?pagina=panel");
    }else{
        header("Location: ../index.php?pagina=modificarAdmin");
    }
}
if (isset($_POST['Volver'])){
    header("Location: ../index.php?pagina=panel");

}else {
    require_once 'View/layoutpanel.php';
}
?>