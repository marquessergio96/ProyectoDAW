<?php
/**
 * File UsuarioPDO.php
 *
 * Consultas a la base de datos
 *
 * @package modelo
 */
require_once 'DBPDO.php';

/**
 * Class UsuarioPDO
 *
 * Clase que realiza un CRUD sobre Usuarios.
 *
 * @author Sergio Marqués
 * @version 1.0
 */
class ProductoPDO {


    public static function getProductos(){
        $sql="select * from Producto limit 5";
        $arrayProductos=[];
        $resultadoConsulta=DBPDO::ejecutaConsulta($sql,[]);
        if ($resultadoConsulta->rowCount()>0){
            $arrayProductos=$resultadoConsulta->fetchAll();
        }
        return $arrayProductos;
    }
    /**
     * Funcion para registrar el usuario.
     *
     * Funcion a la que se le pasan como parametros el codigo del usuario, la descipcion y el password,
     * se llama al metodo ejecutaConsulta y la realiza.
     *
     * @param string    $codUsuario   Codigo del usuario.
     * @param string    $descripcion  Descripcion del usuario.
     * @param string    $password     Contraseña del usuario.
     * @return bool         Boolean que controla que se ha ejecutado bien
     */
    public static function registrarProducto($nombre, $descripcion, $precio, $tipo, $imagen){
        $registroOK=false;
        $sql = "Insert into Producto values (?,?,?,?,?) ";
        $resultado= DBPDO::ejecutaConsulta($sql,[$nombre, $descripcion, $precio, $tipo, $imagen]);
        if ($resultado->rowCount()==1){
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
     * @param string    $codUsuario   Codigo del usuario.
     * @param string    $descripcion  Descripcion del usuario.
     * @param string    $password     Contraseña del usuario.
     * @return bool         Boolean que controla que se ha ejecutado bien
     */
    public static function editarUsuario($codUsuario, $descripcion, $password){
        $modificacionOK=false;
        $sql = "Update Usuarios SET descUsuario=?,password=? where codUsuario=?";
        $resultado= DBPDO::ejecutaConsulta($sql,[$descripcion,$password,$codUsuario]);
        if ($resultado->rowCount()==1){
            $modificacionOK = 'Modificacion OK';
        }
        return $modificacionOK;
    }

    /**
     * Funcion para editar un usuario.
     *
     * Funcion a la que se le pasan como parametros el codigo del usuario, la descipcion y el password,
     * se llama al metodo ejecutaConsulta y la realiza.
     *
     * @param string    $codUsuario   Codigo del usuario.
     * @return bool         Boolean que controla que se ha ejecutado bien
     */
    public static function eliminarProducto($nombre){
        $borradoOK=false;
        $sql = "Delete from Producto where nombre=?";
        $resultado= DBPDO::ejecutaConsulta($sql,[$nombre]);
        if ($resultado->rowCount()==1){
            $borradoOK = true;
        }
        return $borradoOK;
    }

}
?>