<?php
/**
 * File UsuarioPDO.php
 *
 * Consultas a la base de datos
 *
 * @package modelo
 */
    require_once 'DBPDO.php';
    require_once 'UsuarioDB.php';

        /**
         * Class UsuarioPDO
         *
         * Clase que realiza un CRUD sobre Usuarios.
         *
         * @author Sergio Marqués
         * @version 1.0
         */
class UsuarioPDO implements UsuarioDB
{

    /**
     * Funcion para validar un usuario.
     *
     * Esta funcion valida un usuario pasandole un $codUsuario y un $password.
     *
     * @param string $codUsuario Codigo unico de cada usuario
     * @param string $password Contraseña del usuario
     * @return array    $arrayUsuario   Array que guarda toda la informacion de un usuario.
     */
    public static function validarUsuario($codUsuario, $password)
    {
        $sql = "Select * from Usuarios WHERE codUsuario='" . $codUsuario . "' and password= SHA2('" . $password . "',256)";
        $arrayUsuario = [];
        $resultadoConsulta = DBPDO::ejecutaConsulta($sql, [$codUsuario, $password]);
        if ($resultadoConsulta->rowCount() == 1) {
            $resultadoFetch = $resultadoConsulta->fetchObject();
            $arrayUsuario['descUsuario'] = $resultadoFetch->descUsuario;
            $arrayUsuario['perfil'] = $resultadoFetch->perfil;
            $arrayUsuario['ultimaConexion'] = $resultadoFetch->ultimaConexion;
        }
        return $arrayUsuario;
    }

    /**
     * Funcion para registrar el usuario.
     *
     * Funcion a la que se le pasan como parametros el codigo del usuario, la descipcion y el password,
     * se llama al metodo ejecutaConsulta y la realiza.
     *
     * @param string $codUsuario Codigo del usuario.
     * @param string $descripcion Descripcion del usuario.
     * @param string $password Contraseña del usuario.
     * @return bool         Boolean que controla que se ha ejecutado bien
     */
    public static function registrarUsuario($codUsuario, $descripcion, $password)
    {
        $registroOK = false;
        $sql = "Insert into Usuarios values (?,?,?,'usuario',NULL,0) ";
        $resultado = DBPDO::ejecutaConsulta($sql, [$codUsuario, $descripcion, $password]);
        if ($resultado->rowCount() == 1) {
            $registroOK = true;
        }
        return $registroOK;
    }

    /**
     * Funcion para editar un usuario.
     *
     * Funcion a la que se le pasan como parametros el codigo del usuario, la descipcion y el password,
     * se llama al metodo ejecutaConsulta y la realiza.
     *
     * @param string $codUsuario Codigo del usuario.
     * @param string $descripcion Descripcion del usuario.
     * @param string $password Contraseña del usuario.
     * @return bool         Boolean que controla que se ha ejecutado bien
     */
    public static function editarUsuario($password)
    {
        $modificacionOK = false;
        $sql = "Update Usuarios password=? where codUsuario=?";
        $resultado = DBPDO::ejecutaConsulta($sql, [$password]);
        if ($resultado->rowCount() == 1) {
            $modificacionOK = 'Modificacion OK';
        }
        return $modificacionOK;
    }
}





?>