<?php
    include_once('../clases/Empleado.php');
    $empleado = new Empleado();
    $empleado->asignarNombre($_GET['txtNombre']);
    $empleado->apellido=$_GET['txtApellido'];
    $empleado->telefono=$_GET['txtNumeroTel'];
    $empleado->direccion=$_GET['txtDireccion'];
    $empleado->codigo=$_GET['txtCodigo'];
    $empleado->nivelAcademico=$_GET['txtNivelAcad'];
    $empleado->sueldoBase=$_GET['txtSueldoBase'];
    echo "<br>Sueldo Liquido: ".$empleado->calcularSueldoLiquido();
    echo $empleado->verDatos();
?>