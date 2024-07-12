<?php
    include_once('../clases/Administracion.php');
    $admon = new Administracion();

    $admon->asignarNombre($_GET['txtNombre']);
    $admon->apellido=$_GET['txtApellido'];
    $admon->telefono=$_GET['txtNumeroTel'];
    $admon->direccion=$_GET['txtDireccion'];
    $admon->codigo=$_GET['txtCodigo'];
    $admon->nivelAcademico=$_GET['txtNivelAcad'];
    $admon->sueldoBase=$_GET['txtSueldoBase'];
    $admon->bonificacion=$_GET['txtBonificacion'];

    echo "<br> Sueldo Liquido: ".$admon->calcularSueldoLiquido();
    echo $admon->verDatos();
?>