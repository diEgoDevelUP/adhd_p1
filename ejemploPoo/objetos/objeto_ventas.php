<?php
    include_once('../clases/Ventas.php');
    $ventas = new Ventas();

    $ventas->asignarNombre($_GET['txtNombre']);
    $ventas->apellido=$_GET['txtApellido'];
    $ventas->telefono=$_GET['txtNumeroTel'];
    $ventas->direccion=$_GET['txtDireccion'];
    $ventas->codigo=$_GET['txtCodigo'];
    $ventas->nivelAcademico=$_GET['txtNivelAcad'];
    $ventas->sueldoBase=$_GET['txtSueldoBase'];
    $ventas->tipoContratacion=$_GET['txtTipocontratacion'];
    $ventas->comisionVenta=$_GET['txtComisionVenta'];
    
    echo "<br>Sueldo Liquido; ".$ventas->calcularSueldoLiquido();
    echo $ventas->verDatos();
?>