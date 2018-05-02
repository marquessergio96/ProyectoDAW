<?php
/**
 * Creacion de usuarios.
 *
 * Creacion de usuarios usando UsuarioPDO.php
 *
 * @package Modelo
 */

require_once 'ProductoPDO.php';


/**
 * Class Usuario
 *
 * Clase para crear usuarios.
 *
 * @author Sergio Marqués
 * @version 1.0
 */
class Producto{
    //Atributos del objeto usuario.

    /**
     * @var string  $descUsuario    Descripcion del usuario
     */
    private $nombre;
    /**
     * @var string  $password       Contraseña del usuario.
     */
    private $descripcion;
    /**
     * @var string  $perfil     Tipo de perfil del usuario
     */
    private $precio;
    /**
     * @var datetime $ultimaConexion      Ultima conexion del usuario.
     */
    private $tipo;
    /**
     * @var int     $contadorAccesos      Contador de los accesos del usuario
     */
    private $imagen;

    /**
     * Usuario constructor.
     * @param string $nombre
     * @param string $descripcion
     * @param string $precio
     * @param string $tipo
     * @param int $imagen
     */
    public function __construct($nombre, $descripcion, $precio, $tipo, $imagen)
    {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->tipo = $tipo;
        $this->imagen = $imagen;
    }

    /**
     * Función getDepartamentos.
     *
     * Función que devuelve todos los departamentos de la tabla
     *
     * @return array    Array con todos los departamentos.
     */
    public static function getProductos(){
        return ProductoPDO::getProductos();
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
    public static function registrarProducto($nombre, $descripcion, $precio, $tipo, $imagen){
        $producto=null;
        if (ProductoPDO::registrarProducto($nombre,$descripcion,$precio,$tipo,$imagen)){
            $producto=new Producto($nombre,$descripcion,$precio,$tipo,$imagen);
        }
        return $producto;
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
    public function editarUsuario($nombre, $descripcion, $precio, $tipo, $imagen){
        $codUsuario=$this->getCodUsuario();
        if (empty($password)){
            $password=hash('sha256',$this->getPassword());
        }
        return UsuarioPDO::editarUsuario($codUsuario,$descripcion,$password);
    }


    /**
     * Funcion para eliminar un usuario.
     *
     * FUncion a la que se la pasa como parametro el coigo del usuario, esta funcion llma a eliminarUsuario
     * de la clase UsuarioPDO
     *
     * @param string    $codUsuario   Codigo del usuario.
     * @return string   bool         Boolean que indica que el query se ha ejecutado correctamente.
     */
    public function eliminarProducto(){
        $nombre=$this->getNombre();
        return ProductoPDO::eliminarProducto($nombre);
    }

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param string $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param string $precio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    /**
     * @return datetime
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param datetime $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return int
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * @param int $imagen
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }





}
?>