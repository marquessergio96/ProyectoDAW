<?php
Class ReservaPDO{
    /**
     * Funcion que devuelve todas las reservas de la bd.
     *
     * @param $estado
     * @return array
     */
    public static function getReservas($estado){
        if($estado=='Todas'){
            $sql="select * from Reserva";
        }else {
            $sql = "select * from Reserva where estado=?";
        }
        $arrayReserva=[];
        $resultadoConsulta=DBPDO::ejecutaConsulta($sql,[$estado]);
        if ($resultadoConsulta->rowCount()>0){
            $arrayReserva=$resultadoConsulta->fetchAll();
        }
        return $arrayReserva;
    }


    /**
     * Funcion para insertar una reserva en la bd
     *
     * @param $nombre
     * @param $email
     * @param $fecha
     * @param $hora
     * @param $personas
     * @param $estado
     * @return bool
     */
    public static function registrarReserva($nombre, $email, $fecha, $hora, $personas, $estado){
        $registroOK=false;
        $sql = "Insert into Reserva (nombre, email, fecha, hora, numeroPersonas,estado) values (?,?,?,?,?,?) ";
        $resultado= DBPDO::ejecutaConsulta($sql,[$nombre, $email, $fecha, $hora, $personas,$estado]);
        if ($resultado->rowCount()==1){
            $registroOK = true;
        }
        return $registroOK;
    }


    /**
     * Funcion para editar una reserva.
     *
     * @param $codReserva
     * @param $nombre
     * @param $email
     * @param $fecha
     * @param $hora
     * @param $personas
     * @return bool
     */
    public static function editarReserva($codReserva, $nombre, $email, $fecha, $hora, $personas){
        $modificacionOK=false;
        $sql = "Update Reserva SET nombre=?,email=?,fecha=?,hora=?,numeroPersonas=? where codReserva=?";
        $resultado= DBPDO::ejecutaConsulta($sql,[$nombre, $email, $fecha, $hora, $personas,$codReserva]);
        if ($resultado->rowCount()==1){
            $modificacionOK = true;
        }
        return $modificacionOK;
    }


    /**
     * Funcion para anular una reserva.
     *
     * @param $codReserva
     * @return bool
     */
    public static function anularReserva($codReserva){
        $borradoOK=false;
        $sql = "Update Reserva set estado='Anulada' where codReserva=?";
        $resultado= DBPDO::ejecutaConsulta($sql,[$codReserva]);
        if ($resultado->rowCount()==1){
            $borradoOK = true;
        }
        return $borradoOK;
    }

    /**
     * Funcion para dar una reserva por finalizada.
     *
     * @param $codReserva
     * @return bool
     */
    public static function terminarReserva($codReserva){
        $borradoOK=false;
        $sql = "Update Reserva set estado='Terminada' where codReserva=?";
        $resultado= DBPDO::ejecutaConsulta($sql,[$codReserva]);
        if ($resultado->rowCount()==1){
            $borradoOK = true;
        }
        return $borradoOK;
    }

    /**
     * Funcion que devuelve los datos de una reserva.
     *
     * @param $codReserva
     * @return array
     */
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
            $arrayReserva['estado'] = $resultado->estado;
        }
        return $arrayReserva;
    }

    /**
     * Funcion que devuelve el numero de personas en una determinada fecha y hora.
     *
     * @param $fecha
     * @param $hora
     * @return mixed
     */
    public static function getPersonasHora($fecha, $hora){
        $sql="SELECT sum(numeroPersonas) FROM Restaurante.Reserva where fecha = ? and hora = ?";
        $resultado=DBPDO::ejecutaConsulta($sql,[$fecha,$hora]);
        $columna=$resultado->fetchColumn();
        return $columna;
    }
}