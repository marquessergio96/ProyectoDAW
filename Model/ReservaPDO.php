<?php
Class ReservaPDO{
    public static function getReservas(){
        $sql="select * from Reserva";
        $arrayReserva=[];
        $resultadoConsulta=DBPDO::ejecutaConsulta($sql,[]);
        if ($resultadoConsulta->rowCount()>0){
            $arrayReserva=$resultadoConsulta->fetchAll();
        }
        return $arrayReserva;
    }



    public static function registrarReserva($nombre, $email, $fecha, $hora, $personas,$estado){
        $registroOK=false;
        $sql = "Insert into Reserva (nombre, email, fecha, hora, numeroPersonas,reservaActiva) values (?,?,?,?,?,?) ";
        $resultado= DBPDO::ejecutaConsulta($sql,[$nombre, $email, $fecha, $hora, $personas,$estado]);
        if ($resultado->rowCount()==1){
            $registroOK = true;
        }
        return $registroOK;
    }


    public static function editarProducto($codProducto,$nombre,$descripcion, $precio,$tipo,$imagen){
        $modificacionOK=false;
        $sql = "Update Producto SET nombre=?,descripcion=?,precio=?,tipo=?,imagenes=? where codProducto=?";
        $resultado= DBPDO::ejecutaConsulta($sql,[$nombre,$descripcion,$precio, $tipo,$imagen,$codProducto]);
        if ($resultado->rowCount()==1){
            $modificacionOK = true;
        }
        return $modificacionOK;
    }


    public static function eliminarProducto($codProducto){
        $borradoOK=false;
        $sql = "Delete from Producto where codProducto=?";
        $resultado= DBPDO::ejecutaConsulta($sql,[$codProducto]);
        if ($resultado->rowCount()==1){
            $borradoOK = true;
        }
        return $borradoOK;
    }

    public static function obtenerProducto($codProducto){
        $sql="select * from Producto WHERE codProducto=?";
        $arrayProducto=[];
        $resultado=DBPDO::ejecutaConsulta($sql,[$codProducto]);
        if ($resultado->rowCount()==1){
            $resultado = $resultado->fetchObject();
            $arrayProducto['nombre']=$resultado->nombre;
            $arrayProducto['descripcion']= $resultado->descripcion;
            $arrayProducto['precio']= $resultado->precio;
            $arrayProducto['tipo'] = $resultado->tipo;
            $arrayProducto['imagen'] = $resultado->imagenes;
        }
        return $arrayProducto;
    }
}