<?php
    include_once('../clases/Cobros.php');
    $cobros = new Cobros();

    $cobros->asignarNombre($_GET['txtNombre']);
    $cobros->apellido=$_GET['txtApellido'];
    $cobros->telefono=$_GET['txtNumeroTel'];;
    $cobros->direccion=$_GET['txtDireccion'];
    $cobros->codigo=$_GET['txtCodigo'];
    $cobros->nivelAcademico=$_GET['txtNivelAcad'];
    $cobros->sueldoBase=$_GET['txtSueldoBase'];
    $cobros->bonificacion=$_GET['txtBonificacion'];
    $cobros->comisionCobros=$_GET['txtComisionCobro'];

    echo "<br> Sueldo Liquido: ".$cobros->calcularSueldoLiquido();
    echo $cobros->verDatos();
?>