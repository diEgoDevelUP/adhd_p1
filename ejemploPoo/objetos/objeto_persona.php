<?php
    //referencia al archivo donde esta la clase
    include_once('../clases/Persona.php');
    //instanciar la clase o crear un objeto de una clase
    $persona = new Persona();
    //asigne valor al atributo apellido es cual es publico
    $persona->apellido=$_GET['txtApellido'];
    //mostrando el contenido del atributo apellido el cual es publico
    //echo "<br>Apellido: ". $persona->apellido;
    //asignado nombre por medio de un metodo porque el atributo es privado
    $persona->asignarNombre($_GET['txtNombre']);
    //mostrar contenido del atributo nombre, es privado por eso se uso un metodo
    //echo "<br>Nombre: ". $persona->verNombre();
    //mostrar nombre completo
    echo "<br> Nombre completo: ". $persona->nombreCompleto();
    $persona->telefono=$_GET['txtNumeroTel'];
    echo "<br> Telefono: ". $persona->telefono;
    $persona->direccion=$_GET['txtDireccion'];
    echo "<br> Direccion: ". $persona->direccion;
    echo "<br> Datos completos: ".$persona->verDatos();
?>