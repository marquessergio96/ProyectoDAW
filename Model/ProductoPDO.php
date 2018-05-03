<?php

require_once 'DBPDO.php';


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

    public static function registrarProducto($nombre, $descripcion, $precio, $tipo, $imagen){
        $registroOK=false;
        $sql = "Insert into Producto values (?,?,?,?,?) ";
        $resultado= DBPDO::ejecutaConsulta($sql,[$nombre, $descripcion, $precio, $tipo, $imagen]);
        if ($resultado->rowCount()==1){
            $registroOK = true;
        }
        return $registroOK;
    }


    public static function editarProducto($nombre,$descripcion, $precio,$tipo,$imagen){
        $modificacionOK=false;
        $sql = "Update Producto SET descripcion=?,precio=?,tipo=?,imagenes=? where nombre=?";
        $resultado= DBPDO::ejecutaConsulta($sql,[$descripcion,$precio, $tipo,$imagen,$nombre]);
        if ($resultado->rowCount()==1){
            $modificacionOK = true;
        }
        return $modificacionOK;
    }


    public static function eliminarProducto($nombre){
        $borradoOK=false;
        $sql = "Delete from Producto where nombre=?";
        $resultado= DBPDO::ejecutaConsulta($sql,[$nombre]);
        if ($resultado->rowCount()==1){
            $borradoOK = true;
        }
        return $borradoOK;
    }

    public static function obtenerProducto($nombre){
        $sql="select * from Producto WHERE nombre=?";
        $arrayProducto=[];
        $resultado=DBPDO::ejecutaConsulta($sql,[$nombre]);
        if ($resultado->rowCount()==1){
            $resultado = $resultado->fetchObject();
            $arrayProducto['descripcion']= $resultado->descripcion;
            $arrayProducto['precio']= $resultado->precio;
            $arrayProducto['tipo'] = $resultado->tipo;
            $arrayProducto['imagen'] = $resultado->imagenes;
        }
        return $arrayProducto;
    }
}
?>