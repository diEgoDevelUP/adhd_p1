<?php
    include_once('../clases/Cliente.php');
    $cliente = new Cliente();
    $cliente->nit=$_GET['txtNit'];
    $cliente->telefono=$_GET['txtNumeroTel'];
    $cliente->apellido=$_GET['txtApellido'];
    $cliente->direccion=$_GET['txtDireccion'];
    $cliente->asignarNombre($_GET['txtNombre']);
    echo $cliente->verDatos();
    echo "<br>Nombre Completo: ".$cliente->nombreCompleto();
    echo "<br>Numero de telefono: ".$cliente->telefono;
    echo "<br>Direccion: ".$cliente->direccion;
?>