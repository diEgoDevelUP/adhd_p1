<?php
    include_once('Empleado.php');
    class Cobros extends Empleado{
        public $bonificacion=0;
        public $comisionCobros=0;

        public function calcularSueldoLiquido(){
            $sueldoLiquido= parent::calcularSueldoLiquido() + $this->bonificacion + $this->comisionCobros;
            return $sueldoLiquido;
        }

         public function verDatos(){
            return parent::verDatos()
            ."<br> Bonificacion del empleado: ".$this->bonificacion
            ."<br> Comision por cobros: ".$this->comisionCobros;
        }
    }
?>