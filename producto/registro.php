<?php

include("conexion.php");

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['email'];
$contraseña=$_POST['contraseña'];

$sql = "INSERT INTO nuevos_usuarios (nombre,apellido,correo,contraseña) VALUES 
('$nombre','$apellido','$correo','$contraseña')";

$result = mysqli_query ($conexion,$sql);

echo "CUENTA CREADA!!!"



?>