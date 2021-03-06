<?php
require_once 'ReservaPDO.php';

    Class Reserva{
        /**
         * @var
         */
        private $codReserva;
        /**
         * @var
         */
        private $nombre;
        /**
         * @var
         */
        private $email;
        /**
         * @var
         */
        private $fecha;
        /**
         * @var
         */
        private $hora;
        /**
         * @var
         */
        private $personas;
        /**
         * @var
         */
        private $estado;

        /**
         * Reserva constructor.
         * @param $codReserva
         * @param $nombre
         * @param $email
         * @param $fecha
         * @param $hora
         * @param $personas
         * @param $estado
         */
        public function __construct($codReserva,$nombre, $email, $fecha, $hora, $personas, $estado)
        {
            $this->codReserva=$codReserva;
            $this->nombre = $nombre;
            $this->email = $email;
            $this->fecha = $fecha;
            $this->hora = $hora;
            $this->personas = $personas;
            $this->estado = $estado;
        }


        /**
         * Funcion para recuperar un array con las reservas de la bd.
         *
         * @param $estado
         * @return array
         */
        public static function getReservas($estado){
            return ReservaPDO::getReservas($estado);
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
         * @return null|Reserva
         */
        public static function registrarReserva($nombre, $email, $fecha, $hora, $personas, $estado){
            $reserva=null;
            if (ReservaPDO::registrarReserva($nombre, $email, $fecha, $hora, $personas,$estado)){
                $reserva=new Reserva($nombre, $email, $fecha, $hora, $personas,$estado);
            }
            return $reserva;
        }

        /**
         * Funcion utilizada para recuperar los datos de una reserva de la bd.
         *
         * @param $codReserva
         * @return null|Reserva
         */
        public static function obtenerReserva($codReserva){
            $reserva=null;
            $arrayReserva=ReservaPDO::obtenerReserva($codReserva);
            if (!empty($arrayReserva)){
                $reserva= new Reserva($codReserva,$arrayReserva['nombre'],$arrayReserva['email'],$arrayReserva['fecha'],$arrayReserva['hora'],$arrayReserva['personas'],$arrayReserva['estado']);
            }
            return $reserva;
        }

        /**
         * Funcion utlizada para editar una reserva.
         *
         * @param $nombre
         * @param $email
         * @param $fecha
         * @param $hora
         * @param $personas
         * @return bool
         */
        public function editarReserva($nombre, $email, $fecha, $hora, $personas)
        {
            $codReserva = $this->getCodReserva();
            if(ReservaPDO::editarReserva($codReserva,$nombre,$email, $fecha,$hora,$personas)){
                $this->setNombre($nombre);
                $this->setEmail($email);
                $this->setFecha($fecha);
                $this->setHora($hora);
                $this->setPersonas($personas);

            }
            return false;
        }

        /**
         * @param $fecha
         * @param $hora
         * @return mixed
         */
        public static function getPersonasHora($fecha, $hora){
            return ReservaPDO::getPersonasHora($fecha,$hora);
        }


        /**
         * @return bool
         */
        public function anularReserva(){
            $codReserva=$this->getCodReserva();
            return ReservaPDO::anularReserva($codReserva);
        }

        /**
         * @return bool
         */
        public function terminarReserva(){
            $codReserva=$this->getCodReserva();
            return ReservaPDO::terminarReserva($codReserva);
        }
        /**
         * @return mixed
         */
        public function getCodReserva()
        {
            return $this->codReserva;
        }

        /**
         * @param mixed $codReserva
         */
        public function setCodReserva($codReserva)
        {
            $this->codReserva = $codReserva;
        }

        /**
         * @return mixed
         */
        public function getNombre()
        {
            return $this->nombre;
        }

        /**
         * @param mixed $nombre
         */
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        /**
         * @return mixed
         */
        public function getEmail()
        {
            return $this->email;
        }

        /**
         * @param mixed $email
         */
        public function setEmail($email)
        {
            $this->email = $email;
        }

        /**
         * @return mixed
         */
        public function getFecha()
        {
            return $this->fecha;
        }

        /**
         * @param mixed $fecha
         */
        public function setFecha($fecha)
        {
            $this->fecha = $fecha;
        }

        /**
         * @return mixed
         */
        public function getHora()
        {
            return $this->hora;
        }

        /**
         * @param mixed $hora
         */
        public function setHora($hora)
        {
            $this->hora = $hora;
        }

        /**
         * @return mixed
         */
        public function getPersonas()
        {
            return $this->personas;
        }

        /**
         * @param mixed $personas
         */
        public function setPersonas($personas)
        {
            $this->personas = $personas;
        }

        /**
         * @return mixed
         */
        public function getEstado()
        {
            return $this->estado;
        }

        /**
         * @param mixed $estado
         */
        public function setEstado($estado)
        {
            $this->estado = $estado;
        }


    }
?>