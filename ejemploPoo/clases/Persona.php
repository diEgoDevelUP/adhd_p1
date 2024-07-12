<?php
    class Persona{
        //atributos
        private $nombre="";
        public $apellido="";
        public $telefono=0;
        public $direccion="";
        // metodos para asignar set
        public function asignarNombre($valor){
            $this->nombre = $valor;
        }
        //metodo para obtener get
        public function verNombre(){
            return $this->nombre;
        }
        //nombre completo
        public function nombreCompleto(){
            return $this->nombre . " " . $this->apellido;
        }
        public function verDatos(){
            return "<br>Nombre del empleado: ".$this->nombreCompleto()."<br>Numero de telefono: ".$this->telefono."<br>Direccion de domicilio: ".$this->direccion;
        }
    }
?>
