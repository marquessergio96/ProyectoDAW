<?php
/**
 * Creacion de usuarios.
 *
 * Creacion de usuarios usando UsuarioPDO.php
 *
 * @package Modelo
 */

    require_once 'UsuarioPDO.php';


/**
 * Class Usuario
 *
 * Clase para crear usuarios.
 *
 * @author Sergio Marqués
 * @version 1.0
 */
class Usuario{
        //Atributos del objeto usuario.


    /**
     * @var string  $codUsuario     Codigo del usuario.
     */
    private $codUsuario;
    /**
     * @var string  $password       Contraseña del usuario.
     */
    private $password;



        /**
         * Constructor de la clase Usuario.
         *
         * Función que contruye un objeto de la clase Usuario.
         *
         * @param   string  $codUsuario     codigo del usuario.
         * @param   string  $password       contraseña del usuario.
         */
        public function __construct($codUsuario, $password){
            $this->codUsuario=$codUsuario;
            $this->password=$password;
        }
        /**
         * Función para validar el usuario
         *
         * Funcion a la que se le pasan los parametros codUsuario y password y usa el metodo validarUsuario de la clase
         * UsuarioPDO, devuelve un objeto usuario.
         *
         * @param   string  $codUsuario Codigo del usuario que le pasamos.
         * @param   string  $password   Contraseña del usuario.
         *
         * @return object   $usuario    Objeto de la clase Usuario que contien la informacion del usuario.
         */

        public static function validarUsuario($codUsuario,$password){
            $usuario=null;
            $arrayUsuario=UsuarioPDO::validarUsuario($codUsuario,$password);
            if(!empty($arrayUsuario)) {
                $usuario = new Usuario($codUsuario, $password);
            }
            return $usuario;
        }

        /**
         * Funcion para registrar un usuario
         *
         * Funcion a la que se le pasan como parametros el codigo del usuario, la descripcion y la contraseña y llama
         * a la funcion registrarUsuario de UsuarioPDO.
         *
         * @param   string  $codUsuario   Codigo del usuario que le pasamos.
         * @param string $descripcion  Descripcion del usuario.
         * @param string $password     Contraseña del usuario
         * @return null|Usuario Objeto de la clase Usuario
         */
    public static function registrarUsuario($codUsuario, $password){
            $usuario=null;
            if (UsuarioPDO::registrarUsuario($codUsuario,$password)){
                $usuario=new Usuario($codUsuario,$password);
            }
            return $usuario;
        }

        /**
         * Funcion para editar un usuario.
         *
         * Funcion a la que se le pasan por parametro el codigo del usuario, la descripcion y la contraseña, esta funcion
         * llama a editar usuario de la clase UsuarioPDO.
         *
         * @param string $codUsuario   Codigo del usuario.
         * @param string $descripcion  Descripcion del usuario.
         * @param string $password     Contraseña del usuario.
         * @return bool         Boolean que dice si la consulta se ha ejecutado bien o no.
         */
    public function editarUsuario($password){
            $codUsuario=$this->getCodUsuario();
            if (empty($password)){
                $password=hash('sha256',$this->getPassword());
            }
            return UsuarioPDO::editarUsuario($codUsuario,$password);
            }



    public static function obtenerUsuarioDuplicado($codUsuario){
        return UsuarioPDO::obtenerUsuarioDuplicado($codUsuario);
    }
    /**
     * Función getCodUsuario.
     *
     * Función que devuelve el codigo del usuario
     *
     * @return mixed    $codUsuario     Codigo del ussuario.
     */
    public function getCodUsuario(){
            return $this->codUsuario;
        }



    /**
     * Función getPassword
     *
     * Función que devuelve la contraseña del usuario.
     *
     * @return mixed    $password   Contraseña del usuario.
     */
    public function getPassword(){
            return $this->password;
        }

    /**
     * Función setPassword
     *
     * Función que cambia la contraseña del usuario por la que se le pase.
     *
     * @param string    $password   Contraseña del usuario
     */
    public function setPassword($password){
            $this->password = $password;
        }



    }
?>