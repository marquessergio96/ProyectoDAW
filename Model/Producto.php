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


    private $nombre;

    private $descripcion;

    private $precio;

    private $tipo;

    private $imagen;

    /**
     * Usuario constructor.
     * @param string $nombre
     * @param string $descripcion
     * @param float $precio
     * @param string $tipo
     * @param string $imagen
     */
    public function __construct($nombre, $descripcion, $precio, $tipo, $imagen)
    {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->tipo = $tipo;
        $this->imagen = $imagen;
    }


    public static function getProductos(){
        return ProductoPDO::getProductos();
    }


    public static function registrarProducto($nombre, $descripcion, $precio, $tipo, $imagen){
        $producto=null;
        if (ProductoPDO::registrarProducto($nombre,$descripcion,$precio,$tipo,$imagen)){
            $producto=new Producto($nombre,$descripcion,$precio,$tipo,$imagen);
        }
        return $producto;
    }

    public static function obtenerProducto($nombre){
        $producto=null;
        $arrayProducto=ProductoPDO::obtenerProducto($nombre);
        if (!empty($arrayProducto)){
            $producto= new Producto($nombre,$arrayProducto['descripcion'],$arrayProducto['precio'],$arrayProducto['tipo'],$arrayProducto['imagen']);
        }
        return $producto;
    }

    public function editarProducto($descripcion,$precio,$tipo,$imagen)
    {
        $nombre = $this->getNombre();
        if(ProductoPDO::editarProducto($nombre,$descripcion, $precio,$tipo,$imagen)){
            $this->setDescripcion($descripcion);
            $this->setPrecio($precio);
            $this->setTipo($tipo);
            $this->setImagen($imagen);
        }
        return false;
    }



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