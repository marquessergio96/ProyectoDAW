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


    public static function editarReserva($codReserva,$nombre, $email, $fecha, $hora, $personas){
        $modificacionOK=false;
        $sql = "Update Reserva SET nombre=?,email=?,fecha=?,hora=?,numeroPersonas=? where codReserva=?";
        $resultado= DBPDO::ejecutaConsulta($sql,[$nombre, $email, $fecha, $hora, $personas,$codReserva]);
        if ($resultado->rowCount()==1){
            $modificacionOK = true;
        }
        return $modificacionOK;
    }


    public static function anularReserva($codReserva){
        $borradoOK=false;
        $sql = "Update Reserva set reservaActiva=false where codReserva=?";
        $resultado= DBPDO::ejecutaConsulta($sql,[$codReserva]);
        if ($resultado->rowCount()==1){
            $borradoOK = true;
        }
        return $borradoOK;
    }

    public static function obtenerReserva($codReserva){
        $sql="select * from Reserva WHERE codReserva=?";
        $arrayReserva=[];
        $resultado=DBPDO::ejecutaConsulta($sql,[$codReserva]);
        if ($resultado->rowCount()==1){
            $resultado = $resultado->fetchObject();
            $arrayReserva['nombre']=$resultado->nombre;
            $arrayReserva['email']= $resultado->email;
            $arrayReserva['fecha']= $resultado->fecha;
            $arrayReserva['hora'] = $resultado->hora;
            $arrayReserva['personas'] = $resultado->numeroPersonas;
            $arrayReserva['estado'] = $resultado->reservaActiva;
        }
        return $arrayReserva;
    }
}